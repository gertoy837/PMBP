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
        Schema::create('santri', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nik');
            $table->bigInteger('nisn');
            $table->string('nama_lengkap');
            $table->string('nama_panggil');
            $table->string('tmp_lahir');
            $table->date('tgl_lahir');
            $table->string('no_hp');
            $table->string('kk');
            $table->string('foto');
            $table->string('ijazah');
            $table->string('rapot');
            $table->unsignedBigInteger('gel_id');
            $table->foreign('gel_id')->references('id')->on('gelombang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('santri');
    }
};
