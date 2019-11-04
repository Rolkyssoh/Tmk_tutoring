<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    public function cours(){
        return $this->belongsTo('App\Cours'); 
    }

    public function salle(){
        return $this->hasMany('App\Salles'); 
    }

    public function niveauscolaire(){
        return $this->belongsTo('App\Niveauscolaire'); 
    }

    public function gestionsalle(){
        return $this->hasOne('App\Gestionsalle'); 
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

    public function chat(){

        return $this->hasMany('App\Chats');
    }

    public function conference(){

        return $this->hasOne('App\Conference');
    }

    public function etudient(){

        return $this->belongsToMany('App\Etudient','etudient_seance','id_seance','id_etudient');
    }

    public function inspecteur(){

        return $this->belongsToMany('App\Inspecteurregionale','interagir','id_seance' ,'id_inspecteur');
    }

    public function admin(){

        return $this->belongsTo('App\Admins');
    }

    public function agenda(){

        return $this->belongsToMany('App\Agenda','agenda_seance','id_seance','id_agenda');
    }









}
