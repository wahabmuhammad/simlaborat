<x-html-container>

    <x-slot:head>
        <x-meta-elements />

        {{-- Include Js module required by navigation and data lister --}}
        @vite(['resources/js/navigation/navigation.ts', 'resources/js/data_display/listing.ts'])
    </x-slot:head>


    <x-slot:body>
        <x-dashboard-navigation />

        <x-dashboard-header title="Pendaftaran" />

        <x-dashboard-content>

            <div class="px-10 pt-10">
                <h1 class="text-gray-800 text-2xl font-bold tracking-wide capitalize">Pendaftaran Pasien</h1>

                <form action="{{ route('registrasi.pasien') }}"
                    class="grid grid-cols-1 p-3 mt-2 gap-1 bg-gray-100 w-full rounded-md shadow-md lg:px-6 lg:py-5"
                    method="POST">
                    @method('POST')
                    @csrf

                    <div class="flex flex-col">
                        <label for="nama-pasien" class="block min-w-9 font-medium flex-grow capitalize">
                            Nama Pasien
                        </label>
                        <input type="text" name="namaPasien" id="nama-pasien"
                            class="mt-1 block border border-gray-400 rounded-sm px-1 outline-none focus:outline focus:outline-gray-600">
                    </div>

                    <div class="grid grid-cols-2 gap-2">
                        <div class="flex flex-col">
                            <label for="tempat-lahir" class="block min-w-9 font-medium flex-grow capitalize">
                                Tempat Lahir
                            </label>
                            <input type="text" name="tempatLahir" id="tempat-lahir"
                                class="mt-1 block border border-gray-400 rounded-sm px-1 outline-none focus:outline focus:outline-gray-600">
                        </div>
                        <div class="flex flex-col">
                            <label for="tanggal-lahir" class="block min-w-9 font-medium flex-grow capitalize">
                                tanggal lahir
                            </label>
                            <input type="date" name="tanggalLahir" id="tanggal-lahir"
                                class="mt-1 block border border-gray-400 rounded-sm px-1 outline-none focus:outline focus:outline-gray-600">
                        </div>
                    </div>

                    <div class="flex flex-col">
                        <label for="alamat" class="block min-w-9 font-medium flex-grow capitalize"> Alamat </label>
                        <input type="text" name="alamat" id="alamat"
                            class=" mt-1 block border border-gray-400 rounded-sm px-1 outline-none focus:outline focus:outline-gray-600">
                    </div>

                    <div class="pt-4">
                        <div class="bg-gray-800 w-fit rounded-md text-gray-100 font-semibold tracking-wide">
                            <button type="submit" class="h-fit w-fit py-1 px-2"> Submit </button>
                        </div>
                    </div>
                </form>
            </div>

            <x-data-table title="Daftar Pasien">
                {{-- @dd($datas) --}}
                {{-- <x-data-lister tabtype="0" :datas="$datas"/> --}}
                <x-data-lister :datas="$datas"/>
            </x-data-table>


        </x-dashboard-content>

    </x-slot:body>
</x-html-container>
