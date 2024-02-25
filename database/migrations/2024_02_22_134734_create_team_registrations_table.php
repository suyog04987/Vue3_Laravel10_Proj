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
        Schema::create('team_registrations', function (Blueprint $table) {
            $table->id();
            $table->String('clubName');
            $table->string('email');
            $table->string('address');
            $table->string('phone');
            $table->String('league');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_registrations');
    }
};
