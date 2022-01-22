<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('role_id');
            $table->string('region_ville')->nullable();
            $table->string('date_naissence')->nullable();
            $table->string('Licence')->nullable();
            $table->string('Licence_N')->nullable();
            $table->boolean('Getsion_RDV')->nullable();
            $table->boolean('Gestion_Calendrier')->nullable();
            $table->boolean('personnaliser_ajonda')->nullable();
            $table->boolean('gestion_Assistants')->nullable();
            $table->boolean('asistant')->nullable();
            $table->string('medcecin_id')->nullable();
            $table->string('duree')->nullable();
            $table->string('Adresse')->nullable();
            $table->string('Langue')->nullable();
            $table->string('tarif')->nullable();
            $table->string('phone')->nullable();
            $table->string('CIN')->nullable();
            $table->string('start_horaire')->nullable();
            $table->string('end_horaire')->nullable();
            $table->unsignedBigInteger('specialite_id')->nullable();
            $table->foreign('specialite_id')->references('id')->on('specialitees');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
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
        Schema::dropIfExists('users');
    }
}
