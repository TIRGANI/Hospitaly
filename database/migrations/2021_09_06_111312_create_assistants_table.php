<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssistantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assistants', function (Blueprint $table) {
            $table->id();
            $table->string('role')->nullable();
            $table->string('validation')->nullable();
            $table->unsignedBigInteger('medecin_id')->nullable();
            $table->foreign('medecin_id')->references('id')->on('users');
            $table->unsignedBigInteger('assistant_id')->nullable();
            $table->foreign('assistant_id')->references('id')->on('users');
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
        Schema::dropIfExists('assistants');
    }
}
