<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    function seance(){

        return $this->hasOne('App\Seance');
    }

    public function etudient(){ 
        return $this->hasOne('App\Etudient');
    }

    public function directeuprv(){ 
       return $this->hasOne('App\Directeurprovinciale');
   }

   public function directeureg(){
    return $this->hasOne('App\Directeurregionale');  
    }

  public function enseignant(){
    return $this->hasOne('App\Enseignant'); 
  } 

  public function gestionsalle(){
    return $this->hasOne('App\Gestionsalle'); 
}

public function inspecteurregionale(){ 
    return $this->hasOne('App\Inspecteurregionale');
}

public function parent(){ 
    return $this->hasOne('App\Parents');
} 

public function admin(){ 
    return $this->hasOne('App\Admins');
} 
}
