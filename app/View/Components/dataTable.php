<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class dataTable extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title = "Daftar Pasien",
        public int $dataCount = 30,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.data-table');
    }
}
