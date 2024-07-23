{{-- Required argument
    - id
    - name
    - checked
    - listChecked
    - details
--}}

<section id="data-list" class="grid px-4 my-3 grid-cols-1 gap-3">
    {{-- {{dd($datas)}} --}}
    {{-- @foreach ($datas as $data )
        @dd($data)
    @endforeach --}}
    @foreach ($datas as $data)
    {{-- @dd($data) --}}
        @php
            // temporary display solution
            // when the check list data is available $checkList = $data["checkList"]
            $checkList = [
                "Darah lengkap" => random_int(0,1) >= 0.5,
                "Darah rutin" => random_int(0,1) >= 0.5,
                "Gula sewaktu" => random_int(0,1) >= 0.5,
                "Gula puasa" => random_int(0,1) >= 0.5,
            ];

            $detail = [
                // 'Jenis Kelamin' => $data -> ,
                'Nomor Rekam Medis' => $data -> norm,
                'Nama' => $data->namapasien,
                // 'Tanggal Keluar' => $data["outDate"],
            ];

            $validator = [];
            foreach ($checkList as $lsit) {
                $validator[count($validator)] = $lsit;
            }

            $checked = in_array(true, $validator)

        @endphp
        
        <x-data :id="$data->id" :name="$detail['Nama']" :checked="$checked" :lists="$checkList" :details="$detail" />
    @endforeach
</section>

{{-- @vite(['resources/js/data_display/listing.ts']) --}}
