<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<body>
    <div class="px-10">
        <nav class="flex items-center justify-between p-4 bg-gray-800 text-white">
            <div class="logo">
                <a href="">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                </a>
            </div>
            <div>
                <a href="#">Jobs</a>
                <a href="#">Carreers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>
            <div>create job</div>
        </nav>
        <main>{{ $slot }}</main>
    </div>
</body>

</html>
