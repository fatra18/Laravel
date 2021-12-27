<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branchs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_cabang');
            $table->string('kode_cabang');
            $table->string('telpon_cabang');
            $table->string('email_cabang');
            $table->longText('alamat_cabang');
            $table->foreignId('provinces_id');
            $table->foreignId('regencies_id');
            $table->foreignId('districts_id');
            $table->foreignId('villages_id');
            $table->enum('jenis_kantor',['Pusat','Cabang']);
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
        Schema::dropIfExists('branchs');
    }
}
