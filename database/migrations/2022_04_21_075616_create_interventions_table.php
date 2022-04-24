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
        Schema::create('interventions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('num_serie_machine');
            $table->string('nom_machine');
            $table->string('issue_duration')->nullable();
            $table->string('raison_issue_duration')->nullable();
            $table->string('raison_assignation')->nullable();
            $table->string('assignation')->nullable();
            $table->string('type')->nullable();
            $table->string('statut')->nullable();
            $table->string('priorite')->nullable();
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
        Schema::dropIfExists('interventions');
    }
};
