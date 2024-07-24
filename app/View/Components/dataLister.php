<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;
use Resources\lib\MockData;

class dataLister extends Component
{
	public function __construct(public array $datas = [])
	{
		$this->datas = $datas;
	}

	/**
	 * Get the view / contents that represent the component.
	 */
	public function render(): View|Closure|string
	{
		return view("components.data-lister");
	}
}
