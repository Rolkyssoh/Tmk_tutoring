<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnseignantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enseignant', function (Blueprint $table) {
            $table->engine="InnoDB"; 
            $table->bigIncrements('id');   
            $table->string('nom_enseignant');
            $table->string('prenom_enseignant');
            $table->string('tele_enseignant');
            $table->string('email_enseignant'); 
	        $table->date('adresse_enseignant'); 
            $table->string('photo_enseignant'); 
            $table->string('password');
            $table->BigInteger('id_matiere_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_agenda_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_dirregional_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_conference_fk')->unsigned()->nullable();  
            $table->timestamps();
            
           


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enseignant');
    }
}
