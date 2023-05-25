<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@300&family=Poppins:ital,wght@1,100&family=Quicksand:wght@300;400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="shortcut icon" href="/media/cover1.png" type="image/x-icon">
    @livewireStyles
</head>

    @vite(['resources/css/app.css' , 'resources/js/app.js'])

<body>
    <x-navbar />

    <x-header header="{{$header}}"/>

    <div class="min-vh-100">
        {{$slot}}
    </div>


    <x-footer />
    
    @livewireScripts
    
</body>
</html>