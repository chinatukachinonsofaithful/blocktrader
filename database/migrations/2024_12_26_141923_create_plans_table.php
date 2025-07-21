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
        Schema::create('plans', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name');
            $table->double('amount', null, 0)->default(0);
            $table->double('min', null, 0)->default(0);
            $table->double('max', null, 0)->default(0);
            $table->double('roi', null, 0)->default(0);
            $table->string('duration')->nullable();
            $table->enum('capital', ['yes', 'no'])->default('yes');
            $table->double('commission', null, 0)->default(0);
            $table->enum('terms', ['short', 'long']);
            $table->enum('status', ['active', 'disabled'])->default('active');
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
