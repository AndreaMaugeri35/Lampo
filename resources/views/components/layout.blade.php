<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="shortcut icon" href="/media/cover1.png" type="image/x-icon">
    @livewireStyles
</head>

    @vite(['resources/css/app.css' , 'resources/js/app.js'])
<body>
    <x-navbar />
    <div class="min-vh-100">
        {{$slot}}
    </div>
    @livewireScripts
</body>
</html>