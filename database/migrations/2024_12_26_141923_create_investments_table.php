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
        Schema::create('investments', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id');
            $table->integer('plan_id');
            $table->integer('copy_expert_id')->default(0);
            $table->double('amount', null, 0)->default(0);
            $table->string('total_return')->nullable();
            $table->string('duration')->nullable();
            $table->string('roi')->nullable();
            $table->string('reference_id');
            $table->string('transaction_type')->default('Investment');
            $table->enum('status', ['completed', 'processing', 'cancelled', 'active'])->nullable()->default('active');
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investments');
    }
};
