<nav class="flex flex-col h-full flex-wrap gap-10 bg-slate-800 flex-shrink w-62 text-slate-100 p-5">
    <a href="{{route('dashboard.index')}}">
        <h1 class="block flex-shrink font-bold tracking-wider text-4xl">Dashboard</h1>
    </a>
    <ul class="flex-grow text-slate-300 text-md capitalize font-semibold tracking-wide">
        <li><span class="w-4 inline-block mr-4 mt-2">&#9998;</span><a href="{{route('pendaftaran.index')}}">Pendaftaran</a></li>
        <li><span class="w-4 inline-block mr-4 mt-2">&#9783;</span><a href="#">Pemeriksaan</a></li>
        <li><span class="w-4 inline-block mr-4 mt-2">&#9993;</span><a href="#">Riwayat</a></li>
        <li><span class="w-4 inline-block mr-4 mt-2">&#9993;</span><a href="#">Laporan</a></li>
    </ul>
    <form action="{{route('logout')}}" method="POST">
        @csrf
        <button type="submit" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Log Out</button>
        {{-- <a href="{{route('logout')}}" class="capitalize">log out</a> --}}
    </form>
</nav>
{{--  The whole future lies in uncertainty: live immediately. - Seneca  --}}
