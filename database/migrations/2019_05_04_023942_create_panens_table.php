<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePanensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('est_biaya');
            $table->integer('est_keuntungan');
            $table->integer('est_produksi');
            $table->integer('est_durasi');
            $table->string('desc');
            $table->integer('status');
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
        //
        Schema::dropIfExists('panen');
    }
}
