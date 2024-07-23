<header class="hidden lg:grid grid-rows-1 grid-cols-6 lg:pr-5 xl:pr-0 z-10 w-10/12 fixed left-64 h-24 bg-gray-50">
    <div class="flex flex-col gap-1 items-start justify-center pl-4 col-span-5">
        <h1 class="text-xl font-semibold tracking-wide">{{ $title }}</h1>
        <span class="text-md font-light">{{ Carbon\Carbon::Now()->format('d M Y') }}</span>
    </div>
    <div class="flex items-center justify-center col-span-1">
        <a class="text-l font-medium tracking-wide">{{Auth::user()->pegawai->namapegawai}}</a>
    </div>
</header>
