<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ActionButton extends Component
{
    /**
     * Create a new component instance.
     */

    public string $color;
    public string $text;

    public function __construct(public string $href, public string $type)
    {
        if ($type == 'create') {
            $this->color = 'btn-primary';
            $this->text =  __('keywords.add_new');
        } elseif ($type == 'edit') {
            $this->color = 'btn-success';
            $this->text = "<i class='fe fe-edit fa-2x'></i>";
        } elseif ($type == 'show') {
            $this->color = 'btn-primary';
            $this->text = "<i class='fe fe-eye fa-2x'></i>";
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.action-button');
    }
}
