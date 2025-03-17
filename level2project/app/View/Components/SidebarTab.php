<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SidebarTab extends Component
{
    /**
     * Create a new component instance.
     */
<<<<<<< HEAD
    public function __construct(
        public string $href,
        public string $icon,
        public string $name
    ) {
=======
    public function __construct(public string $href, public string $icon,
        public string $name)
    {
>>>>>>> cd9c8a3dced03aa691c5724cd6abd8ee0d596bfe
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar-tab');
    }
}
