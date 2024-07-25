<header class="hidden lg:grid grid-rows-1 grid-cols-6 pr-5 -z-0 w-full pl-64 fixed h-24 bg-gray-50 xl:pr-0">
    <div class="flex flex-col gap-1 items-start justify-center pl-4 col-span-5">
        <h1 class="text-xl font-semibold tracking-wide">{{ $title }}</h1>
        <span class="text-md font-light">{{ Carbon\Carbon::Now()->format('d M Y') }}</span>
    </div>
    <div class="flex items-center justify-end pr-5 col-span-1">
    </div>
</header>
