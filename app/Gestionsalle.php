<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gestionsalle extends Model
{
    
    public function directeureg(){
        return $this->belongsTo('App\Directeurregionale'); 
    }

    public function directeuprv(){
        return $this->belongsTo('App\Directeurprovinciale'); 
    }

    public function salle(){
        return $this->hasOne('App\Salles'); 
    }

    public function seance(){

        return $this->hasOne('App\Seance');
    }

    public function chat(){

        return $this->hasMany('App\Chats');
    }

    public function conference(){

        return $this->hasOne('App\Conference');
    }

    public function inspecteur(){

        return $this->belongsToMany('App\Inspecteurregionale','interagir','id_gestionsalle' ,'id_inspecteur');
    }
 
    




     
}
