<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTransaksiMember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_transaksi_member', function (Blueprint $table) {
            $table->bigIncrements('id_transaksi');
            $table->unsignedBigInteger('id')->nullable();
            $table->unsignedBigInteger('id_buku')->nullable();
            $table->unsignedBigInteger('id_status')->nullable();
            $table->string('judul_buku');
            $table->string('isbn');
            $table->string('penerbit');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->timestamps();
            $table->foreign('id')->references('id')->on('users');
            $table->foreign('id_buku')->references('id_buku')->on('table_buku_admin');
            $table->foreign('id_status')->references('id_status')->on('table_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_transaksi_member');
    }
}
