<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public $table = 'products';
    
     protected $casts = [
        'properties' => 'array'
    ];
    public function cats()
    {
    	return $this->belongsTo('App\cat');
    }
}
