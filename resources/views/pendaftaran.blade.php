<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <x-head-element />

    <body class="bg-slate-100 flex">

        <x-dashboard-navigation />

        <main class="flex-grow">
            <header class="flex flex-wrap h-16 w-full bg-slate-50 shadow-md">
                <time datetime="" class="px-4 flex-grow block content-center">
                    <span class="font-semibold tracking-wide">7 Juni 2024</span>
                </time>
                <div class="block content-center px-4">
                    <span class="inline-block font-semibold tracking-wide">User</span>
                </div>
            </header>

            <div class="mt-5 mx-10">
                <form action="" method="get" class="h-32 bg-slate-50 rounded-md shadow-md w-full p-4">
                    <div class="flex flex-col gap-4 w-max">
                        <label for="nama" class="text-xl w-24">nama</label>
                        <input placeholder="" type="text" id="nama" class="border-b-4 border-slate-500 bg-slate-50 flex-grow h-8 px-2 outline-none mt-2 w-full">
                    </div>
                </form>

                <table class="table-fixed w-full border-collapse">
                    <thead class="text-slate-800">
                        {{-- <caption class="caption-top text-left text-4xl font-bold uppercase tracking-wider my-3">
                            Pasien Hari Ini
                        </caption> --}}
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
            </div>
        </main>
    </body>
</html>
