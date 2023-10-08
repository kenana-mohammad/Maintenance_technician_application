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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('city')->nullable();
            $table->string('bank')->nullable();
            $table->enum('role',['Admin','maintenance','client'])
            ->nullable()->default('maintenance');
            $table->string('bank_account')->nullable();
            $table->enum('status',['pending','Acceptance'])->default('pending');
            $table->string('location_image')->nullable();
            $table->double('location_latitude')->nullable();
            $table->double('location_longitude')->nullable();
            $table->char('api_token',60)->nullable()->unique();
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
