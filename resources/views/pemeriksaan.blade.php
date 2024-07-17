<x-html-container bodyStyle="bg-gray-300">

    <x-slot:head>
        <x-meta-elements />

        {{-- Include Js module required by navigation and data lister --}}
        @vite(['resources/js/navigation/navigation.ts', 'resources/js/data_display/listing.ts'])
    </x-slot:head>

    <x-slot:body>
        <x-dashboard-navigation />


        <x-data-table>
            <x-data-lister />
        </x-data-table>
    </x-slot:body>

</x-html-container>
