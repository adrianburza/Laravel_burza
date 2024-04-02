<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
        "city",
        "country",
        "user_id",
        "listing_type",
        "guest_capacity",
        "boats_available",
        "fishing_guide",
        "street_address",
        "postal_code",
        "title",
        "description",
        "instant_book",
        "calendar_availability",
        "booking_window",
        "booking_from",
        "booking_to",
        "week_start",
    ];

    public function user() {
        return $this-> belongsTo(User::class);
    }

    public function facilities () {
        return $this-> hasMany(Facility::class);
    }

    public function features () {
        return $this-> hasMany(Feature::class);
    }

    public function fishingLocations () {
        return $this-> hasMany(FishingLocation::class);
    }

    public function fishingTechnique () {
        return $this-> hasMany(FishingTechnique::class);
    }

    public function includedInPrices () {
        return $this-> hasMany(IncludedInPrice::class);
    }

    public function policies() {
        return $this-> hasMany(Policy::class);
    }

    public function fishes() {
        return $this-> hasMany(Fish::class);
    }

    public function media() {
        return $this-> hasMany(Media::class);
    }

    public function trips() {
        return $this-> hasMany(Trip::class);
    }
}

