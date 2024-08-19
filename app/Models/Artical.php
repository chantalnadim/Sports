<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artical extends Model
{
    use HasFactory;
    protected $fillable=['title','published-at','tags','category-id'];

     public function articles(){

        return $this->hasMany(Artical_tag::class,'artical-id','id');
    }

     public function cat_artical(){

        return $this->belongsTo(Artical::class,'category-id','id');
    }
}
