<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cat extends Model
{
	public $table = 'cats';
    
    public function products()
    {
    	return $this->hasMany('App\product');
    }
}
