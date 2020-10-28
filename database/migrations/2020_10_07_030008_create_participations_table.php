<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participations', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_inscrit');
            $table->unsignedBigInteger('formation_id');
            $table->string('etat_part');
            $table->float('prix_part');
            $table->timestamps();
            $table->foreign('id_inscrit')
                  ->references('id') 
                  ->on('inscrits')
                  ->onDelete('cascade');
            

            $table->foreign('formation_id')
                  ->references('id') 
                  ->on('typeformations')
                  ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participations');
    }
}
