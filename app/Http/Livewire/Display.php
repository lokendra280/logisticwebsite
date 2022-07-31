<?php

namespace App\Http\Livewire;

use App\Models\senderinfo;
use Livewire\Component;

class Display extends Component
{
    public function render()
    {
        $senderinfo = senderinfo::all();
        return view('livewire.display',[
            "senderinfo" => $senderinfo
        ]);
    }
}
