<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directeurprovinciale extends Model
{
    public function directeureg(){
        return $this->belongsTo('App\Directeurregional'); 
    }

    public function enseignant(){
        return $this->hasMany('App\Enseignant'); 
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

    public function admin(){

        return $this->belongsToMany('App\Admins','gerer','id_dirprovinciale','id_admin');
    }


 


}
