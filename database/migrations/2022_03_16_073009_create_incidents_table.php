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
            $table->string('titre')->nullable(); 
            $table->string('sujet')->nullable(); 
            $table->string('description')->nullable();
            $table->string('num_contrat_maintenance')->nullable(); 
            $table->string('num_serie')->nullable(); 
            $table->string('type_prestation')->nullable(); 
            $table->string('issue_duration')->nullable();
            $table->string('raison_issue_duration')->nullable();
            $table->string('raison_assignation')->nullable();
            $table->string('assignation')->nullable();
            
            $table->enum('type', ['ouvert', 'fermé', ])->default('ouvert');
            $table->string('ask_to_close')->nullable();
            $table->string('note')->nullable();
          
            $table->enum('statut', [
                'resolu-probleme-resolu', 
            'resolu-informations-fournies',
             'actif-en-cours', 
             'actif-suspendue', 
             'actif-en-attente-de-details',
             'actif-recherche-en-cours',
             'inactif-en-cours',
             'inactif-abandonne',
             
             ])->default('actif-en-cours');
  
            $table->enum('priorite', ['haute', 'basse', 'moyenne'])->default('moyenne');
            $table->enum('nature', ['incident', 'intervention', 'autre'])->default('incident');
            $table->string('origine')->nullable(); 
            $table->string('client')->nullable(); 
            $table->string('num_tel_contact')->nullable(); 
            $table->string('contact_email')->nullable(); 
            $table->string('nom_contact')->nullable();
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
