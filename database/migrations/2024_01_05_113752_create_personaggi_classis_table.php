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
        Schema::create('personaggi_classis', function (Blueprint $table) {
            $table->unsignedBigInteger('personaggio_id');
            $table->unsignedBigInteger('classe_id');

            $table->foreign('personaggio_id')->references('id')->on('personaggios')->onDelete('cascade');
            $table->foreign('classe_id')->references('id')->on('classis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personaggi_classis');
    }
};
