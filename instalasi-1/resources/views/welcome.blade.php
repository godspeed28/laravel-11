<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
</head>

<body>
    <h1 class="font-bold text-2xl p-3 m-3 font-serif">Home Page</h1>
    <p class="font-bold text-xl p-3 m-3 font-serif">Owner: {{ $nama }}</p>
    <img src="img/laravel.svg" alt="Laravel" width="100" class="p-3 m-3">
    <a href="/about" class="p-3 m-3 text-blue-500 underline">About</a>

    <script src="js/script.js"></script>
</body>

</html>
