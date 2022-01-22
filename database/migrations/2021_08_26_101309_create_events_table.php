<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->string('color')->nullable();
            $table->string('rendering')->nullable();
            $table->string('allDay')->nullable();
            $table->string('date_naissence')->nullable();
            $table->string('duree')->nullable();
            $table->string('Adresse')->nullable();

            $table->string('email')->nullable();
            $table->string('Caisse_Assurance_sociale')->nullable();
            $table->string('Caisse_Assurance_sociale_N')->nullable();
            $table->string('Mutuelle')->nullable();
            $table->string('Mutuelle_N')->nullable();
            $table->string('Motifs_de_consultation')->nullable();
            $table->string('Types_de_consultation')->nullable();
            $table->string('Allergie')->nullable();
            $table->string('Antécédent_médicaux')->nullable();
            $table->string('Provenance_Médecin_traitant')->nullable();
            $table->string('profession')->nullable();
            $table->string('Lien_parenter')->nullable();
            $table->string('Adresse_parenter')->nullable();
            $table->string('tel_parenter')->nullable();

            $table->string('phone')->nullable();
            $table->string('CIN')->nullable();
            $table->string('validee')->nullable();
            $table->string('RDV')->nullable();
            $table->unsignedBigInteger('medecin_id')->nullable();
            $table->foreign('medecin_id')->references('id')->on('users');
            $table->unsignedBigInteger('patient_id')->nullable();
            $table->foreign('patient_id')->references('id')->on('users');
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
        Schema::dropIfExists('events');
    }
}
