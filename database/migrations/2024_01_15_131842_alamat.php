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
        // Schema::create('alamat', function (Blueprint $table) {
        //     $table->id('id_alamat');
        //     $table->string('alamat_lengkap', 150);
        //     $table->string('rt_rw', 20)->unique();
        //     $table->text('kelurahan_desa')->nullable();
        //     $table->text('kecamatan')->nullable();
        //     $table->text('kabupaten')->nullable();
        //     $table->integer('kodepos')->nullable();
        //     $table->timestamps();
        // });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alamat');
    }
};
