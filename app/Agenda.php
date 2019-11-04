<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    public function salle(){
        return $this->hasOne('App\Salles'); 
    }

    public function enseignant(){
        return $this->hasOne('App\Enseignant'); 
    } 

    public function etudient(){ 
       return $this->hasMany('App\Etudient');  
   }

    public function inspecteurregionale(){ 
        return $this->hasOne('App\Inspecteurregionale');
    }

    public function parent(){

        return $this->belongsTo('App\Parents');
    } 

    public function seance(){

        return $this->belongsToMany('App\Seance','agenda_seance','id_agenda','id_seance');
    }


}
