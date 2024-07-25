{{-- Required argument
    - id
    - name
    - checked
    - listChecked
    - details
--}}

<section id="DataList" class="grid px-4 my-3 grid-cols-1 gap-3">
    @foreach ($datas as $data)
        @php

            $checkList = [
                "Darah lengkap" => random_int(0,1) >= 0.5,
                "Darah rutin" => random_int(0,1) >= 0.5,
                "Gula sewaktu" => random_int(0,1) >= 0.5,
                "Gula puasa" => random_int(0,1) >= 0.5,
            ];

            $detail = [
                'Nomor Rekam Medis' => $data->norm,
                "Alamat" => $data->alamat,
                "Tempat Lahir" => $data->tempat_lahir,
                "Tanggal Lahir" => $data->tgl_lahir
            ];

            $validator = [];
            foreach ($checkList as $list) {
                $validator[count($validator)] = $list;
            }

            $checked = in_array(true, $validator);
        @endphp

        <x-data :id="$data->id" :name="$data->namapasien" :checked="$checked" :lists="$checkList" :details="$detail" />
    @endforeach
</section>

{{-- @vite(['resources/js/data_display/listing.ts']) --}}
