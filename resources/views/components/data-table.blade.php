
<div class="md:p-5">

    <section class="p-5">
        <h1 class="text-gray-800 text-2xl font-bold tracking-wide capitalize">{{$title}}</h1>

        <div class="flex flex-wrap mt-2 gap-4">
            <div class="py-1 px-2 bg-gray-100 rounded-md shadow-md">
                <label for="tanggal" class="font-semibold text-gray-800">Tanggal</label>
                <input type="date" class="bg-gray-100 font-ligh w-fit"
                    value="{{ Carbon\Carbon::Now()->format('Y-m-d') }}">
            </div>

            <div class="flex flex-wrap gap-0 w-fit content-center shadow-md">
                <button
                    class="bg-gray-100 text-sm p-2 font-semibold text-gray-700 rounded-l-md hover:bg-gray-200 hover:text-gray-900">Belum</button>
                <button
                    class="bg-gray-100 text-sm p-2 font-semibold text-gray-700 rounded-r-md hover:bg-gray-200 hover:text-gray-900">Sudah</button>
            </div>
        </div>
    </section>

    {{ $slot }}

</div>
