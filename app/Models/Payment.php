<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable=['payment-date','amount','subscription-id'];

     public function payment(){

        return $this->belongsTo(Subscription::class,'subscription-id','id');
    }
}
