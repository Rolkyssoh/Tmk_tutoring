<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Correction extends Model
{
    public function test(){
        return $this->hasOne('App\Test'); 
    }

    public function activiter(){
        return $this->hasOne('App\Activiter'); 
    } 

    public function directeureg(){
        return $this->belongsTo('App\Directeurregionale'); 
    }

    public function directeuprv(){
        return $this->belongsTo('App\Directeurprovinciale'); 
    }

    public function enseignant(){
        return $this->belongsTo('App\Enseignant'); 
    }

    function reponses(){

        return $this->hasMany('App\Reponses');
    }

    public function etudient(){

        return $this->belongsToMany('App\Etudient','etudient_correction','id_correction','id_etudient');
    }

    public function admin(){

        return $this->belongsToMany('App\Admins','gerer','id_correction','id_admin');
    }

    public function inspecteur(){

        return $this->belongsToMany('App\Inspecteurregionale','interagir','id_correction' ,'id_inspecteur');
    }



}
