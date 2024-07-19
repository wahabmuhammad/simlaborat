<header class="hidden lg:grid lg:grid-rows-1 lg:grid-cols-6 lg:pl-64 lg:h-24 lg:bg-gray-50">
    <div class="flex flex-col gap-1 items-start justify-center pl-4 col-span-5">
        <h1 class="text-xl font-semibold tracking-wide">{{ $title }}</h1>
        <span class="text-md font-light">{{ Carbon\Carbon::Now()->format('d M Y') }}</span>
    </div>
    <div class="flex items-center justify-center col-span-1">
        <a class="text-xl font-medium tracking-wide">John Doe</a>
    </div>
</header>
