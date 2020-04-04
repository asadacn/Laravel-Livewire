<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Databind extends Component
{
    public $text;
    public $check=false;
    public function erase()
    {
        $this->text='';
        $this->check=false;

    }
    public function render()
    {
        return view('livewire.databind');
    }
}
