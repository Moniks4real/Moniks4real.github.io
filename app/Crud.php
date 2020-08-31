<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $fillable = [
         'name','image1','type','weight','color','active','image','quantity','price'
    ];
}
