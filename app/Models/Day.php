<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;
    protected $fillable=['name'];

     public function day_room(){

        return $this->hasMany(Room_day::class,'day-id','id');
    }
}
