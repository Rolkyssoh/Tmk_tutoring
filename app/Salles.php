<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salles extends Model
{
    public function directeureg(){
        return $this->belongsTo('App\Directeurregionale'); 
    }

    public function directeuprv(){
        return $this->belongsTo('App\Directeurprovinciale'); 
    }

    public function etablissement(){
        return $this->belongsTo('App\Etablissement'); 
    }

    function seance(){ 
        return $this->belongsTo('App\Seance');
    }

    public function gestionsalle(){
        return $this->hasOne('App\Gestionsalle'); 
    }

    public function agenda(){
        return $this->hasOne('App\Agenda'); 
    }

    public function admin(){

        return $this->belongsToMany('App\Admins','gerer','id_salle','id_admin');
    }


}
