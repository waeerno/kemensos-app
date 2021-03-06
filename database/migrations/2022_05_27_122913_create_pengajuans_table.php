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
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sesi_id')->constrained()->onDelete('cascade');
            $table->foreignId('lansia_id')->constrained()->onDelete('cascade');
            $table->integer('status_pengajuan')->comment('1 belum di proses, 2  pendamping, 3 pimpinan');
            $table->string('nama_usaha');
            $table->integer('keputusan')->nullable()->comment('1 diterima, 2 ditolak');
            $table->integer('progres')->nullable()->comment('null = null, 1 = onprogres, 2 = finish');
            $table->text('ktp');
            $table->text('kk');
            $table->text('penghasilan');
            $table->text('pesan')->nullable();
            $table->date('diterima')->nullable();
            $table->date('ditolak')->nullable();

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
        Schema::dropIfExists('pengajuans');
    }
};
