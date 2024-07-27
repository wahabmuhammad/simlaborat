<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class data extends Component
{
    /**
     * Create a new component instance.
     */
    // public $attributes = [
    //     "id" => "1",
    //     "name" => "John Doe",
    //     "gender" => "Male",
    //     "notel" => "(791) 2438547",
    //     "inDate" => "09/07/2024",
    //     "outDate" => "09/08/2024",
    //     "checked" => "true"
    // ];

    public function __construct(
        public int $id = 1,
        public string $name = "John Doe",
        public string $note = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio amet hic pariatur tenetur, autem asperiores dolorem officia? Maiores error fuga modi odit animi autem distinctio, esse quo accusamus perferendis nam?",
        public bool $checked = false,
        public string $type = "0", // Type 0: all, 1: pemeriksaan, 2: pembayaran
        public array $lists = [
            "Darah lengkap" => true,
            "Darah rutin" => true,
            "Gula sewaktu" => true,
            "Gula puasa" => true,
        ],
        // public string $gender = "Male",
        // public string $phone = "(791) 2438547",
        // public string $inDate = "09/07/2024",
        // public string $outDate = "09/08/2024",
        public array $details = [
            "Jenis Kelamin" => "Male",
            "Nomor Telfon" => "(791) 2438547",
            "Tanggal Masuk" => "09/07/2024",
            "Tanggal Keluar" => "09/08/2024"
        ],
    )
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.data');
    }
}
