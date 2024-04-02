<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Listing;
use App\Models\Facility;
use App\Models\Feature;
use App\Models\Fish;
use App\Models\FishingLocation;
use App\Models\FishingTechnique;
use App\Models\IncludedInPrice;
use App\Models\Policy;
use App\Models\Trip;
use App\Models\TripFish;
use App\Models\TripFishingLocation;
use App\Models\TripFishingTechnique;
use App\Models\Media;
use Illuminate\Support\Facades\Storage;

class ListingController extends Controller
{
    public function create(Request $request)
    {
        $city = $request->city;
        $user_id = Auth::id();
        $listing = new Listing;
        $listing->city = $city;
        $listing->user_id = $user_id;
        $listing->save();
        $listing_id = $listing->id;
        return redirect()->route("basicInfo", $listing_id);
    }

    public function update_basicInfo(Request $request, $listing_id)
    {
        $listing = Listing::find($listing_id);
        $listing_type = $request->listing_type;
        $listing->listing_type = $listing_type;

        $guest_capacity = $request->guest_capacity;
        $listing->guest_capacity = $guest_capacity;

        $has_boat_section = $request->has_boat_section;
        $listing->boats_available = $has_boat_section;

        $guide_section = $request->guide_section;
        $listing->fishing_guide = $guide_section;

        for ($i = 0; $i <= 5; $i++) {
            if (isset($request->boat_facilities[$i])) {
                $facilityName = $request->boat_facilities[$i];

                $existingFacility = Facility::where('listing_id', $listing_id)
                    ->where('name', $facilityName)
                    ->first();

                if ($existingFacility) {
                    $existingFacility->delete();
                } else {
                    $facility = new Facility;
                    $facility->listing_id = $listing_id;
                    $facility->name = $facilityName;
                    $facility->save();
                }
            }
        }

        for ($i = 0; $i <= 5; $i++) {
            if (isset($request->boat_features[$i])) {
                $featureName = $request->boat_features[$i];

                $existingFeature = Feature::where('listing_id', $listing_id)
                    ->where('name', $featureName)
                    ->first();

                if ($existingFeature) {
                    $existingFeature->delete();
                } else {
                    $feature = new Feature();
                    $feature->listing_id = $listing_id;
                    $feature->name = $featureName;
                    $feature->save();
                }
            }
        }


        $listing->save();
        return redirect()->route("basicInfo", $listing_id);
    }

    public function update_fishing(Request $request, $listing_id)
    {
 
        for ($i = 0; $i < $request->fishNumber; $i++) {
            $fish = new Fish;
            $fishName = $request->fishes[$i];
            $fish->name = $fishName;
            $fish->listing_id = $listing_id;
            $fish->save();
        }

        if (!isset($request->fishing_locations) || count($request->fishing_locations) === 0) {
            return redirect()->back()->withInput()->withErrors(['fishing_locations' => 'At least one fishing location must be selected.']);
        }

        for ($i = 0; $i < 9; $i++) {
            if (isset($request->fishing_locations[$i])) {
                $fishingLocationName = $request->fishing_locations[$i];

                $existingFishingLocation = FishingLocation::where('listing_id', $listing_id)
                    ->where('name', $fishingLocationName)
                    ->first();

                if ($existingFishingLocation) {
                    $existingFishingLocation->delete();
                } else {
                    $fishLoc = new FishingLocation();
                    $fishLoc->listing_id = $listing_id;
                    $fishLoc->name = $fishingLocationName;
                    $fishLoc->save();
                }
            }
        }


        for ($i = 0; $i < 16; $i++) {
            if (isset($request->fishing_technique[$i])) {
                $fishingTechniqueName = $request->fishing_technique[$i];
                $existingFishingTechnique = FishingTechnique::where('listing_id', $listing_id)
                    ->where('name', $fishingTechniqueName)
                    ->first();

                if ($existingFishingTechnique) {
                    $existingFishingTechnique->delete();
                } else {
                    $fishTech = new FishingTechnique();
                    $fishTech->listing_id = $listing_id;
                    $fishTech->name = $fishingTechniqueName;
                    $fishTech->save();
                }
            }
        }


        for ($i = 0; $i < 8; $i++) {
            if (isset($request->policies[$i])) {
                $policyName = $request->policies[$i];
                $existingPolicy = Policy::where('listing_id', $listing_id)
                    ->where('name', $policyName)
                    ->first();

                if ($existingPolicy) {
                    $existingPolicy->delete();
                } else {
                    $policy = new Policy();
                    $policy->listing_id = $listing_id;
                    $policy->name = $policyName;
                    $policy->save();
                }
            }
        }


        for ($i = 0; $i < 8; $i++) {
            if (isset($request->included_in_price[$i])) {
                $priceName = $request->included_in_price[$i];
                $existingPrice = IncludedInPrice::where('listing_id', $listing_id)
                    ->where('name', $priceName)
                    ->first();

                if ($existingPrice) {
                    $existingPrice->delete();
                } else {
                    $price = new IncludedInPrice();
                    $price->listing_id = $listing_id;
                    $price->name = $priceName;
                    $price->save();
                }
            }
        }



        return redirect()->route("fishing", $listing_id);
    }

