<x-html-container>

    <x-slot:head>
        <x-meta-elements />

        {{-- Include Js module required by navigation and data lister --}}
        @vite(['resources/js/navigation/navigation.ts'])
    </x-slot:head>

    <x-slot:body>
        <x-dashboard-navigation />

        <x-dashboard-header title="Pemeriksaan"/>

        <x-dashboard-content>

            <div class="p-6 lg:p-10">
                <form class="bg-gray-50 w-full">

                </form>
            </div>

        </x-dashboard-content>


    </x-slot:body>

</x-html-container>
