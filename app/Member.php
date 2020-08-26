<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
     protected $fillable = [ 'name','email','phone','address','edulevel'
    ];
        
     public function books(){
        	return $this->belongsToMany('App\Book','issue_detail')	
                    	->withPivot('fee','status','due_date')
        				->withTimestamps();
        }

}
