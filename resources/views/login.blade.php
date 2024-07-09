<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>

        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        @vite('resources/css/app.css')
    </head>
    <body class="bg-slate-100 h-screen flex items-center justify-center antialiased">
        <main class="bg-white rounded-xl w-4/12 h-4/6 shadow-md">
            {{-- Sementara aja diubah sik --}}
            {{-- ubah warna gpp sih, bg-[warna]-[intensitas] --}}
            {{-- referensi https://tailwindcss.com/docs/customizing-colors --}}
            <form action="POST" class="flex flex-row flex-wrap px-10 py-10 h-full">

                <legend class="text-3xl self-center font-bold tracking-wide w-full text-center">Login page</legend>

                <div class="flex flex-col self-center gap-7">

                    <div class="flex flex-row w-full h-20 flex-wrap">
                        <label for="username" class="capitalize text-slate-600 font-semibold tracking-wide">username</label>
                        <input type="text" id="username" placeholder="Username" class="bg-slate-100 flex-grow h-11 px-2 outline-none rounded-md mt-2 w-full">
                    </div>

                    <div class="flex flex-row flex-wrap w-full h-20">
                        <label for="password" class="self-baseline flex-grow capitalize text-slate-600 font-semibold tracking-wide">password</label>
                        <a href="" class="self-baseline inline-block flex-grow text-right capitalize text-slate-500 ">forgot password</a>
                        <input type="password" id="password" placeholder="Password" class="bg-slate-100 flex-grow h-11 px-2 outline-none rounded-md mt-2 w-full">
                    </div>

                </div>

                <div class="flex flex-grow flex-col justify-center">
                    <button type="submit" class="py-3 px-7 w-fit self-center bg-slate-800 text-lg font-bold tracking-wide text-slate-200 rounded-md hover:bg-slate-700">Log in</button>
                </div>

            </form>
        </main>
    </body>
</html>
