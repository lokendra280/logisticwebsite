<?php

namespace App\Http\Livewire;

use App\Models\addbranch;
use Livewire\Component;

class Listbranch extends Component
{
    public function render()
    {
        $add_branch = addbranch::all();
        //dd($add_branch);
        return view('livewire.listbranch',[
            'add_branch' => $add_branch,
        ]);
    }
}
