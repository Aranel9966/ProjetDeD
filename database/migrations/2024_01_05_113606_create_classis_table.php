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
        Schema::create('classis', function (Blueprint $table) {
            $table->id();

            $table->string('lv', 100)->nullable();
            $table->string('classe', 100)->nullable();
            $table->string('caratteristiche', 100)->nullable();
            $table->string('dadovita', 100)->nullable();

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
        Schema::dropIfExists('classis');
    }
};
