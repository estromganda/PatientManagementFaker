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
        Schema::create('Admission', function (Blueprint $table) {
            $table->id();
            $table->foreignId("patientId")->references("id")->on("Patient");
            $table->foreignId("doctorId")->references("id")->on("Doctor");
            $table->foreignId("roomId")->references("id")->on("Room");
            $table->date("arrivalDate");
            $table->date("exitDate");
            $table->longText("report");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Admission');
    }
};
