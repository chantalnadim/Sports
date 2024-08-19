<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artical_tag extends Model
{
    use HasFactory;
protected $fillable=['artical-id','tag-id'];

     public function article_tag(){

        return $this->belongsTo(Artical::class,'artical-id','id');
    }

     public function art_tag(){

        return $this->belongsTo(Tag::class,'tag-id','id');
    }
}
