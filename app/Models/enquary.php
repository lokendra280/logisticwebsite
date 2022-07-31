<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enquary extends Model
{
    use HasFactory;
    protected $fillable = ['lead_id','caller_id','call_breif','call_status','devlivery_status'];
}
