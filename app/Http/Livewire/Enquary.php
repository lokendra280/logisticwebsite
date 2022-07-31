<?php

namespace App\Http\Livewire;

use App\Models\enquary as ModelsEnquary;
use App\Models\receiver;
use App\Models\senderinfo;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Enquary extends Component
{
    public $item_id,$enquiry,$call_status,$deliver_status,$call_lead,$user_id,$for_id,$enquaries;
    public function mount($item_id)
    {
        $this->item_id = $item_id;
        $this->lead_id = $item_id;
        $this->caller_name = Auth::user()->name;
    }
    public function selectLead($lead_id)
    {
        $this->call_lead = receiver::find($lead_id);
   
    }
    public function saveCall()
    {
        $this->enquiry['caller_id'] = Auth::user()->id;
        $this->enquiry['lead_id'] = $this->call_lead->id;
        // $this->enquiry['for_id'] = $this->item_id;
        session()->flash('message', 'successfully Saved Called Information.');
         // dd($this->enquiry);
        ModelsEnquary::create($this->enquiry);
    }
    public function render()
    {
        $enquires = ModelsEnquary::select('*')->where('lead_id', $this->lead_id)->get();
        // dd($enquires);
        return view('livewire.enquary',[
            'current_user' => receiver::find($this->item_id),
            
            'enquires' => $enquires,   
            'sender_info' => senderinfo::find($this->item_id),
        ]);
    }
}
