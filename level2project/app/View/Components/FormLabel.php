<?php

namespace App\View\Components;

use Closure;
use Dotenv\Util\Str;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormLabel extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public String $title)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form-label');
    }
}
