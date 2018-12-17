<?php

namespace App\Model;

use App\Model\Revew;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = [
		'name','details','stock','price','discount'
	];
    public function reviews()
    {
    	return $this->hasMany(Revew::class);
    }
}
