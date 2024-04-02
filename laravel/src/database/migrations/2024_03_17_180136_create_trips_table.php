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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("listing_id");
            $table->foreign("listing_id")->references("id")->on("listings");
            $table->string("name");
            $table->text("description");
            $table->string("type")->default("Day Trip");
            $table->integer("duration_h")->default(8);
            $table->integer("duration_d")->default(2);
            $table->string("accommodation")->default("Liveboard");
            $table->date("seasonal_trip_from")->nullable();
            $table->date("seasonal_trip_to")->nullable();
            $table->boolean("shared_trip")->nullable()->default(0);
            $table->string("trip_model")->default("Per Group");
            $table->integer("price_per_trip");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
