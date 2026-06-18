<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kittens', function (Blueprint $table) {
            $table->id();

            $table->foreignId('litter_id')
                ->nullable()
                ->constrained('litters')
                ->nullOnDelete();

            $table->string('name');
            $table->string('slug')->unique();

            // male / female / unknown
            $table->string('sex')->default('unknown');

            $table->string('coat')->nullable();

            // available / observation / reserved / stays
            $table->string('status')->default('observation');

            $table->text('description')->nullable();

            $table->string('main_image')->nullable();

            $table->boolean('is_visible')->default(true);
            $table->unsignedInteger('sort_order')->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kittens');
    }
};
