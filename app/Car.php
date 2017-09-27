<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['title', 'producer', 'number_of_doors'];

    static function getPublishedCars(){
    	return self::where('created_at', null)->get();
    }
}
