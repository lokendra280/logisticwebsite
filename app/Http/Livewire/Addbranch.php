<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\addbranch as Modelsaddbranch;

class Addbranch extends Component
{
    public $add_branch,$email,$phone_number,$branch_location;
    
//     public function mount($items_id = null)
//     {
      
//         if (intval($items_id) > 0) {
//         $this->items_id = $items_id;
//             $add_branch = Addbranch::find($items_id);
//            $this->add_branch = $add_branch->add_branch;   
//            $this->company_name = $senderinfo->company_name;
//            $this->email = $senderinfo->email;
//            $this->city = $senderinfo->city;
//            $this->Street = $senderinfo->street;
//            $this->phone_number = $senderinfo->phone_number;
        
          
//        }
//    }
    public function save(){

        $item = new Modelsaddbranch();
        $item->add_branch=$this->add_branch;
        $item->email=$this->email;
        $item->phone_number=$this->phone_number;
        $item->branch_location=$this->branch_location;
      //  dd($item);
        $item->save();
        session()->flash('message', 'Branch Add successfully');
    }
    public function render()
    {
        return view('livewire.addbranch');
    }
}
