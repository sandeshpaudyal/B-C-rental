<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
   protected $fillable = [
   	"model",
   	"brand",
   	"type",
   	"color",
   	"price"
   ];

    public function image()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

}
