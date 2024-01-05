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
        Schema::table('schedas', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->default(1)->after('id');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('schedas', function (Blueprint $table) {
            $table->dropForeign('schedas_user_id_foring');
            $table->dropColumn('user_id');
        });
    }
};
