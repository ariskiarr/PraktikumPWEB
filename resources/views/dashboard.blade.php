<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">

    <div class="bg-white p-6 rounded shadow w-80 text-center">

        <h1 class="text-2xl font-bold mb-4">
            Dashboard
        </h1>
        <p class="mb-5">
            Halo
        </p>

        <a
            href="/logout"
            class="bg-red-500 text-green-500 px-4 py-2 rounded"
        >
            Logout
        </a>

    </div>

</body>
</html>
