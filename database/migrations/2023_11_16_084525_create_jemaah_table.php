<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jemaah', function (Blueprint $table) {
            $table->increments('id_jemaah');
            $table->string("nama_lengkap", 150);
            $table->string("email", 150)->unique();
            $table->text("tempat_lahir")->nullable();
            $table->date("tanggal_lahir")->nullable();
            $table->integer("nik")->nullable();
            $table->enum("jenis_kelamin", ["Laki-Laki", "Perempuan"])->nullable();

            $table->text("pekerjaan")->nullable();

            $table->text("alamat")->nullable();
            $table->integer("rt_rw")->nullable();
            $table->text("kelurahan_desa")->nullable();
            $table->text("kecamatan")->nullable();
            $table->text("kabupaten")->nullable();
            $table->integer("kodepos")->nullable();
            $table->text("berkas_ktp_ortu")->nullable();
            $table->text("berkas_kk")->nullable();
            $table->text("berkas_akta_lahir")->nullable();
            $table->text("berkas_hasil_tes_ketunaan")->nullable();
            $table->text("berkas_pas_foto")->nullable();
            $table->text("password");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jemaah');
    }
};
