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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->text('about');
            $table->text('address');
            $table->string('email');
            $table->string('phone');
            $table->string('website');
            $table->string('website_link');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('github');
            $table->text('copyright');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footers');
    }
};
