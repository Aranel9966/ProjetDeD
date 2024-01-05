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
            $table->unsignedBigInteger('razze_id')->nullable()->after('id');

            $table->foreign('razze_id')
                ->references('id')
                ->on('razzes')
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
            $table->dropForeign('personaggios_razze_id_foreign');
            $table->dropColumn('razze_id');
        });
    }
};
