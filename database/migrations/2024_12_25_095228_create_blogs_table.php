<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();  // Auto-increment primary key
            $table->string('title');
            $table->text('content');
            $table->string('image')->nullable();  // Image file path (nullable)
            $table->string('tags')->nullable();  // Tags (nullable)
            $table->date('post_date')->nullable();  // Post date (nullable)
            $table->timestamps();  // Created at and updated at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('blogs');
    }
};