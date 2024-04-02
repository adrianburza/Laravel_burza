<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        "listing_id",
        "name",
        "description",
        "type",
        "duration_h",
        "duration_d",
        "accommodation",
        "seasonal_trip_from",
        "seasonal_trip_to",
        "shared_trip",
        "trip_model",
        "price_per_trip",
    ];

    public function listing()
    {
        return $this->belongsTo(Listing::class);
    }

    public function tripFishingTechnique () {
        return $this-> hasMany(TripFishingTechnique::class);
    }

    public function tripFishingLocation () {
        return $this-> hasMany(TripFishingLocation::class);
    }
}
