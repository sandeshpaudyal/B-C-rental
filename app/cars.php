<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cars extends Model
{
   protected $fillable = [
   	"model",
   	"brand",
   	"type",
   	"color",
   	"price"
   ];
}
