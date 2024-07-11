<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <x-head-element />

    <body class="bg-slate-200 flex h-screen">

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

            <section class="mt-5 mx-10">
                <form action="" method="get" class="grid grid-rows-3 grid-cols-4 grid-flow-row-dense gap-x-5 gap-y-2  bg-slate-50 rounded-md shadow-md w-full px-7 py-6">

                    <div class="w-full col-span-2">
                        <label for="nik" class="text-sm w-24">NIK</label>
                        <br>
                        <input placeholder="" type="text" id="nik" class="border-2 border-slate-800 rounded-sm bg-slate-100 flex-grow h-8 px-2 outline-none mt-2 w-full">
                    </div>

                    <div class="w-full col-span-2">
                        <label for="nama" class="text-sm w-24">Nama Pasien</label>
                        <br>
                        <input placeholder="" type="text" id="nama" class="border-2 border-slate-800 rounded-sm bg-slate-100 flex-grow h-8 px-2 outline-none mt-2 w-full">
                    </div>

                    <div class="w-full col-span-2 gap-5 flex flex-wrap">
                        <div class="w-48">
                            <label for="tmp-lahir" class="text-sm h-min">Tempat Lahir</label>
                            <br>
                            <input placeholder="" type="text" id="tmp-lahir" class="border-2 border-slate-800 rounded-sm bg-slate-100 flex-grow h-8 px-2 outline-none mt-2 w-full">
                        </div>

                        <div class="flex-grow">
                            <label for="tgl-lahir" class="text-sm w-24">Tanggal Lahir</label>
                            <br>
                            <input placeholder="" type="date" id="tgl-lahir" class="border-2 border-slate-800 rounded-sm bg-slate-100 flex-grow h-8 px-2 outline-none mt-2 w-full">
                        </div>
                    </div>

                    <div class="w-full col-span-2">
                        <label for="notel" class="text-sm w-24">No Telfon</label>
                        <br>
                        <input placeholder="" type="number" id="notel" class="border-2 border-slate-800 rounded-sm bg-slate-100 flex-grow h-8 px-2 outline-none mt-2 w-full">
                    </div>

                    <div class="w-full col-span-2">
                        <label for="alamat" class="text-sm w-24">Alamat</label>
                        <br>
                        <input placeholder="" type="text" id="alamat" class="border-2 border-slate-800 rounded-sm bg-slate-100 flex-grow h-8 px-2 outline-none mt-2 w-full">
                    </div>

                    <div class="w-full col-span-2 content-end">
                        <button type="submit" class="px-3 h-8 rounded-md bg-slate-800 text-slate-100">Submit</button>
                    </div>
                </form>

                <div class="w-full h-[54vh] mt-5 overflow-scroll">
                    <table class="w-full table-fixed border-collapse">
                        <thead class="text-slate-800">
                            {{-- <caption class="caption-top text-left text-4xl font-bold uppercase tracking-wider my-3">
                                Pasien Hari Ini
                            </caption> --}}
                            <tr class="h-16 text-xl capitalize text-slate-800 font-bold tracking-wider border-b-4 border-slate-800">
                                <th class="w-16">no</th>
                                <th class="">nama</th>
                                <th class="w-52">tanggal</th>
                                <th class="w-40">pemeriksaan</th>
                                <th class="w-40">pembayaran</th>
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
            </section>
        </main>
    </body>
</html>
