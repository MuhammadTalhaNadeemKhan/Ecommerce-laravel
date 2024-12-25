<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('userdata', function (Blueprint $table) {
            $table->id('custumer_id');
            $table->string('name',20);
            $table->string('email',100)->unique();
            $table->boolean('status')->nullable()->default(false);
            $table->string('password',8);
            $table->rememberToken();
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userdata');
    }
};
