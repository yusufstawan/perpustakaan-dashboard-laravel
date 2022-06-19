<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBukuIdToGenreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('genre', function (Blueprint $table) {
            $table->unsignedBigInteger('buku_id');

            $table->foreign('buku_id')->references('id')->on('buku');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('genre', function (Blueprint $table) {
            $table->dropForeign(['buku_id']);
            $table->dropColumn('buku_id');
        });
    }
}
