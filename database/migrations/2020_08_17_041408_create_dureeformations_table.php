<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDureeformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dureeformations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cour_id');
            $table->unsignedBigInteger('salle_id');
            $table->unsignedBigInteger('formateur_id');
            $table->string('dureeformation');
            $table->date('datedebut');
            $table->date('datefin');
            $table->string('prix');
            $table->timestamps();
            $table->foreign('cour_id')
                  ->references('id') 
                  ->on('cours')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('salle_id')
                  ->references('id') 
                  ->on('salles')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->foreign('formateur_id')
                  ->references('id') 
                  ->on('formateurs')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dureeformations');
    }
}
