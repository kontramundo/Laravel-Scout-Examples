<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel SCOUT</title>
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles

    </head>
    <body class="bg-gray-100 h-screen"> 
        <div class="container mx-auto mt-10">
            <h1 class="font-black text-5xl text-center md:w-2/3 mx-auto">
                Laravel <span class="text-cyan-600">Scout</span>
            </h1>

            <livewire:users/>
            
        </div>

        @livewireScripts
    </body>
</html>
