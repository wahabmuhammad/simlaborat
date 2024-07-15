<!DOCTYPE html>
<html lang="en">

<head>
    <x-meta-elements />
    @vite(['resources/js/navigation/navigation.ts'])
</head>

<body class="bg-gray-300">

    <nav class="lg:hidden w-full fixed z-10">
        <div class="flex flex-wrap justify-stretch w-full h-20 py-2 px-4 bg-gray-50 shadow-md ">
            <h1 class="flex-grow text-xl font-bold tracking-wide self-center">Dashboard</h1>
            <button id="menu-button" class="p-2">
                <img src="{{ URL::to('/') }}/images/menu.svg" alt="Menu" class="">
            </button>
        </div>

        <section id="mobile-navigation" class="hidden flex-col py-5 bg-gray-50 shadow-md w-full">
            <button
                class="flex gap-3 items-center text-lg text-left px-5 py-1 font-semibold tracking-wide hover:bg-gray-200 ">
                <img src="{{ URL::to('/') }}/images/add-person.svg" alt=""><a href="#">Pemeriksaan</a>
            </button>
            <button
                class="flex gap-3 items-center text-lg text-left px-5 py-1 font-semibold tracking-wide hover:bg-gray-200 ">
                <img src="{{ URL::to('/') }}/images/checklist.svg" alt=""><a href="#">Pendaftaran</a>
            </button>
            <button
                class="flex gap-3 items-center text-lg text-left px-5 py-1 font-semibold tracking-wide hover:bg-gray-200 ">
                <img src="{{ URL::to('/') }}/images/payment.svg" alt=""><a href="#">Pembayaran</a>
            </button>
            <button
                class="flex gap-3 items-center text-lg text-left px-5 py-1 font-semibold tracking-wide hover:bg-gray-200 ">
                <img src="{{ URL::to('/') }}/images/history.svg" alt=""><a href="#">Riwayat</a>
            </button>

            <button
                class="flex gap-3 items-center text-lg text-left px-5 mt-10 font-semibold tracking-wide hover:bg-gray-200">
                <img src="{{ URL::to('/') }}/images/log-out.svg" alt=""><a href="#">Log Out</a>
            </button>
        </section>
    </nav>

    <nav class="hidden lg:flex flex-col fixed w-64 h-full pt-6 bg-gray-50">
        <div class="flex-grow">
            <h1 class="block w-full pl-8 text-2xl font-bold h-fit tracking-wide uppercase">Dashboard</h1>
            <div class="flex flex-col gap-3 mt-10 ml-8">
                <button class="flex gap-3 items-center text-xl tracking-wider text-gray-800">
                    <img src="{{ URL::to('/') }}/images/add-person.svg" alt=""> Pendaftaran
                </button>
                <button class="flex gap-3 items-center text-xl tracking-wider text-gray-800">
                    <img src="{{ URL::to('/') }}/images/checklist.svg" alt=""> Pemeriksaan
                </button>
                <button class="flex gap-3 items-center text-xl tracking-wider text-gray-800">
                    <img src="{{ URL::to('/') }}/images/payment.svg" alt=""> Pembayaran
                </button>
                <button class="flex gap-3 items-center text-xl tracking-wider text-gray-800">
                    <img src="{{ URL::to('/') }}/images/history.svg" alt=""> Riwayat
                </button>
            </div>
        </div>
        <button class="flex gap-3 items-center w-full text-left ml-8 mb-6 py-3">
            <img src="{{ URL::to('/') }}/images/log-out.svg" alt=""> Log Out
        </button>
    </nav>

    <main class="pt-20 h-[1280px] w-screen lg:pt-0 lg:pl-64">
        <div>
            <section class="p-4">
                <h1 class="text-gray-800 text-2xl font-bold tracking-wide capitalize">Daftar Pasien</h1>

                <div class="flex flex-wrap mt-2 gap-4">
                    <div class="py-1 px-2 bg-gray-100 rounded-md drop-shadow-md">
                        <label for="tanggal" class="font-semibold text-gray-800">Tanggal</label>
                        <input type="date" class="bg-gray-100 font-ligh w-fit"
                            value="{{ Carbon\Carbon::Now()->format('Y-m-d') }}">
                    </div>

                    <div class="flex flex-wrap gap-0 w-fit content-center drop-shadow-md ">
                        <button
                            class="bg-gray-100 text-sm p-2 font-semibold text-gray-700 rounded-l-md hover:bg-gray-200 hover:text-gray-900">Belum</button>
                        <button
                            class="bg-gray-100 text-sm p-2 font-semibold text-gray-700 rounded-r-md hover:bg-gray-200 hover:text-gray-900">Sudah</button>
                    </div>
                </div>
            </section>
        </div>

        <section id="data-list" class="grid px-4 mt-2 grid-cols-1 gap-3">
            {{-- Pending Component --}}
            <section class="data p-4 bg-gray-100 rounded-md shadow-sm">
                <div class="flex flex-wrap text-lg gap-3 items-center font-semibold">
                    <span class="px-1">1</span>
                    <span class="flex-grow">John Doe</span>
                    <span class="px-2 rounded-md bg-green-300">True</span>
                    <button class="p-1 rounded-md expandDetails hover:bg-gray-200">
                        <img src="{{ URL::to('/') }}/images/dot.svg" alt="">
                    </button>
                </div>

                <div class="hidden details mt-3 p-4 md:p-4 bg-gray-200 rounded-md font-light">

                    <ul class="grid grid-cols-1 md:grid-cols-2 text-gray-800">
                        <li class="col-span-1 order-1">
                            <div class="flex gap-2">
                                <span class=" w-28">Jenis Kelamin</span>
                                <span class="text-gray-900 font-normal capitalize tracking-wide">Male</span>
                            </div>
                            <hr class="border-gray-400" />
                        </li>
                        <li class="col-span-1 order-3 md:order-2">
                            <div class="flex gap-2">
                                <span class=" w-28">Nomor Telfon</span>
                                <span class="text-gray-900 font-normal capitalize tracking-wide">(791) 2438547</span>
                            </div>
                            <hr class="border-gray-400" />
                        </li>
                        <li class="col-span-1 order-2 md:order-3">
                            <div class="flex gap-2">
                                <span class=" w-28">Tanggal Masuk</span>
                                <span class="text-gray-900 font-normal capitalize tracking-wide">09/07/2024</span>
                            </div>
                            <hr class="border-gray-400" />
                        </li>
                        <li class="col-span-1 order-4">
                            <div class="flex gap-2">
                                <span class=" w-28">Tanggal Keluar</span>
                                <span class="text-gray-900 font-normal capitalize tracking-wide">09/08/2024</span>
                            </div>
                            <hr class="border-gray-400" />
                        </li>
                    </ul>

                    <div class="mt-3">

                        <h4>Daftar Pemeriksaan Dilakukan :</h4>

                        <ul class="grid grid-cols-1 pl-5 mt-2">
                            <li class="col-span-1 decoration list-decimal">
                                <div class="flex gap-2">
                                    <span class=" w-28">Darah lengkap</span>
                                    <span class="font-normal capitalize">True</span>
                                </div>
                                <hr class="border-gray-400" />
                            </li>
                            <li class="col-span-1 list-decimal">
                                <div class="flex gap-2">
                                    <span class=" w-28">Darah rutin</span>
                                    <span class="font-normal capitalize">False</span>
                                </div>
                                <hr class="border-gray-400" />
                            </li>
                            <li class="col-span-1 list-decimal">
                                <div class="flex gap-2">
                                    <span class=" w-28">Gula sewaktu</span>
                                    <span class="font-normal capitalize">False</span>
                                </div>
                                <hr class="border-gray-400" />
                            </li>
                            <li class="col-span-1 list-decimal">
                                <div class="flex gap-2">
                                    <span class=" w-28">Gula puasa</span>
                                    <span class="font-normal capitalize">true</span>
                                </div>
                                <hr class="border-gray-400" />
                            </li>
                        </ul>

                    </div>
                    <div class="flex flex-wrap mt-4 w-full place-content-end">
                        <button  class="bg-gray-800 text-gray-300 py-2 px-4 rounded-md font-semibold tracking-wide">Edit</button>
                    </div>
                </div>
            </section>
            {{-- Component end --}}
        </section>
    </main>
</body>

</html>
