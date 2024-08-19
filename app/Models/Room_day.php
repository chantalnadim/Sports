<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room_day extends Model
{
    use HasFactory;
    protected $fillable=['room-id','day-id'];

     public function day(){

        return $this->belongsTo(Day::class,'day-id','id');
    }

     public function room(){

        return $this->belongsTo(Room::class,'room-id','id');
    }
}
