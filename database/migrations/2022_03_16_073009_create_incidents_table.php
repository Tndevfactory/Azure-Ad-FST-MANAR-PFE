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
            $table->string('name')->nullable();
            $table->string('sujet')->nullable();
            $table->string('description')->nullable();
            $table->string('num_contrat')->nullable();
            $table->string('num_serie_machine')->nullable();
            $table->string('type_prestation')->nullable();
            $table->string('issue_duration')->nullable();
            $table->string('raison_issue_duration')->nullable();
            $table->string('raison_assignation')->nullable();
            $table->string('assignation')->nullable();
            $table->string('type')->nullable();
            $table->string('statut')->nullable();
            $table->string('priorite')->nullable();
            $table->enum('nature', ['incident', 'intervention', 'autre'])->default('incident');
            $table->string('origine')->nullable();
            $table->string('client')->nullable();
            $table->string('contact_tel')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_name')->nullable();
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
