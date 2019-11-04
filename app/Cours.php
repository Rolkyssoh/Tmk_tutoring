<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    public function matiere(){
        return $this->belongsTo('App\Matieres'); 
    }

    public function section(){
        return $this->hasMany('App\Sections'); 
    }

    public function test(){
        return $this->hasMany('App\Test'); 
    }

    public function activiter(){ 
        return $this->hasMany('App\Activiter');
    }

    public function directeureg(){
        return $this->belongsTo('App\Directeurregionale'); 
    }

    public function enseignant(){
        return $this->belongsTo('App\Enseignant'); 
    }

    function seance(){ 
        return $this->hasMany('App\Seance');
    }

    public function admin(){

        return $this->belongsToMany('App\Admins','gerer','id_cours','id_admin');
    }

    public function inspecteur(){

        return $this->belongsToMany('App\Inspecteurregionale','interagir','id_cours' ,'id_inspecteur');
    }




    
}
