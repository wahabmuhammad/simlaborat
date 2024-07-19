<x-html-container className="bg-gray-300">

    <x-slot:head>
        <x-meta-elements />

        {{-- Include Js module required by navigation and data lister --}}
        @vite(['resources/js/navigation/navigation.ts', 'resources/js/data_display/listing.ts'])
    </x-slot:head>

    <x-slot:body>
        <x-dashboard-navigation />

        <x-dashboard-header />

        <x-dashboard-content className="pt-20 h-fit w-screen lg:pt-0 lg:pl-64">
            <x-data-table>
                <x-data-lister />
            </x-data-table>
        </x-dashboard-content>


    </x-slot:body>

</x-html-container>
