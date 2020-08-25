<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
     protected $fillable = [ 'name','email','phone','address','edulevel'
    ];
    public function issues($value=''){
        	return $this->belongsToMany('App\Issue');
        }
}
