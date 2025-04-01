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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            
            $table->string('company', 255);
            $table->string('departure_station', 255);
            $table->string('arrival_station', 255);
            $table->timestamp('departure_time');
            $table->timestamp('arrival_time');
            $table->string('train_code', 255);
            $table->integer('total_carriages');
            $table->boolean('is_on_time');
            $table->boolean('is_canceled');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};