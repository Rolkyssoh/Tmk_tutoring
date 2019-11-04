<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    public function etablissement(){

        return $this->belongsToMany('App\Etablissement','etablissement_filiere','id_filiere','id_etablissement');
    }

    public function niveauscolaire(){

        return $this->belongsToMany('App\Niveauscolaire','filiere_niveauscolaire','id_filiere','id_niveauscolaire');
    }
}
