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
        Schema::create('Treatment', function (Blueprint $table) {
            $table->id();
            $table->string("drug");
            $table->string("dose");
            $table->string("duration");
            $table->foreignId("consultationId")->references("id")->on("Consultation");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Treatment');
    }
};
