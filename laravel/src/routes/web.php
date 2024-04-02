<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ListingController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Middleware\RedirectIfNotAuthenticated;
use App\Models\Facility;
use App\Models\Feature;
use App\Models\Listing;
use App\Models\Media;
use App\Models\FishingLocation;
use App\Models\FishingTechnique;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('mainPage');
})->name('hlavnastranka');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::post('/manage/listings/create', [ListingController::class, 'create'])->name('create_listing');

Route::post('/manage/listings/{listing_id}/basicInfo/update', [ListingController::class, 'update_basicInfo'])->name('update_basicInfo');

Route::post('/manage/listings/{listing_id}/fishing/update', [ListingController::class, 'update_fishing'])->name('update_fishing');

Route::post('/manage/listings/{listing_id}/meetingPoint/update', [ListingController::class, 'update_meetingPoint'])->name('update_meetingPoint');

Route::post('/manage/listings/{listing_id}/description/update', [ListingController::class, 'update_description'])->name('update_description');

Route::post('/manage/listings/{listing_id}/availability/update', [ListingController::class, 'update_availability'])->name('update_availability');

Route::post('/manage/listings/{listing_id}/photosVideos/store', [ListingController::class, 'store_media'])->name('store_media');

Route::post('/manage/listings/{listing_id}/newFishingTrip/create', [ListingController::class, 'create_newFishingTrip'])->name('create_newFishingTrip');

Route::post('/manage/listings/{listing_id}/trips/delete', [ListingController::class, 'tripDelete'])->name('tripDelete');


