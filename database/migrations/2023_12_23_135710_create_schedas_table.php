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
        Schema::create('schedas', function (Blueprint $table) {
            $table->id();

            $table->integer(column: 'Forza')->nullable();
            $table->integer(column: 'Destrezza')->nullable();
            $table->integer(column: 'Costituzione')->nullable();
            $table->integer(column: 'Intelligenza')->nullable();
            $table->integer(column: 'Saggezza')->nullable();
            $table->integer(column: 'Carisma')->nullable();

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
        Schema::dropIfExists('schedas');
    }
};
