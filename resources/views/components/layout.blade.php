<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<body class="bg-gray-900 text-white">
    <div class="px-10">
        <nav class="flex items-center justify-between py-4 bg-gray-800 text-white border-b border-white/10">
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
        <main class="mt-10 max-w-[986px] mx-auto">{{ $slot }}</main>
    </div>
</body>

</html>
