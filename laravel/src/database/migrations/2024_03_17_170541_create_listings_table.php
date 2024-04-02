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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->foreign("user_id")->references("id")->on("users");
            $table->string("city");
            $table->string("country")->default("Croatia");
            $table->string("listing_type")->nullable();
            $table->integer("guest_capacity")->nullable();
            $table->boolean("boats_available")->nullable();
            $table->string("fishing_guide")->nullable();
            $table->string("street_address")->nullable();
            $table->string("postal_code")->nullable();
            $table->string("title")->nullable();
            $table->text("description")->nullable();
            $table->boolean("instant_book")->default(1);
            $table->integer("calendar_availability")->default(0);
            $table->integer("booking_window")->default(0);
            $table->date("booking_from")->nullable();
            $table->date("booking_to")->nullable();
            $table->string("week_start")->default("Monday");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
