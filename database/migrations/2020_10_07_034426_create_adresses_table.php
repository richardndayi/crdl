<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresses', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_apprenant');
        
            $table->string('province');
            $table->string('commune');
            $table->string('zone');
            $table->string('quartier');
            $table->string('rue');
            $table->string('maison');
            $table->timestamps();
            $table->foreign('id_apprenant')
                  ->references('id') 
                  ->on('inscrits')
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
        Schema::dropIfExists('adresses');
    }
}
