<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBukuIdUserIdToKomentarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('komentar', function (Blueprint $table) {
            $table->unsignedBigInteger('buku_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('buku_id')->references('id')->on('buku');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('komentar', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['buku_id']);
            $table->dropColumn('user_id');
            $table->dropColumn('buku_id');
        });
    }
}
