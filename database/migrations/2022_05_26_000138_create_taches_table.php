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
        Schema::create('taches', function (Blueprint $table) {
            $table->id();
            $table->string('sujet')->nullable();
            $table->string('compte')->nullable();
            $table->dateTime('date_echeance')->nullable();
            $table->dateTime('date_prochaine_echeance')->nullable();
            $table->dateTime('date_contrat')->nullable();
            $table->string('code_contrat')->nullable();
            $table->string('contrat_maintenance')->nullable();
            $table->dateTime('date_appel')->nullable();
            $table->dateTime('date_tache')->nullable();
            $table->string('type')->nullable();
            $table->string('note')->nullable();
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
        Schema::dropIfExists('taches');
    }
};
