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
        Schema::create('revenue_details', function (Blueprint $table) {
            $table->id();
            $table->text('userid');
            $table->string('name');
            $table->text('date');
            $table->text('description')->nullable();
            $table->float('amount',8,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('revenue_details');
    }
};
