<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addbranch extends Model
{
    use HasFactory;
    
    protected $fillable = ['add_branch','email','phone_number','branch_location',];
}
