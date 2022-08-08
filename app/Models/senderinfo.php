<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class senderinfo extends Model
{
    use HasFactory;
    protected $table ="senderinfo";
    protected $fillable=['name','status','delivery_status','shiping_price','payment','product_type','company_name','city','street','email','phone_number','quantity','weight','items_id',];
   


public function user()
{
    return $this->belongsTo(User::class);
}
 public function items(){
    return $this->belongsTo(items::class);
 }   
  
}
