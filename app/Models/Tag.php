<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable=['name'];

    public function art_tag(){

        return $this->hasMany(Artical_tag::class,'tag-id','id');
    }
}
