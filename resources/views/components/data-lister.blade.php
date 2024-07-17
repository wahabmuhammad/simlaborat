{{-- data structure
    [
        "id" => int,
        "name" => string,
        "gender" => string,
        "phone" => string,
        "inDate" => string,
        "outDate" => string,
        "checked" => bool,
    ]
--}}

<section id="data-list" class="grid px-4 my-3 grid-cols-1 gap-3">
    @foreach ($datas as $data)
        <x-data :id="$data['id']" :name=" $data['name']" :gender=" $data['gender']"
            :phone="$data['phone']" :inDate="$data['inDate']" :outDate="$data['outDate']"
            :checked="$data['checked']" />
    @endforeach
</section>

{{-- @vite(['resources/js/data_display/listing.ts']) --}}
