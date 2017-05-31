<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengajuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps('created_at')
            $table->timestamps('updated_at');
            $table->string('NIK')->unique();
            $table->string('nama');
            $table->string('kelamin');
            $table->string('tempat_lahir');
            $table->date('Tgl_Lahir');
            $table->integer('Anak_Ke');
            $table->integer('Jlh_Sdr');
            $table->string('Alamat_Anak');
            $table->string('Wilayah_Pembinaan');
            $table->string('Jenjang_Pendidikan');
            $table->string('Kelas/Smt');
            $table->string('Nilai_IPK');
            $table->string('Nama_Sklh_Kampus');
            $table->string('Alamat_Sekolah');
            $table->string('Keberadaan_Ortu');
            $table->string('Nama_Ayah');
            $table->string('Pend_Ayah');
            $table->boolean('Ayah_Serumah',1);
            $table->string('Alamat_Ayah');
            $table->string('Nama_Ibu');
            $table->string('Pend_Ibu');
            $table->boolean('Ibu_Serumah',1);
            $table->string('Alamat_Ibu');
            $table->string('Nama_Wali');
            $table->string('Pend_Wali');
            $table->boolean('Wali_Serumah',1);
            $table->string('Alamat_Wali');
            $table->string('Deskripsi_Diri');
            $table->string('Photo')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pengajuan');
    }
}
