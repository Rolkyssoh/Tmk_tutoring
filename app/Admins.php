<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{
    public function conference(){

        return $this->hasOne('App\Conference');
    }

    public function enseignant(){

        return $this->belongsToMany('App\Enseignant','gerer', 'id_admin','id_enseignant');
    }

    public function cours(){

        return $this->belongsToMany('App\Cours','gerer','id_admin','id_cours');
    }

    
    public function etablissement(){

        return $this->belongsToMany('App\Etablissement','gerer','id_admin','id_etablissement');
    }

    public function correction(){

        return $this->belongsToMany('App\Correction','gerer','id_admin','id_correction');
    }

    public function seance(){

        return $this->hasMany('App\Seance');
    }

    
    public function directeurprv(){

        return $this->belongsToMany('App\Directeurprovinciale','gerer','id_admin','id_dirprovinciale');
    }

    public function parent(){

        return $this->belongsToMany('App\Parents','gerer','id_admin','id_parent');
    }

    public function salle(){

        return $this->belongsToMany('App\Salles','gerer','id_admin','id_salle');
    }
    
    


}
