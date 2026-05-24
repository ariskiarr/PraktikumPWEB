<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function formRegister(){
        return view('register');
    }

    public function register(Request $request){
        User::create([
            'name'=> $request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);
        return redirect('/login')-> with('succes','Register Berhasil');
    }

    public function formLogin(){
        return view('login');
    }

    public function login(Request $request){
        $user = User::where('email',$request->email)->first();

        if(!$user){
            return back()->with('error','email tidak terdaftar');

        }
        if(!Hash::check($request->password,$user->password)){
            return back()->with('error','password salah');
        }

        session([
            'login' => true,
            'user_id'=> $user->id,
            'name'=> $user->name
        ]);

        if($request->has('remember')){
            Cookie::queue('remember_email',$user->email,100000);
        }else{
            Cookie::queue(Cookie::forget('remember_email'));
        }
        return redirect('/dashboard');
    }

    public function dashboard(Request $request){
        if(!session('login')){
            $rememberEmail = Cookie::get('remember_email');
            if($rememberEmail){
                $user = User::where('email',$rememberEmail)->first();
                if($user){
                    session([
                        'login'=>true,
                        'user_id'=>$user->id,
                        'name'=>$user->name,
                    ]);

                    return view('dashboard');
                }
            }
            return redirect('/login')->with('erro','silahkan login terlebih dahulu');
        }
        return view('dashboard');

    }


    public function logout(Request $request){
        $request->session()->flush();
        // Cookie::queue(Cookie::forget('remember_email'));
        return redirect('/login')->with('succes','logout berhasil');
    }

}
