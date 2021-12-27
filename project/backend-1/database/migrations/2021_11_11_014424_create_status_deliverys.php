<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusDeliverys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_deliverys', function (Blueprint $table) {
            $table->id();
            $table->string('nama_status_pengiriman');
            $table->string('kode_status_pengiriman');
            $table->string('informasi_status_pengiriman');
            $table->enum('tipe_status',['shuttle','forward','transit','release','proses','tertunda','kembali','selesai']);
            $table->enum('status',['active','inactive'])->default('active');
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
        Schema::dropIfExists('status_deliverys');
    }
}
