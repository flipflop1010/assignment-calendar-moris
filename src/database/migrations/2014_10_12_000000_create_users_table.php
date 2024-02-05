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
            $table->string('user_reference_id')->nullable();
            $table->string('calendar_link')->nullable();
            $table->integer('status')->default(0);
            $table->string('email', 128);
            $table->string('password')->nullable();
            $table->string('salutation')->nullable();
            $table->string('first_name', 128);
            $table->string('last_name', 128)->nullable();
            $table->string('mobile', 20)->nullable();
            $table->string('timezone')->nullable();
            $table->string('theme')->nullable();
            $table->string('google_id')->nullable();
            $table->string('microsoft_id')->nullable();
            $table->string('display_name')->nullable();
            $table->string('user_slug', 256)->nullable();
            $table->string('profile_image')->nullable();
            $table->string('gender', 10)->nullable();
            $table->uuid('designation')->nullable();
            $table->uuid('department')->nullable();
            $table->uuid('mobile_country_id')->nullable();
            $table->string('industry')->nullable();
            $table->string('address_id')->nullable();
            $table->uuid('created_by')->nullable();
            $table->uuid('updated_by')->nullable();
            $table->string('two_step_auth')->nullable();
            $table->string('two_step_auth_mobile_country')->nullable();
            $table->string('two_step_auth_mobile')->nullable();
            $table->timestamp('password_changed_at')->nullable();
            $table->uuid('client_id')->nullable();
            $table->timestamp('pin_changed_at')->nullable();
            $table->string('profile_pin')->nullable();
            $table->string('remember_token', 100)->nullable();
            $table->timestamps();
            $table->tinyInteger('mobile_verified')->default(0);
            $table->tinyInteger('email_verified')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('mobile_verified_at')->nullable();
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
