<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('nama_jenis_barang');
            $table->string('jenis_kemasan');
            $table->integer('panjang_maksimal');
            $table->integer('lebar_maksimal');
            $table->integer('tinggi_maksimal');
            $table->enum('satuan_panjang',['centimeter','meter']);
            $table->integer('berat_maksimal');
            $table->foreignId('units_id');
            $table->enum('status',['Active','Inactive'])->default('Active');
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
        Schema::dropIfExists('items');
    }
}
