<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToEnseignantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('enseignant', function (Blueprint $table) {  
             $table->foreign('id_dirregional_fk')->references('id')->on('directeur_regional')->onDelete('cascade')->onUpdate("cascade");
             $table->foreign('id_agenda_fk')->references('id')->on('agenda')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_matiere_fk')->references('id')->on('matiere')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_conference_fk')->references('id')->on('conference')->onDelete('cascade')->onUpdate("cascade"); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enseignant', function (Blueprint $table) {
            //
            
            $table->dropForeign('enseignant_id_dirregional_fk_foreign');
             $table->dropForeign('enseignant_id_agenda_fk_foreign');
            $table->dropForeign('enseignant_id_matiere_fk_foreign');
            $table->dropForeign('enseignant_id_conference_fk_foreign');
        });
    }
}
