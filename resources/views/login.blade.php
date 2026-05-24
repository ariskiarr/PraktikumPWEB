<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100  flex justify-center  item-center items-center rounded-2xl min-h-screen">
    <div class="bg-white rounded shadow w-80 p-5 ">
        <h1 class="font-bold text-center text-2xl mb-5">
            Login
        </h1>
        @if (session('error'))
            <p class="text-red-400">{{session('error')}}</p>
        @endif
        <form action="" method="POST">
            @csrf
            <input
            type="text"
            name="email"
            placeholder="email"
            value="{{Cookie::get('remember_email')?? ''}}"
            class="w-full rounded border p-2 mb-3"
            >
              <input
                type="password"
                name="password"
                placeholder="Password"
                class="w-full rounded border p-2 mb-3"
            >
            <div class="flex items-center mb-3">
                <input type="checkbox" name="remember" id="remember" class="mr-2">
                <label for="remember" class="text-sm">Remember me</label>
            </div>
            <button type="submit" class="w-full border text-white bg-green-500 p-2 mb-3">Login</button>
        </form>
        </form>
    </div>
</body>
</html>
