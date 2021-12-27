<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sizes', function (Blueprint $table) {
            $table->id();
            $table->string('nama_jenis_ukuran');
            $table->integer('minimal_panjang_diameter');
            $table->integer('minimal_lebar');
            $table->integer('minimal_tinggi');
            $table->integer('maksimal_panjang_diameter');
            $table->integer('maksimal_lebar');
            $table->integer('maksimal_tinggi');
            $table->enum('satuan_panjang',['centimeter','meter']);
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
        Schema::dropIfExists('sizes');
    }
}
