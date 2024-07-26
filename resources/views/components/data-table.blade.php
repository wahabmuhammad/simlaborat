
<div id="DataTable" class="md:p-5">

    <section class="p-5">
        <h1 class="text-gray-800 text-2xl font-bold tracking-wide capitalize">{{$title}}</h1>

        <div class="flex flex-col gap-5 h-fit mt-2">
            <div class="flex flex-wrap grid-cols-5 h-fit w-full gap-3">
                <div class="col-span-3 py-2 px-3 bg-gray-100 rounded-md shadow-md">
                    <label for="tanggal" class="font-semibold text-gray-800"> Tanggal </label>
                    <input type="date" class="bg-gray-100 font-light rounded-sm w-fit outline-none focus:outline focus:outline-2 focus:outline-offset-1 focus:outline-gray-600"
                        value="{{ Carbon\Carbon::Now()->format('Y-m-d') }}">
                </div>

                <div id="CheckedFilter" class="col-span-2 flex flex-wrap gap-0 w-fit h-full content-center rounded-md drop-shadow-md">
                    <data value="2"
                        class="bg-gray-100 text-sm py-4 px-3 font-semibold text-gray-900 rounded-l-md hover:bg-gray-200 hover:text-gray-900"> Semua </data>
                    <data value="0"
                        class="bg-gray-100 text-sm py-4 px-3 font-semibold text-gray-500 hover:bg-gray-200 hover:text-gray-900"> Belum </data>
                    <data value="1"
                        class="bg-gray-100 text-sm py-4 px-3 font-semibold text-gray-500 rounded-r-md hover:bg-gray-200 hover:text-gray-900"> Sudah </data>
                </div>

                <div id="DataPerPage" class="flex flex-wrap items-center py-2 px-3 bg-gray-100 rounded-md shadow-md gap-4 justify-items-end">
                    <label for="data-showed" class="font-semibold text-gray-800"> Jumlah Data </label>
                    <input value="30" type="text" name="" id="data-showed" class="inline-block border w-16 px-2 py-1 border-gray-400 rounded-md outline-none focus:outline focus:outline-2 focus:outline-offset-1 focus:outline-gray-600">
                </div>
            </div>

            <div id="NameFilter" class="flex flex-col gap-2 bg-gray-100 w-full p-3 rounded-md shadow-md md:p-4 md:mt-0 ">
                <label for="searchName" class="block min-w-9 font-semibold flex-grow  capitalize"> Cari Pasien </label>
                <input type="search" name="searchName" id="searchName" class="block border border-gray-400 py-1 px-2 rounded-md outline-none focus:outline focus:outline-2 focus:outline-offset-1 focus:outline-gray-600">
            </div>
        </div>
    </section>

    <div id="TopPageIndicator" class="grid grid-cols-2 px-5">

        <div class="flex flex-wrap gap-0 drop-shadow-md ">
            <button id="Decrease" class="rounded-l-md bg-gray-50 font-bold text-center align-middle focus:outline-none hover:bg-gray-100">
                <img src="{{ URL::to('/') }}/images/left-arrow-light.svg" alt="<" class="px-2 py-1">
            </button>
            <input id="CurrentPage" value="1" type="text" class="px-2 py-1 w-10 text-center bg-gray-50 focus:outline-none">
            <button id="Increase" class="rounded-r-md bg-gray-50 font-bold text-center align-middle focus:outline-none hover:bg-gray-100">
                <img src="{{ URL::to('/') }}/images/right-arrow-light.svg" alt=">" class="px-2 py-1">
            </button>
        </div>

        <div class="flex flex-wrap justify-end">
            <div class="flex flex-wrap overflow-hidden bg-gray-100 rounded-md drop-shadow-md">
                <span class="px-2 py-1">Total Page</span>
                <span id='TotalPage' class="bg-gray-50 px-2 py-1">0</span>
            </div>
        </div>
    </div>

    {{ $slot }}

</div>
