<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name'
    ];
    public function books($value=''){
    	return $this->hasMany('App\Book');
    }
}
