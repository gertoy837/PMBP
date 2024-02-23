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
        Schema::create('wali_santri', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ayah', 100);
            $table->string('tmp_lahir_a', 100);
            $table->date('tgl_lahir_a');
            $table->string('no_hp_a');
            $table->string('pkj_a');
            $table->string('phs_a');
            $table->string('nama_ibu', 100);
            $table->string('tmp_lahir_i', 100);
            $table->date('tgl_lahir_i');
            $table->string('no_hp_i');
            $table->string('pkj_i');
            $table->string('phs_i');
            $table->string('alamat');
            $table->unsignedBigInteger('santri_id');
            $table->foreign('santri_id')->references('id')->on('santri');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wali_santri');
    }
};
