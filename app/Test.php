<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public function cours(){
        return $this->belongsTo('App\Cours'); 
    }

    function correction(){ 
        return $this->hasOne('App\Correction');
    }

    public function note(){
        return $this->hasOne('App\Note'); 
    }

    public function section(){
        return $this->hasOne('App\Sections'); 
    }

    public function enseignant(){

        return $this->belongsToMany('App\Enseignant','enseignant_test', 'id_test','id_enseignant');
    }

    public function etudient(){

        return $this->belongsToMany('App\Etudient','etudient_test','id_test','id_etudient');
    }

    public function inspecteur(){

        return $this->belongsToMany('App\Inspecteurregionale','inspecteur_test','id_test' ,'id_inspecteur');
    }

    public function question(){

        return $this->belongsToMany('App\Questions','table_test_qestions','id_test' ,'id_questions');
    }



}
