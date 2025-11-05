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
        Schema::create('eval', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('title'); // Judul evaluasi
            $table->text('description')->nullable(); // Deskripsi evaluasi
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Relasi ke tabel users
            $table->integer('score')->default(0); // Skor evaluasi
            $table->timestamp('evaluated_at')->nullable(); // Waktu evaluasi dilakukan
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eval');
    }
};
