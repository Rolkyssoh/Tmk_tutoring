<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudient extends Model
{
    
    public function niveauscolaire(){
        return $this->belongsTo('App\Niveauscolaire'); 
    }

    public function note(){
        return $this->hasMany('App\Note'); 
    }

    public function agenda(){
        return $this->belongsTo('App\Agenda'); 
    }

    public function parent(){
        return $this->belongsTo('App\Parent'); 
    }

    public function directeureg(){
        return $this->belongsTo('App\Directeurregionale'); 
    }
    public function chat(){

        return $this->hasMany('App\Chats');
    }

    public function conference(){

        return $this->hasOne('App\Conference');
    }

    public function seance(){

        return $this->belongsToMany('App\Seance','etudient_seance','id_etudient','id_seance');
    }

    public function activiter(){

        return $this->belongsToMany('App\Activiter','etudient_activiter','id_etudient','id_activiter');
    }

    public function correction(){

        return $this->belongsToMany('App\Correction','etudient_correction','id_etudient','id_correction');
    }
    public function test(){

        return $this->belongsToMany('App\Test','etudient_test','id_etudient','id_test');
    }

    public function admin(){

        return $this->belongsToMany('App\Admins','gerer','id_etudient','id_admin');
    }






}
