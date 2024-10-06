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
      
        Schema::table('testimonials', function(Blueprint $table){
            $table->text('video_thum')->nullable()->after('message');
            $table->text('video_link')->nullable()->after('video_thum');
         });
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
        Schema::table('testimonials', function(Blueprint $table){
         
            $table->dropColumn('video_thum');
            $table->dropColumn('video_link');
    
        });
    
    }
};
