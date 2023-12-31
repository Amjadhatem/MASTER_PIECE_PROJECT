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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone_number');
            $table->date('date');
            $table->string('time');
            $table->foreignId('barber_id')->constrained('barbers');
            $table->text('additional_information')->nullable();
            $table->timestamps();

            $table->unique(['date', 'time', 'barber_id']);
            $table->index('barber_id');


            // $table->foreign('barbers_id')->references('id')->on('barbers')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
