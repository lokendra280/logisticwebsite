<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    use HasFactory;
    protected $fillable = ["product_type","package_type","price"];

    public function sender(){
       return $this->hasMany(senderinfo::class);
    }
}

