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
        Schema::create('proposal_pkm', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('bidang_fokus');
            $table->string('skema');
            $table->string('target_sdgs');
            $table->text('pendahuluan');
            $table->text('permasalahan');
            $table->text('metode');
            $table->text('gambaran_ipteks');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('proposal_pkm');
    }
};
