<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    public function matiere(){
        return $this->belongsTo('App\Matiere'); 
    }

    public function directeureg(){
        return $this->belongsTo('App\Directeurregionale'); 
    }

    public function agenda(){
        return $this->hasOne('App\Agenda'); 
    }

    public function cours(){
        return $this->hasMany('App\Cours'); 
    }

    public function activiter(){
        return $this->hasMany('App\Activiter'); 
    }


    public function seance(){
        return $this->hasMany('App\Seance'); 
    }

    public function note(){
        return $this->hasMany('App\Note'); 
    }

    public function Correction(){
        return $this->hasMany('App\Correction'); 
    }

    public function chat(){

        return $this->hasMany('App\Chats');
    }

    public function conference(){

        return $this->hasOne('App\Conference');
    }

    public function test(){

        return $this->belongsToMany('App\Test','enseignant_test','id_enseignant','id_test');
    }

    public function niveauscolaire(){

        return $this->belongsToMany('App\NiveauScolaire','enseignant_niveauscolaire','id_enseignant', 'id_niveauscolaire');
    }

    public function admin(){

        return $this->belongsToMany('App\Admins','gerer','id_enseignant','id_admin');
    }

    public function inspecteur(){

        return $this->belongsToMany('App\Inspecteurregionale','enseignant_inspecteur','id_enseignant' ,'id_inspecteur');
    }
    











     

    



}
