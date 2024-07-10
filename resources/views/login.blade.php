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
    <main class="bg-white rounded-xl w-[52vh] h-[62vh] shadow-md">
        {{-- Sementara aja diubah sik --}}
        {{-- ubah warna gpp sih, bg-[warna]-[intensitas] --}}
        {{-- referensi https://tailwindcss.com/docs/customizing-colors --}}

        {{-- validasi jika error saat input --}}
        @if ($errors->any())
            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-light-800 dark:text-red-400"
                role="alert">
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
                {{-- <span class="font-medium">Danger alert!</span> Change a few things up and try submitting again. --}}
            </div>
        @endif
        
        <form action="{{ route('prosesLogin') }}" class="flex flex-row flex-wrap px-10 py-10 h-full" method="post">
            @csrf
            <legend class="text-3xl self-center font-bold tracking-wide w-full text-center">Login page</legend>

            <div class="flex flex-row flex-wrap self-center gap-7">

                <div class="flex flex-row w-full h-20 flex-wrap">
                    <label for="username" class="capitalize text-slate-600 font-semibold tracking-wide">username</label>
                    <input type="text" name="username" id="username" placeholder="Username"
                        class="bg-slate-100 flex-grow h-11 px-2 outline-none rounded-md mt-2 w-full @error('password') border border-red-500 @enderror">
                </div>

                <div class="flex flex-row flex-wrap w-full h-20">
                    <label for="password"
                        class="self-baseline flex-grow capitalize text-slate-600 font-semibold tracking-wide">password</label>
                    <a href=""
                        class="self-baseline inline-block flex-grow text-right capitalize text-slate-500 ">forgot
                        password</a>
                    <input type="password" name="password" id="password" placeholder="Password"
                        class="bg-slate-100 flex-grow h-11 px-2 outline-none rounded-md mt-2 w-full @error('password') border border-red-500 @enderror">
                </div>

            </div>

            <div class="flex flex-grow flex-col justify-center">
                <button type="submit"
                    class="py-3 px-7 w-fit self-center bg-slate-800 text-lg font-bold tracking-wide text-slate-200 rounded-md hover:bg-slate-700">Log
                    in</button>
            </div>

        </form>
    </main>
</body>

</html>
