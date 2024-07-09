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
            <table class="table-fixed w-full border-collapse">
                <thead class="text-slate-800">
                    <caption class="caption-top text-left text-4xl font-bold uppercase tracking-wider my-3">
                        Daftar Pasien
                    </caption>
                    <tr class="h-16 text-xl capitalize text-slate-800 font-bold tracking-wider border-b-4 border-slate-800">
                        <th class="w-16">no</th>
                        <th class="">nama</th>
                        <th class="w-72">tanggal</th>
                        <th class="w-36">pemeriksaan</th>
                        <th class="w-36">pembayaran</th>
                        <th class="w-36">edit</th>
                    </tr>
                </thead>
                <tbody class="text-xl">
                    {{-- component breakpoint --}}
                    <tr class="h-14 border-b-2 border-slate-300">
                        <td class="text-center">1</td>
                        <td class="items-baseline">
                            <span class="block ml-10">Lorem ipsum dolor</span>
                        </td>
                        <td class="text-center">22/06/2024</td>
                        <td class="text-center">selesai</td>
                        <td class="text-center">selesai</td>
                        <td class="text-center">Edit</td>
                    </tr>
                    {{-- end --}}
                    <tr class="h-14 border-b-2 border-slate-300">
                        <td class="text-center">2</td>
                        <td class="items-baseline">
                            <span class="block ml-10">Lorem ipsum dolor</span>
                        </td>
                        <td class="text-center">22/06/2024</td>
                        <td class="text-center">selesai</td>
                        <td class="text-center">selesai</td>
                        <td class="text-center">Edit</td>
                    </tr>
                    <tr class="h-14 border-b-2 border-slate-300">
                        <td class="text-center">3</td>
                        <td class="items-baseline">
                            <span class="block ml-10">Lorem ipsum dolor</span>
                        </td>
                        <td class="text-center">22/06/2024</td>
                        <td class="text-center">selesai</td>
                        <td class="text-center">selesai</td>
                        <td class="text-center">Edit</td>
                    </tr>
                </tbody>
              </table>
        </main>

    </body>
</html>
