<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();  // Auto-increment primary key
            $table->string('title');  // Task title
            $table->text('description')->default(null);  // Task description (short description)
            $table->text('long_description')->nullable();  // Long description (optional)
            $table->boolean('completed')->default(false);  // Task status (completed or not)
            $table->timestamps();  // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
