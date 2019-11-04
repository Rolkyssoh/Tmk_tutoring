<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chats extends Model
{

    public function seance(){

        return $this->belongsTo('App\Seance');
    }

    public function etudient(){ 
        return $this->belongsTo('App\Etudient');
    }

    public function directeuprv(){ 
       return $this->belongsTo('App\Directeurprovinciale');
   }

   public function directeureg(){
    return $this->belongsTo('App\Directeurregionale');  
    }

  public function enseignant(){
    return $this->belongsTo('App\Enseignant'); 
  } 

  public function gestionsalle(){
    return $this->belongsTo('App\Gestionsalle'); 
}

public function inspecteurregionale(){ 
    return $this->belongsTo('App\Inspecteurregionale');
}

public function parent(){ 
    return $this->belongsTo('App\Parents');
} 


}
