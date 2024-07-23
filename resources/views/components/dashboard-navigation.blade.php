<nav class="lg:hidden w-full fixed z-20">
    <div class="flex flex-wrap justify-stretch w-full h-20 py-2 px-4 bg-gray-50 shadow-md ">
        <h1 class="hidden flex-grow text-xl font-bold tracking-wide self-center uppercase lg:block">Dashboard</h1>
        <h1 class="flex-grow text-xl font-bold tracking-wide self-center uppercase lg:hidden">{{ $title }}</h1>
        <button id="menu-button" class="p-2">
            <img src="{{ URL::to('/') }}/images/menu.svg" alt="Menu" class="">
        </button>
    </div>

    <section id="mobile-navigation" class="hidden flex-col pb-5 py-2 bg-gray-50 shadow-md w-full">
        {{-- temporary hidden --}}
        <header class="hidden w-full grid-row-1 grid-cols-7 pt-5 mb-3 px-5 border-b-2 border-gray-800">
            <span class="font-light text-lg col-span-4">{{ Carbon\Carbon::Now()->format('d M Y') }}</span>
            <h1 class="font-medium text-lg tracking-wide col-span-3 text-right pr-5">John Doe</h1>
        </header>

        <button
            class="flex gap-3 w-full items-center text-lg text-left px-5 py-1  tracking-wide hover:bg-gray-200 ">
            <img src="{{ URL::to('/') }}/images/home.svg" alt=""><a href="{{ URL::to('/dashboard')}}">Home</a>
        </button>
        <button
            class="flex gap-3 w-full items-center text-lg text-left px-5 py-1  tracking-wide hover:bg-gray-200 ">
            <img src="{{ URL::to('/') }}/images/add-person.svg" alt=""><a href="{{ URL::to('/pendaftaran')}}">Pendaftaran</a>
        </button>
        <button
            class="flex gap-3 w-full items-center text-lg text-left px-5 py-1  tracking-wide hover:bg-gray-200 ">
            <img src="{{ URL::to('/') }}/images/checklist.svg" alt=""><a href="{{ URL::to('/pemeriksaan')}}">Pemeriksaan</a>
        </button>
        <button
            class="flex gap-3 w-full items-center text-lg text-left px-5 py-1  tracking-wide hover:bg-gray-200 ">
            <img src="{{ URL::to('/') }}/images/payment.svg" alt=""><a href="{{ URL::to('/pembayaran')}}">Pembayaran</a>
        </button>
        <button
            class="flex gap-3 w-full items-center text-lg text-left px-5 py-1  tracking-wide hover:bg-gray-200 ">
            <img src="{{ URL::to('/') }}/images/history.svg" alt=""><a href="{{ URL::to('/riwayat')}}">Riwayat</a>
        </button>


        <button
            class="flex gap-3 w-full items-center text-lg text-left px-5 mt-10  tracking-wide hover:bg-gray-200 ">
            <img src="{{ URL::to('/') }}/images/log-out.svg" alt=""><a href="#">Log Out</a>
        </button>
    </section>
</nav>

<nav class="hidden lg:flex flex-col fixed w-64 h-full pt-6 bg-gray-50">
    <div class="flex-grow">
        <h1 class="block w-full pl-8 text-2xl font-bold h-fit tracking-wide uppercase">Dashboard</h1>
        <div class="flex flex-col gap-3 pt-10 ml-8">
            <button class="flex gap-3 items-center text-xl tracking-wider text-gray-800">
                <img src="{{ URL::to('/') }}/images/home.svg" alt=""><a href="{{ URL::to('/dashboard')}}">Home</a>
            </button>
            <button class="flex gap-3 items-center text-xl tracking-wider text-gray-800">
                <img src="{{ URL::to('/') }}/images/add-person.svg" alt=""><a href="{{ URL::to('/pendaftaran')}}">Pendaftaran</a>
            </button>
            <button class="flex gap-3 items-center text-xl tracking-wider text-gray-800">
                <img src="{{ URL::to('/') }}/images/checklist.svg" alt=""><a href="{{ URL::to('/pemeriksaan')}}">Pemeriksaan</a>
            </button>
            <button class="flex gap-3 items-center text-xl tracking-wider text-gray-800">
                <img src="{{ URL::to('/') }}/images/payment.svg" alt=""><a href="{{ URL::to('/pembayaran')}}">Pembayaran</a>
            </button>
            <button class="flex gap-3 items-center text-xl tracking-wider text-gray-800">
                <img src="{{ URL::to('/') }}/images/history.svg" alt=""><a href="{{ URL::to('/riwayat')}}">Riwayat</a>
            </button>
        </div>
    </div>

    <button class="flex gap-3 items-center w-full text-left ml-8 mb-6 py-3">
        <img src="{{ URL::to('/') }}/images/log-out.svg" alt=""> Log Out
    </button>
</nav>

{{-- @vite(['resources/js/navigation/navigation.ts']) --}}
