<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('daftar_pengusul', function (Blueprint $table) {
            $table->id();
            $table->text('nama_pengusul');
            $table->text('nidn_nuptk');
            $table->text('program_studi');
            $table->foreignId('proposal_pkm_id')->constrained('proposal_pkm')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('daftar_pengusul');
    }
};