//middleware pre neprihlaseného uživateľa 
Route::middleware(RedirectIfNotAuthenticated::class)->group(function () {

    Route::get('/manage/listings', function () {
        return view('manage.listings');
    })->name('listings');

    Route::get('/manage/notifications', function () {
        return view('manage.notifications');
    })->name('notifications');


    Route::get('/manage/listings/{listing_id}/availability', function ($listing_id) {

        $listing = Listing::find($listing_id);

        $basicInfo = true;
        $photosVideos = true;
        $trips = true;
        $fishing = true;
        $meetingPoint = true;
        $description = true;
        $availability = true;

        if ($listing->guest_capacity == null) $basicInfo = false;
        if ($listing->media->count() < 5) $photosVideos = false;
        if ($listing->trips->count() < 1) $trips = false;
        if (
            $listing->fishes != null && $listing->fishes()->count() < 5 ||
            $listing->fishing_locations != null && $listing->fishing_locations()->count() < 1 ||
            $listing->fishing_technique != null && $listing->fishing_technique()->count() < 1
        ) {
            $fishing = false;
        }
        if ($listing->city == null || $listing->street_address == null || $listing->postal_code == null) $meetingPoint = false;
        if ($listing->title == null || $listing->description == null) $description = false;
        if ($listing->calendar_availability == null || $listing->booking_window == null || $listing->week_start == null) $availability = false;

        return view('details.availability', [
            'listing' => Listing::find($listing_id),
            "basicInfo" => $basicInfo,
            "photosVideos" => $photosVideos,
            "trips" => $trips,
            "fishing" => $fishing,
            "meetingPoint" =>  $meetingPoint,
            "description" => $description,
            "availability" =>  $availability,
        ]);
    })->name('availability');



    Route::get('/manage/listings/{listing_id}/basicInfo', function ($listing_id) {
        $listing = Listing::find($listing_id);

        $basicInfo = true;
        $photosVideos = true;
        $trips = true;
        $fishing = true;
        $meetingPoint = true;
        $description = true;
        $availability = true;

        if ($listing->guest_capacity == null) $basicInfo = false;
        if ($listing->media->count() < 5) $photosVideos = false;
        if ($listing->trips->count() < 1) $trips = false;
        if (
            $listing->fishes != null && $listing->fishes()->count() < 5 ||
            $listing->fishing_locations != null && $listing->fishing_locations()->count() < 1 ||
            $listing->fishing_technique != null && $listing->fishing_technique()->count() < 1
        ) {
            $fishing = false;
        }
        if ($listing->city == null || $listing->street_address == null || $listing->postal_code == null) $meetingPoint = false;
        if ($listing->title == null || $listing->description == null) $description = false;
        if ($listing->calendar_availability == null || $listing->booking_window == null || $listing->week_start == null) $availability = false;

        return view('details.basicInfo', [
            'listing' => Listing::find($listing_id),
            "facility" => Facility::all(),
            "feature" => Feature::all(),
            "basicInfo" => $basicInfo,
            "photosVideos" => $photosVideos,
            "trips" => $trips,
            "fishing" => $fishing,
            "meetingPoint" =>  $meetingPoint,
            "description" => $description,
            "availability" =>  $availability,
        ]);
    })->name('basicInfo');



    Route::get('/manage/listings/{listing_id}/description', function ($listing_id) {

        $listing = Listing::find($listing_id);

        $basicInfo = true;
        $photosVideos = true;
        $trips = true;
        $fishing = true;
        $meetingPoint = true;
        $description = true;
        $availability = true;

        if ($listing->guest_capacity == null) $basicInfo = false;
        if ($listing->media->count() < 5) $photosVideos = false;
        if ($listing->trips->count() < 1) $trips = false;
        if (
            $listing->fishes != null && $listing->fishes()->count() < 5 ||
            $listing->fishing_locations != null && $listing->fishing_locations()->count() < 1 ||
            $listing->fishing_technique != null && $listing->fishing_technique()->count() < 1
        ) {
            $fishing = false;
        }
        if ($listing->city == null || $listing->street_address == null || $listing->postal_code == null) $meetingPoint = false;
        if ($listing->title == null || $listing->description == null) $description = false;
        if ($listing->calendar_availability == null || $listing->booking_window == null || $listing->week_start == null) $availability = false;

        return view('details.description', [
            'listing' => Listing::find($listing_id),
            "basicInfo" => $basicInfo,
            "photosVideos" => $photosVideos,
            "trips" => $trips,
            "fishing" => $fishing,
            "meetingPoint" =>  $meetingPoint,
            "description" => $description,
            "availability" =>  $availability,
        ]);
    })->name('description');



    Route::get('/manage/listings/{listing_id}/fishing', function ($listing_id) {
        $listing = Listing::find($listing_id);

        $basicInfo = true;
        $photosVideos = true;
        $trips = true;
        $fishing = true;
        $meetingPoint = true;
        $description = true;
        $availability = true;

        if ($listing->guest_capacity == null) $basicInfo = false;
        if ($listing->media->count() < 5) $photosVideos = false;
        if ($listing->trips->count() < 1) $trips = false;
        if (
            $listing->fishes != null && $listing->fishes()->count() < 5 ||
            $listing->fishing_locations != null && $listing->fishing_locations()->count() < 1 ||
            $listing->fishing_technique != null && $listing->fishing_technique()->count() < 1
        ) {
            $fishing = false;
        }
        if ($listing->city == null || $listing->street_address == null || $listing->postal_code == null) $meetingPoint = false;
        if ($listing->title == null || $listing->description == null) $description = false;
        if ($listing->calendar_availability == null || $listing->booking_window == null || $listing->week_start == null) $availability = false;


        return view('details.fishing', [
            'listing' => Listing::find($listing_id),
            "basicInfo" => $basicInfo,
            "photosVideos" => $photosVideos,
            "trips" => $trips,
            "fishing" => $fishing,
            "meetingPoint" =>  $meetingPoint,
            "description" => $description,
            "availability" =>  $availability,
        ]);
    })->name('fishing');



    Route::get('/manage/listings/{listing_id}/meetingPoint', function ($listing_id) {

        $listing = Listing::find($listing_id);

        $basicInfo = true;
        $photosVideos = true;
        $trips = true;
        $fishing = true;
        $meetingPoint = true;
        $description = true;
        $availability = true;

        if ($listing->guest_capacity == null) $basicInfo = false;
        if ($listing->media->count() < 5) $photosVideos = false;
        if ($listing->trips->count() < 1) $trips = false;
        if (
            $listing->fishes != null && $listing->fishes()->count() < 5 ||
            $listing->fishing_locations != null && $listing->fishing_locations()->count() < 1 ||
            $listing->fishing_technique != null && $listing->fishing_technique()->count() < 1
        ) {
            $fishing = false;
        }
        if ($listing->city == null || $listing->street_address == null || $listing->postal_code == null) $meetingPoint = false;
        if ($listing->title == null || $listing->description == null) $description = false;
        if ($listing->calendar_availability == null || $listing->booking_window == null || $listing->week_start == null) $availability = false;

        return view('details.meetingPoint', [
            'listing' => Listing::find($listing_id),
            "basicInfo" => $basicInfo,
            "photosVideos" => $photosVideos,
            "trips" => $trips,
            "fishing" => $fishing,
            "meetingPoint" =>  $meetingPoint,
            "description" => $description,
            "availability" =>  $availability,
        ]);
    })->name('meetingPoint');



    Route::get('/manage/listings/{listing_id}/photosVideos', function ($listing_id) {

        $listing = Listing::find($listing_id);
        $basicInfo = true;
        $photosVideos = true;
        $trips = true;
        $fishing = true;
        $meetingPoint = true;
        $description = true;
        $availability = true;

        if ($listing->guest_capacity == null) $basicInfo = false;
        if ($listing->media->count() < 5) $photosVideos = false;
        if ($listing->trips->count() < 1) $trips = false;
        if (
            $listing->fishes != null && $listing->fishes()->count() < 5 ||
            $listing->fishing_locations != null && $listing->fishing_locations()->count() < 1 ||
            $listing->fishing_technique != null && $listing->fishing_technique()->count() < 1
        ) {
            $fishing = false;
        }
        if ($listing->city == null || $listing->street_address == null || $listing->postal_code == null) $meetingPoint = false;
        if ($listing->title == null || $listing->description == null) $description = false;
        if ($listing->calendar_availability == null || $listing->booking_window == null || $listing->week_start == null) $availability = false;

        return view('details.photosVideos', [
            "basicInfo" => $basicInfo,
            "photosVideos" => $photosVideos,
            'listing' => Listing::find($listing_id),
            "media" => Media::where("listing_id", $listing_id)->get(),
            "trips" => $trips,
            "fishing" => $fishing,
            "meetingPoint" =>  $meetingPoint,
            "description" => $description,
            "availability" =>  $availability,
        ]);
    })->name('photosVideos');



    Route::get('/manage/listings/{listing_id}/terms', function ($listing_id) {

        $listing = Listing::find($listing_id);

        $basicInfo = true;
        $photosVideos = true;
        $trips = true;
        $fishing = true;
        $meetingPoint = true;
        $description = true;
        $availability = true;

        if ($listing->guest_capacity == null) $basicInfo = false;
        if ($listing->media->count() < 5) $photosVideos = false;
        if ($listing->trips->count() < 1) $trips = false;
        if (
            $listing->fishes != null && $listing->fishes()->count() < 5 ||
            $listing->fishing_locations != null && $listing->fishing_locations()->count() < 1 ||
            $listing->fishing_technique != null && $listing->fishing_technique()->count() < 1
        ) {
            $fishing = false;
        }
        if ($listing->city == null || $listing->street_address == null || $listing->postal_code == null) $meetingPoint = false;
        if ($listing->title == null || $listing->description == null) $description = false;
        if ($listing->calendar_availability == null || $listing->booking_window == null || $listing->week_start == null) $availability = false;

        return view('details.terms', [
            "listing" => $listing,
            "basicInfo" => $basicInfo,
            "photosVideos" => $photosVideos,
            "trips" => $trips,
            "fishing" => $fishing,
            "meetingPoint" =>  $meetingPoint,
            "description" => $description,
            "availability" =>  $availability,
        ]);
    })->name('terms');



    Route::get('/manage/listings/{listing_id}/trips', function ($listing_id) {

        $listing = Listing::find($listing_id);

        $basicInfo = true;
        $photosVideos = true;
        $trips = true;
        $fishing = true;
        $meetingPoint = true;
        $description = true;
        $availability = true;

        if ($listing->guest_capacity == null) $basicInfo = false;
        if ($listing->media->count() < 5) $photosVideos = false;
        if ($listing->trips->count() < 1) $trips = false;
        if (
            $listing->fishes != null && $listing->fishes()->count() < 5 ||
            $listing->fishing_locations != null && $listing->fishing_locations()->count() < 1 ||
            $listing->fishing_technique != null && $listing->fishing_technique()->count() < 1
        ) {
            $fishing = false;
        }
        if ($listing->city == null || $listing->street_address == null || $listing->postal_code == null) $meetingPoint = false;
        if ($listing->title == null || $listing->description == null) $description = false;
        if ($listing->calendar_availability == null || $listing->booking_window == null || $listing->week_start == null) $availability = false;

        return view('details.trips', [
            'listing' => Listing::find($listing_id),
            "basicInfo" => $basicInfo,
            "photosVideos" => $photosVideos,
            "trips" => $trips,
            "fishing" => $fishing,
            "meetingPoint" =>  $meetingPoint,
            "description" => $description,
            "availability" =>  $availability,
        ]);
    })->name('trips');



    Route::get('/manage/listings/{trip_id}/trips/new', function ($listing_id) {

        $listing = Listing::find($listing_id);

        $basicInfo = true;
        $photosVideos = true;
        $trips = true;
        $fishing = true;
        $meetingPoint = true;
        $description = true;
        $availability = true;

        if ($listing->guest_capacity == null) $basicInfo = false;
        if ($listing->media->count() < 5) $photosVideos = false;
        if ($listing->trips->count() < 1) $trips = false;
        if (
            $listing->fishes != null && $listing->fishes()->count() < 5 ||
            $listing->fishing_locations != null && $listing->fishing_locations()->count() < 1 ||
            $listing->fishing_technique != null && $listing->fishing_technique()->count() < 1
        ) {
            $fishing = false;
        }
        if ($listing->city == null || $listing->street_address == null || $listing->postal_code == null) $meetingPoint = false;
        if ($listing->title == null || $listing->description == null) $description = false;
        if ($listing->calendar_availability == null || $listing->booking_window == null || $listing->week_start == null) $availability = false;

        return view('details.newFishingTrip', [
            'listing' => Listing::find($listing_id),
            "basicInfo" => $basicInfo,
            "photosVideos" => $photosVideos,
            "trips" => $trips,
            "fishing" => $fishing,
            "meetingPoint" =>  $meetingPoint,
            "description" => $description,
            "availability" =>  $availability,
        ]);
    })->name('newFishingTrip');
});
