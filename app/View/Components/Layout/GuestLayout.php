<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GuestLayout extends Component
{
    public $isLivewire;
    public $title;
    /**
     * Create a new component instance.
     */
    public function __construct(?String $title = null, $livewire = null)
    {
        //cek apakah mengunakan livewire
        if ( is_string($livewire) && $livewire == 'true' ) {
            $this->isLivewire = true;
        } else {
            $this->isLivewire = false;
        }
       $this->title =  $title ? $title.' - '.config('app.name') : config('app.name');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.guest-layout');
    }
}
