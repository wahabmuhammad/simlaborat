<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class htmlContainer extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $className = "bg-gray-500",
    )
    {
        $bodyClass = $className;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.html-container');
    }
}
