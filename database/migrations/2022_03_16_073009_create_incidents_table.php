<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidents', function (Blueprint $table) {
            $table->id();  
            $table->string('name');
            $table->string('description');
            $table->string('num_serie_machine');
            $table->string('nom_machine');
            $table->string('issue_duration');
            $table->string('raison_issue_duration'); 
            $table->string('raison_assignation'); 
            $table->string('assignation'); 
            $table->string('type');   
            $table->string('statut'); 
            $table->string('priorite'); 
            $table->foreignId('user_id'); 
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
        Schema::dropIfExists('incidents');
    }
};
