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
        Schema::table('personaggios', function (Blueprint $table) {
            $table->unsignedBigInteger('scheda_id')->nullable()->after('id');

            $table->foreign('scheda_id')
                ->references('id')
                ->on('schedas')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('personaggios', function (Blueprint $table) {
            $table->dropForeign('personaggios_scheda_id_foreign');
            $table->dropColumn('scheda_id');
        });
    }
};
