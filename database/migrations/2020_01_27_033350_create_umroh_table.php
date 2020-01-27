<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUmrohTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('umroh', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('nomor_telp');
            $table->text('alamat');
            $table->string('email');
            $table->date('tanggal_lahir');
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
        Schema::dropIfExists('umroh');
    }
}
