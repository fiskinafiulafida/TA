<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBukuAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_buku_admin', function (Blueprint $table) {
            $table->bigIncrements('id_buku');
            $table->string('penerbit', 40);
            $table->string('judul_buku', 40);
            $table->string('isbn', 100);
            $table->integer('kategori');
            $table->integer('ketersediaan');
            $table->string('cover_img', 50);
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
        Schema::dropIfExists('table_buku_admin');
    }
}
