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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('period_id')->constrained('periods')->onDelete('cascade');
            $table->foreignId('division_id')->constrained('divisions')->onDelete('cascade');
            $table->string('role'); // cth: 'Koordinator', 'Anggota PSDM'
            $table->string('name'); // cth: 'Lorenzo Calvin'
            $table->string('photo_primary'); // path foto formal
            $table->string('photo_secondary'); // path foto pose
            $table->json('tupoksi')->nullable(); // format JSON
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};