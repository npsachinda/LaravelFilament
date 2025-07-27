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
        Schema::create('type_assignments', function (Blueprint $table) {
            $table->id();

            $table->string('type_assignments_type', 255)->nullable();
            $table->string('type_assignments_id')->nullable();
            $table->string('my_bonus_field', 255)->nullable();

            $table->foreignId('type_id')->constrained('types')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->string('api_unique_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_assignments');
    }
};
