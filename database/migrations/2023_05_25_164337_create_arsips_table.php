<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arsips', function (Blueprint $table) {
            $table->id();
            $table->string('No', 10);
            $table->date('Tanggal');
            $table->text('Perihal');
            $table->string('No_Rak', 10);
            $table->text('Foto');
            $table->foreignId('kantor_id')->nullable()->constrained('kantors')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('bidang_id')->nullable()->constrained('bidangs')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('kategori_arsip_id')->constrained('kategori_arsips')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('arsips');
    }
};
