<?php

namespace App\Http\Livewire;

use App\Models\items as ModelsItems;
use Livewire\Component;

class Items extends Component
{
    public $product_type,$package_type,$price;
        public function save(){
            $item = new ModelsItems();
            $item->product_type=$this->product_type;
            $item->price=$this->price;
     
            $item->save();
            session()->flash('message', 'Item Add successfully');
        }
    public function render()
    {
        return view('livewire.items');
    }
}
