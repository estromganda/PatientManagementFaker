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
        Schema::create('Consultation', function (Blueprint $table) {
            $table->id();
            $table->string("objet");
            $table->date("date");
            $table->longText("note")->nullable();
            $table->foreignId("patientId")->references("id")->on("Patient");
            $table->foreignId("doctorId")->references("id")->on("Doctor");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Consultation');
    }
};
