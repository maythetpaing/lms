<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [ 'codeno','name','photo','noc','edition','description','author_id','category_id'
    ];

    public function author($value=''){
    	return $this->belongsTo('App\Author');

    }
     public function category($value=''){
     	return $this->belongsTo('App\Category');

    }
    // public function orders($value=''){
    //     	return $this->belongsToMany('App\Order','order_detail')->withPivot('qty')->withTimestamps();
    //     }
}
