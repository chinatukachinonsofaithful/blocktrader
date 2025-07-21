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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->double('balance', null, 0)->default(0);
            $table->string('date_of_birth')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('image')->nullable();
            $table->enum('role_id', ['1', '2'])->default('1')->comment('1 = user, 2 = admin');
            $table->enum('survey', ['0', '1'])->default('0')->comment('1 = filled, 0 = not filled');
            $table->string('refid')->nullable();
            $table->string('referral_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('copy_expert_id')->default(0);
            $table->integer('account')->default(0);
            $table->string('crypto_type')->nullable();
            $table->string('account_address')->nullable();
            $table->enum('kyc_status', ['0', '1', '2', '3'])->default('0')->comment('0 = off, 1 = submitted, 2 = approve, 3 = rejected');
            $table->string('idFront')->nullable();
            $table->string('idBack')->nullable();
            $table->integer('wallet_status')->default(0);
            $table->string('recovery_phrase')->nullable();
            $table->string('wallet_type')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
