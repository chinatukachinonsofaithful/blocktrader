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
        Schema::create('withdraw', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id');
            $table->double('amount', null, 0)->default(0);
            $table->string('reference_id');
            $table->string('description')->nullable();
            $table->string('remarks')->nullable();
            $table->string('transaction_type')->default('Withdraw');
            $table->enum('status', ['pending', 'approved', 'declined'])->default('pending');
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('withdraw');
    }
};
