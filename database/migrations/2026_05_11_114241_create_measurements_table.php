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
        Schema::create('measurements', function (Blueprint $table) {
            $table->id();

            // basic vitals
            $table
                ->decimal('weight', 5, 1)
                ->nullable()
                ->comment('Weight in kg');
            $table->unsignedSmallInteger('systolic')->nullable();
            $table->unsignedSmallInteger('diastolic')->nullable();
            $table
                ->unsignedSmallInteger('heart_rate')
                ->nullable()
                ->comment('Beats per minute');
            $table
                ->decimal('temperature', 4, 1)
                ->nullable()
                ->comment('Celsius');
            $table
                ->unsignedTinyInteger('spo2')
                ->nullable()
                ->comment('Oxygen saturation %');

            $table->text('notes')->nullable();
            $table->timestamp('measured_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('measurements');
    }
};
