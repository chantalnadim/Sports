<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable=['name','phone-number','address'];

    public function members(){

        return $this->hasMany(Subscription::class,'member-id','id');
    }
}
