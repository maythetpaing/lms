<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
     protected $fillable = [ 'name','email','phone','address','edulevel'
    ];
    public function issues($value=''){
        	return $this->belongsToMany('App\Issue');

    // public function issue($value=''){
    //     	return $this->belongsToMany('App\Issue');
    //     }
         public function books($value=''){
        	return $this->belongsToMany('App\Book','issue_detail')	
                    	->withPivot('fee','status','due_date')
        				->withTimestamps();
        }
}
