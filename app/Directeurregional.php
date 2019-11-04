<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directeurregional extends Model
{
    public function enseignant(){
        return $this->hasMany('App\Enseignant'); 
    } 

    public function etudient(){ 
       return $this->hasMany('App\Etudient');
   }

    public function cours(){
        return $this->hasMany('App\Cours'); 
    }

    public function etablissement(){
        return $this->hasMany('App\Etablissement'); 
    }

    public function correction(){ 
        return $this->hasMany('App\Correction');
    }

    public function seance(){

        return $this->hasMany('App\Seance');
    }

    public function directeuprv(){
        return $this->hasMany('App\Directeurprovinciale'); 
    }

    public function inspecteurregionale(){ 
        return $this->hasMany('App\Inspecteurregionale');
    }

    public function gestionsalle(){
        return $this->hasMany('App\Gestionsalle'); 
    }

    public function parent(){ 
        return $this->hasMany('App\Parents');
    } 

    public function salle(){
        return $this->hasMany('App\Salles'); 
    }

    public function chat(){

        return $this->hasMany('App\Chats');
    }

    public function conference(){

        return $this->hasOne('App\Conference');
    }



   
}
