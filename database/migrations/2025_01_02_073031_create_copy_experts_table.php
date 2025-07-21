<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCopyExpertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('copy_experts', function (Blueprint $table) {
            $table->id();
            $table->string('profile_name'); // Name of the profile
            $table->string('image')->nullable();
            $table->text('bio')->nullable(); // Optional bio
            $table->string('specialty')->nullable(); // Area of expertise
            $table->integer('win_count')->default(0); // Number of users copying
            $table->integer('loss_count')->default(0);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('copy_experts');
    }
}
