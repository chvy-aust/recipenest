<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role', 20)->default('user')->comment('user,chef');
            $table->string('image_path', 100)->default('/images/profiles/');
            $table->string('image_name', 100)->default('default.jpg');
            $table->string('short_description', 200)->default('New Author');
            $table->text('full_description')->nullable();
            $table->string('social_media_1', 300)->default('https://www.facebook.com/');
            $table->string('social_media_2', 300)->default('https://x.com/?lang=en');
            $table->string('social_media_3', 300)->default('https://www.instagram.com/');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('user_columns');
    }
};
