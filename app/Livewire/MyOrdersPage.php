<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Order;

#[Title('My Orders - E-COM')]
class MyOrdersPage extends Component
{
    public function render()
    {
        $my_orders = Order::where('user_id', auth()->user()->id)->latest()->paginate(5);

        return view('livewire.my-orders-page',[
            'orders' => $my_orders,
        ]);
    }
}
