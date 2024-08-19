<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $fillable=['valid-from','valid-to','discount_percentage','subscription-id'];

    public function offer(){

        return $this->belongsTo(Subscription::class,'subscription-id','id');
    }
}
