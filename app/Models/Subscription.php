<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $fillable=['start-date','end-date','status','suspension-reason','price','discount','member-id'];

     public function sup_paymentes(){

        return $this->hasMany(Payment::class,'subscription-id','id');
    }

    public function sup_offers(){

        return $this->hasMany(Offer::class,'subscription-id','id');
    }

     public function member_sub(){

        return $this->belongsTo(Subscription::class,'member-id','id');
    }
}
