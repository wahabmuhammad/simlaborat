<x-html-container>

    <x-slot:head>
        <x-meta-elements />

        {{-- Include Js module required by navigation and data lister --}}
        @vite(['resources/js/navigation/navigation.ts', 'resources/js/data_display/listing.ts'])
    </x-slot:head>


    <x-slot:body>
        <x-dashboard-navigation />

        <x-dashboard-header />

        <x-dashboard-content className="pt-20 h-fit w-screen lg:pt-0 lg:pl-64 lg:py-2">
            <div class="p-4">
                <h1 class="text-gray-800 text-2xl font-bold tracking-wide capitalize">Pendaftaran Pasien</h1>

                <form action="POST" class="grid grid-cols-1 p-3 mt-2 gap-1 bg-gray-100 w-full rounded-md shadow-sm lg:px-6 lg:py-5">
                    <div class="flex flex-col">
                        <label for="nama-pasien" class="block min-w-9 font-medium flex-grow capitalize">Nama Pasien</label>
                        <input type="text" name="" id="nama-pasien" class="mt-1 block border border-gray-400 rounded-sm px-1 outline-none focus:outline-2 focus:outline-gray-500">
                    </div>
                    <div class="grid grid-cols-2 gap-2">
                        <div class="flex flex-col">
                            <label for="nama-pasien" class="block min-w-9 font-medium flex-grow capitalize">Tempat Lahir</label>
                            <input type="text" name="" id="nama-pasien" class="mt-1 block border border-gray-400 rounded-sm px-1 outline-none focus:outline-2 focus:outline-gray-500">
                        </div>
                        <div class="flex flex-col">
                            <label for="nama-pasien" class="block min-w-9 font-medium flex-grow capitalize">tanggal lahir</label>
                            <input type="date" name="" id="nama-pasien" class="mt-1 block border border-gray-400 rounded-sm px-1 outline-none focus:outline-2 focus:outline-gray-500">
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <label for="nama-pasien" class="block min-w-9 font-medium flex-grow capitalize">Alamat</label>
                        <input type="text" name="" id="nama-pasien" class="mt-1 block border border-gray-400 rounded-sm px-1 outline-none focus:outline-2 focus:outline-gray-500">
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="bg-gray-800 text-gray-300 py-1 px-3 rounded-md font-medium tracking-wide">Submit</button>
                    </div>
                </form>
            </div>

            <x-data-table title="Daftar Pasien">
                <x-data-lister />
            </x-data-table>


        </x-dashboard-content>

    </x-slot:body>
</x-html-container>
