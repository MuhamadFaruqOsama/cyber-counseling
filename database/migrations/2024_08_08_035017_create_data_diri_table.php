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
        Schema::create('data_diris', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->string('nama');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('nim');
            $table->string('telp')->nullable();
            $table->string('jurusan');
            $table->string('fakultas');
            $table->integer('semester');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('bukti_identitas')->nullable();
            $table->timestamps();

            // Menambahkan foreign key
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_diri');
    }
};
