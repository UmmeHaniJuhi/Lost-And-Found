<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->dateTime('date', $precision = 0);
            $table->boolean('urgent');
            $table->boolean('reported');
            $table->string('description');
            // $table->string('image_path');
            $table->set('location', ['Dhaka', 'Chittagong', 'Khulna']);
            $table->set('category', ['Electronics', 'Documents', 'Pet and Animals']);
            $table->set('status', ['archived', 'active']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