    public function update_meetingPoint(Request $request, $listing_id)
    {
        $listing = Listing::findOrFail($listing_id);

        $streetAddress = $request->streetAddress;
        $listing->street_address = $streetAddress;

        $zipCode = $request->zip;
        $listing->postal_code = $zipCode;

        $city = $request->city;
        $listing->city = $city;

        $listing->save();

        return redirect()->route("meetingPoint", $listing_id);
    }




    public function create_newFishingTrip(Request $request, $listing_id)
    {
        $trip = new Trip();
        $trip->listing_id = $listing_id;

        $tripName = $request->tripName;
        $trip->name = $tripName;

        $description = $request->description;
        $trip->description = $description;

        $price = $request->price;
        $trip->price_per_trip = $price;

        $type = $request->tripType;
        $trip->type = $type;

        $dur_h = $request->duration_hours;
        $trip->duration_h = $dur_h;

        $dur_d = $request->duration_days;
        $trip->duration_d = $dur_d;

        $sharedTrip = $request->onoffswitch;
        $trip->shared_trip = $sharedTrip;

        $accom = $request->accom;
        $trip->accommodation = $accom;

        $tripModel = $request->tripModel;
        $trip->trip_model = $tripModel;

        $tripFrom = $request->tripFrom;
        $trip->seasonal_trip_from = $tripFrom;

        $tripTo = $request->tripTo;
        $trip->seasonal_trip_to = $tripTo;

        $trip->save();


        for ($i = 0; $i < 9; $i++) {
            if (isset($request->trip_fishing_locations[$i])) {
                $tripFishingLocationName = $request->trip_fishing_locations[$i];

                $existingTripFishingLocation = TripFishingLocation::where('trip_id', $trip->id)
                    ->where('name', $tripFishingLocationName)
                    ->first();

                if ($existingTripFishingLocation) {
                    $existingTripFishingLocation->delete();
                } else {
                    $tripFishLoc = new TripFishingLocation();
                    $tripFishLoc->trip_id = $trip->id;
                    $tripFishLoc->name = $tripFishingLocationName;
                    $tripFishLoc->save();
                }
            }
        }

        for ($i = 0; $i < 16; $i++) {
            if (isset($request->trip_fishing_technique[$i])) {
                $tripFishingTechniqueName = $request->trip_fishing_technique[$i];

                $existingTripFishingTechnique = TripFishingTechnique::where('trip_id', $trip->id)
                    ->where('name', $tripFishingTechniqueName)
                    ->first();

                if ($existingTripFishingTechnique) {
                    $existingTripFishingTechnique->delete();
                } else {
                    $tripFishTech = new TripFishingTechnique();
                    $tripFishTech->trip_id = $trip->id;
                    $tripFishTech->name = $tripFishingTechniqueName;
                    $tripFishTech->save();
                }
            }
        }

        for ($i = 0; $i < $request->tripFishNumber; $i++) {
            $tripFish = new TripFish();
            $tripFishName = $request->fish_species[$i];
            $tripFish->name = $tripFishName;
            $tripFish->trip_id = $trip->id;
            $tripFish->save();
        }

        return redirect()->route("trips", $listing_id);
    }



    public function tripDelete(Request $request, $listing_id)
    {
        $trip = Trip::find($request->trip_id);

        TripFishingLocation::where('trip_id', $trip->id)->delete();
        TripFishingTechnique::where('trip_id', $trip->id)->delete();
        TripFish::where('trip_id', $trip->id)->delete();

        $trip->delete();

        return redirect()->route("trips", $listing_id);
    }

    public function store_media(Request $request, $listing_id)
    {
       
        if ($request->hasFile('files')) {
         
            $files = $request->file('files');

           
            foreach ($files as $file) {
                
                $mediaPath = $file->store('media', 'public');

               
                Media::create([
                    'path' => $mediaPath,
                    'listing_id' => $listing_id
                ]);
            }

           
            return redirect()->route("photosVideos", $listing_id);
        }
    }



    public function update_description(Request $request, $listing_id)
    {

        $listing = Listing::findOrFail($listing_id);

        $title = $request->title;
        $listing->title = $title;

        $description = $request->description;
        $listing->description = $description;

        $listing->save();

        return redirect()->route("description", $listing_id);
    }

    public function update_availability(Request $request, $listing_id)
    {

        $listing = Listing::findOrFail($listing_id);

        if ($request->has("instantBook")) {
            $instantBook = $request->instantBook;
            $listing->instant_book = $instantBook;
        }

        if ($request->has("advance_notice")) {
            $calendar = $request->advance_notice;
            $listing->calendar_availability = $calendar;
        }

        if ($request->has("booking_window")) {
            $bookingWindow = $request->booking_window;
            $listing->booking_window = $bookingWindow;
        }

        if ($request->has("week_start")) {
            $weekStart = $request->week_start;
            $listing->week_start = $weekStart;
        }
        $listing->save();

        return redirect()->route("availability", $listing_id);
    }
}
