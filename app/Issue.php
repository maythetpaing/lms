<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
  	protected $fillable = ['member_id','book_id','due_date',
    ];

     public function member(){
      return $this->belongsTo('App\Member');
    }
     public function book(){
      return $this->belongsTo('App\Book');
    }
}
