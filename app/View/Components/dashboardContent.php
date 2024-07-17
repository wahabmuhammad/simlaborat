<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class dashboardContent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $className = "pt-20 h-fit w-screen lg:pt-0 lg:pl-64",
    )
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard-content');
    }
}
