<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('litters', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('slug')->unique();

            // current = portée actuelle
            // previous = ancienne portée
            // planned = portée prévue
            $table->string('type')->default('current');

            $table->date('birth_date')->nullable();
            $table->date('departure_date')->nullable();

            $table->string('parents')->nullable();
            $table->text('description')->nullable();

            $table->string('cover_image')->nullable();

            $table->boolean('is_active')->default(true);
            $table->unsignedInteger('sort_order')->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('litters');
    }
};
