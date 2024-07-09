<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>

        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        @vite('resources/css/app.css')
    </head>
    <body class="bg-slate-100 flex">
        <nav class="flex flex-col h-screen flex-wrap gap-10 bg-slate-800 flex-shrink w-62 text-slate-100 p-5">
            <h1 class="block flex-shrink font-bold tracking-wider text-4xl">Dashboard</h1>
            <ul class="flex-grow text-slate-300 text-md capitalize font-semibold tracking-wide">
                <li><span class="w-4 inline-block mr-4 mt-2">&#9998;</span><a href="#">Pendaftaran</a></li>
                <li><span class="w-4 inline-block mr-4 mt-2">&#9783;</span><a href="#">Pemeriksaan</a></li>
                <li><span class="w-4 inline-block mr-4 mt-2">&#9993;</span><a href="#">Riwayat</a></li>
            </ul>
            <a href="#" class="capitalize text-lg font-semibold">log out</a>
        </nav>
        <main class="flex-grow mx-8 mt-8">
            
        </main>

    </body>
</html>
