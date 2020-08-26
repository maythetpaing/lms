<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
     protected $fillable = [ 'name','email','phone','address','edulevel'
    ];
        //  public function books($value=''){
        // 	return $this->belongsToMany('App\Book','issue_detail')	
        //             	->withPivot('fee','status','due_date')
        // 				->withTimestamps();
        // }
   
    public function issues($value=''){
        	return $this->hasMany('App\Issue');
        }

}
