<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
     protected $fillable = ['member_id','book_id','due_date','status','fee'
    ];
     public function books($value=''){
        	return $this->belongsToMany('App\Book','issue_detail')
        				->withPivot('fee','status','due_date')
        				->withTimestamps();
        }
         public function members($value=''){
        	return $this->hasMany('App\Member');
        }
}
