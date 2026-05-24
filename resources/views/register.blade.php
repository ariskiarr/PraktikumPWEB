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
        <h1 class="text-2xl font-bold text-center mb-5">
           Register
        </h1>
        <form action="{{route('register')}}" method="POST">
            @csrf
            <input
                type="text"
                name="name"
                placeholder="Nama"
                class="w-full border p-2 mb-3 rounded"
            >
            <input
                type="email"
                name="email"
                placeholder="Email"
                class="w-full border p-2 mb-3 rounded"
            >
            <input
                type="password"
                name="password"
                placeholder="Password"
                class="w-full border rounded p-2 mb-3"
            >

            <button type="submit" class="w-full p-2 mb-3 rounded border text-white bg-green-500">Register</button>
        </form>
        <p class=" text-center mt-3">
            <a href="/login" class="text-blue-500">Login</a>
        </p>
    </div>

</body>
</html>
