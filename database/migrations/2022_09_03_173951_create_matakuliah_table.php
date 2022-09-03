<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatakuliahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matakuliah', function (Blueprint $table) {
            $table->bigIncrements("id_matkul");
            $table->char('nim', 12);
            $table->string('nama_mhs', 100);
            $table->string('kode_matkul', 12);
            $table->string('matkul', 50);
            $table->string('sks', 10);
            $table->bigInteger('id_mhs')->unsigned();
            $table->foreign('id_mhs')->references('id_mhs')->on('mahasiswa')->onDelete('cascade');
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
        Schema::dropIfExists('matakuliah');
    }
}
