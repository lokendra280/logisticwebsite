<?php

namespace App\Http\Livewire;

use App\Models\addbranch;
use App\Models\receiver as ModelsReceiver;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Receiver extends Component
{
    public $name,$email,$city,$items_id,$company_name,$Street,$phone_number,$pacakage_type,$product_type,$quantity,$weight;
  
  
    public function mount($items_id = null)
    {
        if (intval($items_id) > 0) {
       $this->items_id = $items_id;
            $senderinfo = ModelsReceiver::find($items_id);
           $this->name = $senderinfo->name;   
           $this->company_name = $senderinfo->company_name;
           $this->email = $senderinfo->email;
           $this->city = $senderinfo->city;
           $this->Street = $senderinfo->street;
           $this->phone_number = $senderinfo->phone_number;  
       }
   }


    public function Send(){
        if ($this->items_id) {
            $sender =ModelsReceiver::find($this->items_id);
            $sender->name = $this->name;
            $sender->email = $this->email;
            $sender->city = $this->city;
            $sender->company_name = $this->company_name;
            $sender->street = $this->Street;
            $sender->phone_number = $this->phone_number;
            $sender->save();
          
        }else{

        Auth::user()->receiver()->create([

            'name'=>$this->name,
            'email'=>$this->email,
            'city'=>$this->city,
            'company_name' =>$this->company_name,
            'street'=>$this->Street,
            'phone_number'=>$this->phone_number
        ]);
    }
         session()->flash('message', 'Shiping Created Successfully .');
    }

    public function render()
        
    {
        $add_branch = addbranch::all();
        return view('livewire.receiver',[
            'add_branch' => $add_branch,
        ]);
    }
}
