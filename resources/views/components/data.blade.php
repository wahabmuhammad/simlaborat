<section class="data p-4 bg-gray-100 rounded-md shadow-sm">
    <div class="flex flex-wrap text-lg gap-3 items-center font-semibold">
        <span class="px-1">{{ $id }}</span>
        <span class="flex-grow">{{ $name }}</span>
        @if ($checked)
            <span class="px-2 rounded-md bg-green-300">Sudah</span>
        @else
            <span class="px-2 rounded-md bg-red-300">Belum</span>
        @endif
        <button class="p-1 rounded-md expandDetails hover:bg-gray-200">
            <img src="{{ URL::to('/') }}/images/dot.svg" alt="">
        </button>
    </div>

    <div class="hidden details mt-3 p-4 md:p-4 bg-gray-200 rounded-md font-light">

        <ul class="grid grid-cols-1 md:grid-cols-2 text-gray-800">
            <li class="col-span-1 order-1">
                <div class="flex gap-2">
                    <span class=" w-28">Jenis Kelamin</span>
                    <span class="text-gray-900 font-normal capitalize tracking-wide">{{ $gender }}</span>
                </div>
                <hr class="border-gray-400" />
            </li>
            <li class="col-span-1 order-3 md:order-2">
                <div class="flex gap-2">
                    <span class=" w-28">Nomor Telfon</span>
                    <span class="text-gray-900 font-normal capitalize tracking-wide">{{ $phone }}</span>
                </div>
                <hr class="border-gray-400" />
            </li>
            <li class="col-span-1 order-2 md:order-3">
                <div class="flex gap-2">
                    <span class=" w-28">Tanggal Masuk</span>
                    <span class="text-gray-900 font-normal capitalize tracking-wide">{{ $inDate }}</span>
                </div>
                <hr class="border-gray-400" />
            </li>
            <li class="col-span-1 order-4">
                <div class="flex gap-2">
                    <span class=" w-28">Tanggal Keluar</span>
                    <span class="text-gray-900 font-normal capitalize tracking-wide">{{ $outDate }}</span>
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
                        <span class="font-normal capitalize">{{ $checked }}</span>
                    </div>
                    <hr class="border-gray-400" />
                </li>
                <li class="col-span-1 list-decimal">
                    <div class="flex gap-2">
                        <span class=" w-28">Darah rutin</span>
                        <span class="font-normal capitalize">{{ $checked }}</span>
                    </div>
                    <hr class="border-gray-400" />
                </li>
                <li class="col-span-1 list-decimal">
                    <div class="flex gap-2">
                        <span class=" w-28">Gula sewaktu</span>
                        <span class="font-normal capitalize">{{ $checked }}</span>
                    </div>
                    <hr class="border-gray-400" />
                </li>
                <li class="col-span-1 list-decimal">
                    <div class="flex gap-2">
                        <span class=" w-28">Gula puasa</span>
                        <span class="font-normal capitalize">{{ $checked }}</span>
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
