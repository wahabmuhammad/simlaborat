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
        public string $gender = "Male",
        public string $phone = "(791) 2438547",
        public string $inDate = "09/07/2024",
        public string $outDate = "09/08/2024",
        public bool $checked = true,
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
