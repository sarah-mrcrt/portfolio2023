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
            $table->string('slug')->unique();
            $table->string('date')->default(date("Y"));
            $table->boolean('nbr_image')->default(1);
            $table->string('tags');            
            $table->string('logiciels');
            $table->string('expertises', 1000);
            $table->string('mission', 1000);
            $table->string('demarche', 1000)->nullable();                      
            $table->string('video_url')->nullable();                      
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
