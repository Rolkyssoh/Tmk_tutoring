<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function test(){
        return $this->hasOne('App\Test'); 
    }

    public function activiter(){
        return $this->hasOne('App\Activiter'); 
    }

    
    public function etudient(){ 
       return $this->belongsTo('App\Etudient');
   }
}
