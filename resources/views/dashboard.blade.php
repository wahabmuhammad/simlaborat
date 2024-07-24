<x-html-container>

    <x-slot:head>
        <x-meta-elements />

        @vite(['resources/js/navigation/navigation.ts', 'resources/js/data_display/listing.ts'])
    </x-slot:head>

    <x-slot:body>
        <x-dashboard-header />

        <x-dashboard-navigation />

        <x-dashboard-content className="pt-20 h-fit w-screen lg:pt-24 lg:pl-64" >

            <div class="p-5">
                <div class="grid grid-cols-1 shadow-md">
                    <section class="bg-gray-100 rounded-md overflow-hidden">
                        <h1 class="bg-gray-50 block text-center p-3 shadow-sm capitalize">Hari ini</h1>
                        <ul class="w-full p-5 grid lg:grid-cols-2 lg:gap-5">
                            <li class="grid grid-cols-7 px-1 py-1 tracking-wide border-b border-gray-800">
                                <span class="col-span-3">Terdaftar</span>
                                <span class="font-medium col-span-4 text-right">{{$pasienTerdaftar}} Orang</span>
                            </li>
                            <li class="grid grid-cols-7 px-1 py-1 tracking-wide border-b border-gray-800">
                                <span class="col-span-3">Diperiksa</span>
                                <span class="font-medium col-span-4 text-right">2 Orang</span>
                            </li>
                            <li class="grid grid-cols-7 px-1 py-1 tracking-wide border-b border-gray-800">
                                <span class="col-span-3">Lunas</span>
                                <span class="font-medium col-span-4 text-right">5 Orang</span>
                            </li>
                        </ul>
                    </section>
                </div>
            </div>

            <x-data-table title="Daftar Pasien">
                <x-data-lister  :datas="$datas"/>
            </x-data-table>
        </x-dashboard-content>
    </x-slot:body>

</x-html-container>


