<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiayasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biayas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('donasi_id');
            $table->integer('pendidikan');
            $table->integer('pangang');
            $table->integer('sandang');
            $table->integer('perlengkapan');
            $table->integer('administrasi');
            $table->integer('listrik');
            $table->integer('kesehatan');
            $table->integer('transportasi');
            $table->integer('bisyarohUstadz');
            $table->integer('uangSaku');
            $table->integer('hariRaya');
            $table->integer('thr');
            $table->integer('lainLain');
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
        Schema::dropIfExists('biayas');
    }
}
