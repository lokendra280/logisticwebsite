<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Items as LivewireItems;
use App\Models\senderinfo; use Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request; 
use Livewire\Component;
use App\Mail\SendMail;
use App\Models\addbranch;
use App\Models\items;


class Createshiping extends Component
{
    public $selected_product,$pending,$payment,$status,$shiping_price=0, $name,$email,$city,$items_id,$company_name,$Street,$productprice,$phone_number,$pacakage_type,$package_type,$product_type,$quantity,$weight;
    
     public function mount($items_id = null)
     {
       
         if (intval($items_id) > 0) {
         $this->items_id = $items_id;
             $senderinfo = senderinfo::find($items_id);
            $this->name = $senderinfo->name;   
            $this->company_name = $senderinfo->company_name;
            $this->email = $senderinfo->email;
            $this->city = $senderinfo->city;
            $this->Street = $senderinfo->street;
            $this->phone_number = $senderinfo->phone_number;
            $this->pacakage_type = $senderinfo->pacakage_type;
            $this->quantity = $senderinfo->quantity;
            $this->weight = $senderinfo->weight;
            // $this->shiping_price = $senderinfo->shiping_price;
            // $this->payment = $senderinfo->status;
           
        }
    }
    public function Send(Request $request)
    {
        //   $this->validate([
        //     "name" => "required",
        //    "email" => "required|email",
        //    "city" => "required",
        //    "company_name" => "required",
        //    "Street" => "required",
        //    "phone_number" => "required|min:10",
        //    "pacakage_type" => "required",
        //    "product_type" => "required",
        //    "quantity" => "required",
        //    "weight" => "required",
        //    "selected_product" => "required",
        //     "payment" => 'required'

        //  ]);
           
        if ($this->items_id) {
            $sender =senderinfo::find($this->items_id);
            $sender->name = $this->name;
            $sender->email = $this->email;
            $sender->city = $this->city;
            $sender->company_name = $this->company_name;
            $sender->Street = $this->Street;
            $sender->phone_number = $this->phone_number;
            // $sender->items_id  = $this->selected_product;
            $sender->quantity = $this->quantity;
            $sender->weight = $this->weight;
            // $sender->shiping_price = $this->shiping_price;
            // $sender->status = $this->payment;
          
    
             $sender->save();
          
         
            
            return redirect('history/show');
        }else{
         Auth::user()->sender()->create([
         
          'name'=>$this->name,
          'email'=>$this->email,
          'city'=>$this->city,
          'company_name'=>$this->company_name,
          'street'=>$this->Street,
          'phone_number'=>$this->phone_number,
          'items_id'=>$this->selected_product,
          'quantity' =>$this->quantity,
          'weight'=>$this->weight,
          'shiping_price' => $this->shiping_price,
          'status' => $this->payment,
       
          
      ]);
     
    
   
    }

    return redirect('/receiver/add');
       
    }

    public function prices(){
        $items= items::where('id',$this->selected_product)->first();
        $this->shiping_price =$items->price*$this->weight*$this->quantity;
    }
    

     
    public function render()
    {
        $items = items::all();
        $add_branch = addbranch::all();
       // dd($add_branch);
      
        // $products = items::pluck('price')->toArray();
        // $product_type = items::pluck('product_type')->toArray();
        // $data = items::select('id')->get();
        // $items = items::select('package_type')->get();
    // // 
        
    //   dd($variant);
    
    
        return view('livewire.createshiping',[
             
            'items' => $items,  
            'add_branch' => $add_branch,
        ]);
    }
}
