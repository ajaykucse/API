<?php

namespace App\Model;

use App\Model\Revew;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function reviews()
    {
    	return $this->hasMany(Revew::class);
    }
}
