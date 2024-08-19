<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable=['name','capacity','facilities_id','sport_id'];

     public function room(){

        return $this->belongsTo(Sport::class,'sport-id','id');
    }

     public function room_day(){

        return $this->hasMany(Room_day::class,'room-id','id');
    }

     public function facilities_room(){

        return $this->belongsTo(Facilities::class,'facilities-id','id');
    }
}
