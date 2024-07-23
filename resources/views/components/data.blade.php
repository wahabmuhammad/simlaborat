<section class="data p-4 bg-gray-100 rounded-md shadow-md">
    <div class="flex flex-wrap text-lg items-center font-semibold max-w-full">
        <span class="px-2">{{ $id }}</span>
        <span class="flex-grow justify-self-start max-w-36 line-clamp-1 md:max-w-none md:line-clamp-none">{{ $name }}</span>
        <div class="flex flex-wrap content-center flex-grow justify-end md:flex-grow-0 gap-1">
            @if ($checked)
                <div class="flex px-2 min-w-14 text-sm rounded-md bg-green-300 justify-center items-center">
                    <span class="inline-block text-center align-middle">Sudah</span>
                </div>
            @else
                <div class="flex px-2 min-w-14 text-sm rounded-md bg-red-300 justify-center items-center">
                    <span class="inline-block text-center align-middle">Belum</span>
                </div>
            @endif
            <button class="expandDetails p-1 rounded-md hover:bg-gray-200">
                <img src="{{ URL::to('/') }}/images/dot.svg" alt="">
            </button>
        </div>
    </div>

    <div class="hidden details mt-3 p-4 md:p-4 bg-gray-200 rounded-md font-light">

        <ul class="grid grid-cols-1 gap-1 md:grid-cols-2 text-gray-800">
            <li class="col-span-1 order-1 border-b border-gray-400 md:hidden">
                <div class="flex gap-2">
                    <span class="min-w-28">Nama Lengkap</span>
                    <span class="text-gray-900 font-normal capitalize tracking-wide">{{ $name }}</span>
                </div>
            </li>

            @foreach ( $details as $key => $data )

                <li class="col-span-1 order-1 border-b border-gray-400">
                    <div class="flex gap-2">
                        <span class=" w-28">{{ $key }}</span>
                        <span class="text-gray-900 font-normal capitalize tracking-wide">{{ $data }}</span>
                    </div>
                </li>
            @endforeach

        </ul>

        <div class="mt-3">

            <h4>Daftar Pemeriksaan Dilakukan :</h4>

            <ul class="grid grid-cols-1 pl-5 mt-2">
                @foreach ($lists as $key => $value )
                <li class="col-span-1 list-decimal border-b border-gray-300">
                    <div class="flex gap-2">
                        <span class=" w-28">{{ $key }}</span>
                        <span class="font-normal capitalize">{{ $value ? "Ya" : "Tidak" }}</span>
                    </div>
                </li>
                @endforeach
            </ul>

        </div>
        <div class="flex flex-wrap mt-10 w-full place-content-end gap-3">
            @if ($checked)
                <button class="bg-gray-300 text-gray-800 p-1 rounded-md font-medium tracking-wide">
                    <img src="{{ URL::to('/') }}/images/print.svg" alt="Cetak">
                </button>
            @endif
            @if ($checked)
                <button class="bg-gray-800 text-gray-300 py-1 px-3 rounded-md font-medium tracking-wide">Edit</button>
            @else
                <button class="bg-gray-800 text-gray-300 py-1 px-3 rounded-md font-medium tracking-wide">Periksa</button>
            @endif
        </div>


    </div>
</section>

