<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reponses extends Model
{
    function correction(){

        return $this->belongsTo('App\Correction');
    }

    function questions(){

        return $this->belongsTo('App\Questions');
    }
}
