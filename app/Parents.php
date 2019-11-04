<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    public function directeureg(){
        return $this->belongsTo('App\Directeurregionale'); 
    }

    public function directeuprv(){
        return $this->belongsTo('App\Directeurprovinciale'); 
    }

    public function agenda(){
        return $this->hasMany('App\Agenda'); 
    } 

    public function etudient(){ 
       return $this->hasMany('App\Etudient');
   } 

   public function chat(){

    return $this->hasMany('App\Chats');
}

public function conference(){

    return $this->hasOne('App\Conference');
}

public function admin(){

    return $this->belongsToMany('App\Admins','gerer','id_parent','id_admin');
}

    


}
