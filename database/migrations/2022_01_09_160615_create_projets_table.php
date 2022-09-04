<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titre');
            $table->string('url')->default("projetX");
            $table->boolean('image')->default(1);
            $table->string('tags');            
            $table->string('logiciels');
            $table->string('date')->default("2022");
            $table->string('mission', 1000);
            $table->string('services', 1000);
            $table->string('demarche', 1000)->nullable();                      
            $table->string('video')->nullable();                      
            $table->string('decouvrir')->nullable(); 
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
        Schema::dropIfExists('projets');
    }
}
