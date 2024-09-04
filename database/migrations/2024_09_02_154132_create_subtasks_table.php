<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('subtasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('task_id')->constrained()->onDelete('cascade'); // Reference to the main task
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade'); // Optional: Link subtask to a user, made nullable if it's optional
            $table->string('title', 255);
            $table->text('description')->nullable();
            $table->enum('priority', ['low', 'medium', 'high'])->default('low');
            $table->foreignId('category_id')->nullable()->constrained()->onDelete('set null'); // Category of the subtask
            $table->foreignId('status_id')->nullable()->constrained()->onDelete('set null'); // Made status_id nullable to fix the issue
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subtasks');
    }
};
