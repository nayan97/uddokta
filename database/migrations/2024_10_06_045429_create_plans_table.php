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
            $table->id();
            $table->string('name');
            $table->string('sub_title');
            $table->decimal('price', 8, 2);
            $table->text('image');
            $table->string('pack_title');
            $table->integer('analytics_campaigns');
            $table->integer('keywords');
            $table->integer('social_media_reviews');
            $table->integer('free_optimizations');
            $table->boolean('support_247');
            $table->string('offer_tag');
            $table->timestamps();
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
