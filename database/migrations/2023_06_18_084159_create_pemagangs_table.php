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
        Schema::create('pemagangs', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('mentor_id')->constrained()->cascadeOnDelete();
            $table->string('mentor')->nullable();

            $table->string('nama')->unique();
            $table->date('tanggallahir')->nullable();
            $table->string('jeniskelamin')->nullable();
            $table->string('alamat')->nullable();
            $table->string('nohp')->nullable();
            $table->string('asalinstansi')->nullable();
            $table->string('jurusan')->nullable();
            $table->integer('semesterKelas')->nullable();
            $table->date('mulaimagang')->nullable();
            $table->date('selesaimagang')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemagangs');
    }
};
