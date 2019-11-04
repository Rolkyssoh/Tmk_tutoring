<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inspecteurregionale extends Model
{
     
    public function directeureg(){
        return $this->belongsTo('App\Directeurregionale'); 
    }

    public function matiere(){
        return $this->belongsTo('App\Matieres'); 
    }

    public function agenda(){
        return $this->hasOne('App\Agenda'); 
    } 

    public function chat(){

        return $this->hasMany('App\Chats');
    }

    public function conference(){

        return $this->hasOne('App\Conference');
    }

    public function enseignant(){

        return $this->belongsToMany('App\Enseignant','enseignant_inspecteur', 'id_inspecteur','id_enseignant');
    }

    public function cours(){

        return $this->belongsToMany('App\Cours','interagir','id_inspecteur','id_cours');
    }

    public function etablissement(){

        return $this->belongsToMany('App\Etablissement','inspecteur_etablissement','id_inspecteur','id_etablissement' );
    }

    public function correction(){

        return $this->belongsToMany('App\Correction','interagir','id_inspecteur','id_correction');
    }

    public function seance(){

        return $this->belongsToMany('App\Seance','interagir','id_inspecteur','id_seance');
    }

    public function test(){

        return $this->belongsToMany('App\Test','inspecteur_test','id_inspecteur' ,'id_test');
    }

    public function activiter(){

        return $this->belongsToMany('App\Activiter','inspecteur_activiter','id_inspecteur' ,'id_activiter');
    }

    public function gestionsalle(){

        return $this->belongsToMany('App\Gestionsalle','interagir','id_inspecteur' ,'id_gestionsalle');
    }

    
    
}
