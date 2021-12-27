<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippings', function (Blueprint $table) {
           
                $table->id();
                $table->string('nama_status_pickup');
                $table->integer('kode_status_pickup');
                $table->longText('informasi_status_pickup');
                $table->enum('tipe_status',['Shuttle','Forward','Transit','Release','Proses','Tertunda','Kembali','Selesai']);
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
        Schema::dropIfExists('shippings');
    }
}
