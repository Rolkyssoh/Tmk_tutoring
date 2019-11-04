<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sections extends Model
{
    public function test(){
        return $this->hasOne('App\Test'); 
    }

    public function activiter(){ 
        return $this->hasMany('App\Activiter');
    }

    public function cours(){
        return $this->belongsTo('App\Cours'); 
    }
}
