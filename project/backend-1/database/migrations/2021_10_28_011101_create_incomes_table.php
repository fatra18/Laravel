<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_dibuat');
            $table->integer('nomor_tracking');
            $table->string('nama_pengirim');
            $table->string('telepon_pengirim');
            $table->foreignId('districts_id');
            $table->foreignId('regencies_id');
            $table->foreignId('provinces_id');
            $table->longText('alamat_pengirim');
            $table->string('nama_penerima');
            $table->integer('telepon_penerima');
            // kecamatan penerima
            // kota penerima
            // provinsi penerima
            $table->longText('alamat_penerima');
            $table->foreignId('deliverys_id');
            $table->foreignId('payments_id');
            $table->integer('tarif_aktual');
            $table->date('tanggal_angkut_pickup');
            $table->foreignId('users_id');
            // nama kurir
            $table->integer('pembagian_keuntungan(%)');
            $table->integer('pembagian_keuntungan(rupiah)');
            $table->date('tanggal_pengiriman_selesai');
            // status
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
        Schema::dropIfExists('incomes');
    }
}
