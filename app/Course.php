<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    
  /**
   * return the user the item belongs to
   */
  public function user(){
    return $this->belongsTo('App\User', 'user_id');
  }

}
