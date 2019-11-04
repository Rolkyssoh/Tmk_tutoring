<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    public function salle(){
        return $this->hasMany('App\Salles'); 
    }

    public function directeureg(){
        return $this->belongsTo('App\Directeurregionale'); 
    }

    public function directeuprv(){
        return $this->belongsTo('App\Directeurprovinciale'); 
    }

    public function conference(){

        return $this->hasOne('App\Conference');
    }
    public function filiere(){

        return $this->belongsToMany('App\Filiere','etablissement_filiere','id_etablissement','id_filiere');
    }

    public function admin(){

        return $this->belongsToMany('App\Admins','gerer','id_etablissement','id_admin');
    }

    public function inspecteur(){

        return $this->belongsToMany('App\Inspecteurregionale','etablissement_inspecteur','id_etablissement' ,'id_inspecteur');
    }





     
}
