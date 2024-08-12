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
        Schema::create('data_ibus', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('id_user');
            $table->string('nama');
            $table->string('alamat')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('telp')->nullable();
            $table->enum('status', ['masih hidup', 'meninggal']);
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->timestamps();

            // Menambahkan foreign key constraint
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_ibu');
    }
};
