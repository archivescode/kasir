<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_barang', 50)->unique();
            $table->string('nama_barang', 255);
            $table->string('kemasan', 100)->nullable();
            $table->float('hpp', 17,2);
            $table->float('margin', 5,2);
            $table->float('harga_jual', 17,2);
            $table->float('diskon', 5,2);
            $table->float('harga_konsumen', 17,2);
            $table->integer('kode_sup');
            $table->text('deskripsi')->nullable();
            $table->text('gambar');
            $table->text('kategori');
            $table->text('merek');
            $table->enum('kondisi', ['baru', 'bekas']);
            $table->float('berat', 17,2);
            $table->float('stok_minimal', 17,2);
            $table->text('barcode')->nullable();
            $table->text('qrcode')->nullable();
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
        Schema::drop('barang');
    }
}
