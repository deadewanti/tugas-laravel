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
        Schema::create('jadwalpelajarans', function (Blueprint $table) {
            $table->id();
            $table->integer("kelas_id");
            $table->integer("mata_pelajaran");
            $table->string("hari",20);
            $table->integer("jam_mulai");
            $table->integer("jam_selesai");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwalpelajarans');
    }
};
