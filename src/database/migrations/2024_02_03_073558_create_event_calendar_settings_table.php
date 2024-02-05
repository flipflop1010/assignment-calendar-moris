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
        Schema::create('event_calendar_settings', function (Blueprint $table) {
            $table->id();
            $table->uuid('user_id')->nullable();
            $table->uuid('event_id')->nullable();
            $table->enum('type', ['default', 'event', 'mycalendar'])->nullable();
            $table->string('meeting_address')->nullable();
            $table->string('location')->nullable();
            $table->string('calendar_type')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->string('language')->nullable();
            $table->string('timezone')->nullable();
            $table->integer('timeslot_interval')->nullable();
            $table->tinyInteger('all_day')->nullable();
            $table->tinyInteger('customize')->default(0);
            $table->tinyInteger('reserve_time')->nullable();
            $table->timestamp('start_date_time')->nullable();
            $table->timestamp('end_date_time')->nullable();
            $table->enum('end_type', ['never', 'date', 'count'])->nullable();
            $table->integer('end_count')->nullable();
            $table->string('heading_1')->nullable();
            $table->string('heading_2')->nullable();
            $table->string('heading_3')->nullable();
            $table->string('desktop_placeholder')->nullable();
            $table->string('mobile_placeholder')->nullable();
            $table->string('calendar_link')->nullable();
            $table->string('calendar_profile_image')->nullable();
            $table->string('brand_logo')->nullable();
            $table->string('after_booking')->nullable();
            $table->string('redirect_url')->nullable();
            $table->string('privacy_policy_url')->nullable();
            $table->text('privacy_policy')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_calendar_settings');
    }
};
