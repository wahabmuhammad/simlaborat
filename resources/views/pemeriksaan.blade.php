<x-html-container>

    <x-slot:head>
        <x-meta-elements />

        {{-- Include Js module required by navigation and data lister --}}
        @vite(['resources/js/navigation/navigation.ts', 'resources/js/data_display/listing.ts'])
    </x-slot:head>

    <x-slot:body>
        <x-dashboard-navigation />

        <x-dashboard-header title="Pemeriksaan"/>

        <x-dashboard-content>

                <x-data-table>
                    <x-data-lister :datas="$datas"/>
                </x-data-table>

        </x-dashboard-content>


    </x-slot:body>

</x-html-container>
