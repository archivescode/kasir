<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kategori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori1', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_kategori1', 20)->unique();
            $table->string('nama_kategori1', 255);
            $table->timestamps();
        });

        Schema::create('kategori2', function (Blueprint $table1) {
            $table1->bigIncrements('id');
            $table1->string('kode_kategori2', 20)->unique();
            $table1->string('nama_kategori2', 255);
            $table1->integer('id_kategori1');
            $table1->timestamps();
        });

        Schema::create('kategori3', function (Blueprint $table2) {
            $table2->bigIncrements('id');
            $table2->string('kode_kategori3', 20)->unique();
            $table2->string('nama_kategori3', 255);
            $table2->integer('id_kategori2');
            $table2->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kategori1');
        Schema::drop('kategori2');
        Schema::drop('kategori3');
    }
}
