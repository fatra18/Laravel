<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historys', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_dibuat');
            $table->string('nama_pengirim');
            $table->string('telepon_pengirim');
            $table->string('email_pengirim');
            $table->longText('alamat_pengirim');
            $table->foreignId('provinces_id');
            $table->foreignId('regencies_id');
            $table->foreignId('districts_id');
            $table->longText('catatan_pengirim');
            $table->longText('nama_penerima');
            $table->string('telepon_penerima');
            $table->string('email_penerima');
            $table->longText('alamat_penerima');



            $table->string('tipe_pelanggan');
            $table->integer('nomor_tracking');
            $table->string('nama_jenis_barang');
            $table->string('dimensi');
            $table->string('dimensi_aktual');
            $table->foreignId('deliverys_id');
            $table->foreignId('payments_id');
            $table->foreignId('rates_id');
            $table->string('tarif_aktual');
            $table->string('pembagian_keuntungan(%)');
            $table->string('pembagian_keuntungan(rupiah)');
            $table->date('tanggal_angkut/pickup_permintaan_pelanggan');
            $table->date('tanggal_angkut/pickup');
            $table->string('catatan_angkut/pickup');
            $table->foreignId('users_id');
            $table->string('diserahkan_oleh');
            $table->foreignId('shippings_id');
            $table->date('tanggal_batal/angkut_pickup');
            $table->date('tanggal_pengiriman/delivery');
            $table->date('tanggal_pengiriman/tertunda');
            $table->longText('catatan_pengiriman/tertunda');
            $table->date('tanggal_pengiriman_kembali_ke_pengirim');
            $table->longText('catatan_pengiriman_kembali_ke_pengirim');
            $table->date('tanggal_pengiriman_selesai');
            $table->longText('catatan_pengiriman_selesai');
            









        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historys');
    }
}
