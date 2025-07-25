<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Order Success - E-COM')]
class SuccessPage extends Component
{
    public function render()
    {
        return view('livewire.success-page');
    }
}
