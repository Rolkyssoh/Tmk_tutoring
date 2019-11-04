<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activiter extends Model
{
    public function enseignant(){
        return $this->belongsTo('App\Enseignant'); 
    }

    public function cours(){
        return $this->belongsTo('App\Cours'); 
    }

    function correction(){ 
        return $this->hasOne('App\Correction');
    }

    public function note(){
        return $this->hasOne('App\Note'); 
    }

    public function section(){
        return $this->belongsTo('App\Sections'); 
    }

    public function etudient(){

        return $this->belongsToMany('App\Etudient','etudient_activiter','id_activiter','id_etudient');
    }

    public function inspecteur(){

        return $this->belongsToMany('App\Inspecteurregionale','inspecteur_activiter','id_activiter' ,'id_inspecteur');
    }



}
