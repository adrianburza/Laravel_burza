@extends('layout')
@section('content')
    <style>
        .gJyUFZ {
            padding: 0 0 0 16px;
            height: 50px;
            width: 100%;
            background-color: #2185C5;
        }

        .eqRKgt {
            padding: 9px 16px;
            display: inline-block;
            font-size: 14px;
            position: relative;
            color: rgb(51, 51, 51);
        }

        .eqRKgt:hover {
            color: rgb(51, 51, 51);
        }

        .cjvDjC {
            border-bottom: 1px solid rgb(204, 204, 204);
            height: 40px;
            padding: 0px;
        }

        /*Side menu*/

        .jjbGOH {
            padding-bottom: 120px;
            height: calc(-110px + 100vh);
            overflow-y: auto;
            border-right: 1px solid rgb(195, 195, 195);
            float: left;
            width: 300px;
            background: rgb(245, 245, 245);
        }

        .kYsThk.active {
            background-color: rgb(228, 228, 228);
            font-weight: bold;
        }

        .listing__sc-139m3p9-0.kYsThk:hover {
            background-color: rgb(228, 228, 228);
        }

        .kYsThk {
            padding: 18px 15px;
            cursor: pointer;
            display: block;
        }

        .ldqHkV {
            padding: 18px 15px;
        }

        .ldmNXu {
            display: inline-block;
            font-size: 18px;
            color: rgb(51, 51, 51);
        }

        .cbLdwc {
            display: inline-block;
            padding-left: 24px;
            font-size: 18px;
            color: rgb(204, 204, 204);
        }

        .kiBmPC {
            display: inline-block;
            font-size: 18px;
            color: rgb(51, 51, 51);
        }


        svg:not(:root).svg-inline--fa {
            overflow: visible;
        }

        .svg-inline--fa.fa-w-16 {
            width: 1em;
        }

        svg:not(:root) {
            overflow: hidden;
        }

        .jFmeMZ {
            color: rgb(60, 118, 61);
            padding-right: 10px;
            font-size: 24px;
            height: 20px;
        }

        .cNBVRu {
            position: fixed;
            bottom: 0px;
            left: -1px;
            width: 300px;
            padding: 20px 15px;
            text-align: left;
            background-color: rgb(245, 245, 245);
        }

        .gCVSLC {
            padding: 12px;
            background-color: rgb(204, 204, 204);
            color: rgb(119, 119, 119);
            text-align: center;
        }

        .listing__sc-139m3p9-0.kYsThk.active {
            text-decoration: none;
        }




        /*OBSAH STRANKY*/
        .scrollable-div {
            overflow-y: auto;
            overflow-x: hidden;
            height: calc(100vh - 110px);
        }

        .center-container {
            position: relative;
            float: left;
            width: 640px;
            background-color: #fff;
            min-height: calc(100vh - 110px);
            padding: 40px 40px 0 40px;
        }

        .header-desktop {
            font-size: 25px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 7px;
            margin-bottom: 30px;
        }

        .text-muted {
            color: #777;
        }

        b,
        optgroup,
        strong {
            font-weight: 700;
        }

        .component-margin-large {
            margin: 0 0 20px 0;
        }

        .label-header-desktop {
            margin-bottom: 10px;
            font-size: 20px;
        }

        /*ComboBox*/
        .fbkr-select.arrow {
            padding: 0 25px 0 12px;
        }

        .fbkr-select.gray {
            border: 1px solid #ccc;
        }

        .fbkr-select.arrow,
        .style-guide input.arrow,
        .style-guide select.arrow {
            background-image: url(data:image/svg+xml;utf8;base64,PHN2ZyBmaWxsPScjNzc3Nzc3OycgaGVpZ2h0PScyNCcgdmlld0JveD0nMCAwIDI0IDI0JyB3aWR0aD0nMzAnIHhtbG5zPSdodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2Zyc+PHBhdGggZD0nTTcgMTBsNSA1IDUtNXonLz48cGF0aCBkPSdNMCAwaDI0djI0SDB6JyBmaWxsPSdub25lJy8+PC9zdmc+);
            background-repeat: no-repeat;
            background-position: right;
        }

        .fbkr-select {
            -moz-appearance: none;
            -webkit-appearance: none;
            height: 44px;
            padding: 0 12px;
            font-size: 14px;
            background-color: #fff;
            outline: 0;
            border: none;
            box-shadow: none;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
        }


        /*CheckBox*/
        .icwIWU {
            display: flex;
            flex-flow: column wrap;
        }

        .iBfvwL {
            padding: 10px 0px;
            width: 100%;
        }

        .eiuMvt {
            flex: 0 0 auto;
            padding: 9px;
            overflow: visible;
            position: relative;
            font-size: 24px;
            text-align: center;
            transition: background-color 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            border-radius: 50%;
        }

        .kTJfR {
            align-items: center;
            display: flex;
        }


        /*multi checkbox*/
        .iBfvwL {
            padding: 10px 0px;
            width: 100%;
            cursor: pointer;
        }

        .epfQkR {
            display: flex;
        }

        .jEMZuX {
            margin: 1px 10px 1px 0px;
        }

        .checkbox-text {
            font-weight: normal;
            cursor: pointer;
        }

        /**/


        .component-margin-large {
            margin: 0 0 20px 0;
        }

        .component-margin-medium {
            font-weight: normal;
        }

        .iBfvwL {
            font-weight: normal;
        }


        /*druhy multi checkbox*/
        .iBfvwL {
            padding: 10px 0px;
            /* Odsadenie zhora a zdola */
            width: 100%;
            /* Šírka */
        }

        .epfQkR {
            display: flex;
            /* Flexbox layout */
        }

        .jEMZuX {
            margin: 1px 10px 1px 0px;
            /* Odsadenie od textu checkboxu */
        }


        /*footer*/

        .footer-container-desktop {
            position: relative;
            align-items: center;
            width: 100%;
            font-size: 18px;
            padding-bottom: 20px;
            line-height: 55px;
            height: 95px;
        }

        .footer-container-desktop {
            text-align: center;
            line-height: 45px;
            font-weight: bold;
            z-index: 1000;
            left: 0;
            bottom: 0;
            width: 100%;
        }

        .footer-container-desktop .next-desktop {
            border-radius: 3px;
            min-width: 188px;
            padding: 0px 16px;
        }

        .next-button-available {
            background-color: #f0ad4e;
            color: #fff;
            opacity: 1;
        }

        .next-button-available:hover {
            background-color: #ca9244;
        }

        /*.next-button {
                                                                                                    background-color: #f0ad4e;
                                                                                                    color: #fff;
                                                                                                    opacity: 0.7;
                                                                                                }*/

        .selectable {
            cursor: pointer;
        }

        .pull-right {
            float: right !important;
        }

        .text-center {
            text-align: center;
        }

        /*savebutton*/
        .save_button {
            border-radius: 5px;
            min-width: 120px;
            padding: 0px 16px;
            border: 2px solid white;
            color: white;
            float: left;
        }

        .save_button {
            background-color: #3fbde0;
            opacity: 1;
        }

        .save_button {
            cursor: pointer;
        }

        .save_button {
            text-align: center;
        }

        .save_button {
            text-align: center;
            line-height: 45px;
            font-weight: bold;
            left: 0;
            bottom: 0;
        }

        .save_button:hover {
            background-color: #2c7da0;
        }

        .svg-inline--fa {
            display: inline-block;
            font-size: inherit;
            height: 1em;
            overflow: visible;
            vertical-align: -0.125em;
        }

        .checkbox-input {
            width: 20px;
            height: 20px;
            align-items: center;
            display: flex;
            margin-right: 7px;
            cursor: pointer;
        }

        .fNwSVA {
            width: 20px;
            height: 20px;
            cursor: pointer;
        }

        .cbCCGQ {
            align-items: center;
            display: flex;
        }
    </style>

    <div class="captain-dashboards__sc-l574mi-0 cjvDjC webview-hidden"><a class="eqRKgt" href="/manage/listings"
            style="border-bottom-width: 2px;">Back to Listings</a>
    </div>

    @include('details.listing_menu')


    <form action="{{ route('update_basicInfo', $listing->id) }}" method="POST">
        @csrf
        <div id="scrollable-content" class="scrollable-div">
            <div class="center-container">
                <section class="pages-container-desktop" data-testid="listing-details-container">
                    <div class="text-muted header-desktop">Basic Info</div>
                    <section>
                        <div class="component-margin-large label-header-desktop"><strong>Listing Type</strong></div>
                        <div style="margin-bottom: 32px;">
                            <div class="row">
                                <div class="col-sm-6" data-testid="listing-type-select-container">
                                    <div class="component-margin-large"><label class="component-margin-medium">What type of
                                            listing do you offer?</label>
                                        <div class="selectdiv">
                                            <select name="listing_type" class="fbkr-select gray arrow">
                                                <option @if ($listing->listing_type == 'charter') selected @endif value="charter">
                                                    Charter</option>
                                                <option @if ($listing->listing_type == 'lodge') selected @endif value="lodge">
                                                    Lodge</option>
                                                <option @if ($listing->listing_type == 'outfitter') selected @endif value="outfitter">
                                                    Outfitter</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6" data-testid="listing-guest-capacity-container">
                                    <div><label class="component-margin-medium">Select Guest Capacity:</label>
                                        <div class="selectdiv">
                                            <select name="guest_capacity" class="fbkr-select gray arrow" required>
                                                <option value="" disabled=""
                                                    @if ($listing->guest_capacity == '') selected @endif>Select Guest Capacity
                                                </option>
                                                @for ($i = 1; $i <= 70; $i++)
                                                    <option @if ($listing->guest_capacity == $i) selected @endif
                                                        value="{{ $i }}">{{ $i }}
                                                        guest{{ $i > 1 ? 's' : '' }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="margin-bottom: 16px;">
                            <div style="margin-bottom: 8px;"><strong>Do you have boats available for guests?</strong></div>
                            <div data-testid="has-boat-radio-buttons-container">
                                <div class="sc-jNJNQp icwIWU"><label class="sc-GhhNo cbCCGQ"><span
                                            class="sc-fXqpFg eiuMvt"><span class="sc-jIILKH kTJfR"><span
                                                    class="sc-UpCWa jjbSlt"></span>
                                                <input name="has_boat_section" type="radio" class="sc-ZqFbI fNwSVA"
                                                    @if ($listing->boats_available == 1) checked @endif
                                                    value="1"></span></span><span class="sc-dwnOUR iBfvwL">Yes, boats
                                            for fishing are available for
                                            guests</span></label><label class="sc-GhhNo cbCCGQ"><span
                                            class="sc-fXqpFg eiuMvt"><span class="sc-jIILKH kTJfR"><span
                                                    class="sc-UpCWa KOPzU"></span>
                                                <input name="has_boat_section" type="radio" class="sc-ZqFbI fNwSVA"
                                                    @if ($listing->boats_available == 0) checked @endif
                                                    value="0"></span></span><span class="sc-dwnOUR iBfvwL">No, boats
                                            for
                                            fishing are not included</span></label></div>
                            </div>
                        </div>
                        <div style="margin-bottom: 16px;">
                            <div style="margin-bottom: 8px;"><strong>Does a professional fishing guide accompany guests
                                    during
                                    trips?</strong></div>
                            <div class="sc-jNJNQp icwIWU"><label class="sc-GhhNo cbCCGQ"><span
                                        class="sc-fXqpFg eiuMvt"><span class="sc-jIILKH kTJfR"><span
                                                class="sc-UpCWa jjbSlt"></span>
                                            <input name="guide_section" type="radio" class="sc-ZqFbI fNwSVA"
                                                @if ($listing->fishing_guide == 'included') checked @endif
                                                value="included"></span></span><span class="sc-dwnOUR iBfvwL">Yes, fishing
                                        guides accompany guests at all times</span></label><label
                                    class="sc-GhhNo cbCCGQ"><span class="sc-fXqpFg eiuMvt"><span
                                            class="sc-jIILKH kTJfR"><span class="sc-UpCWa jjbSlt"></span>
                                            <input name="guide_section" type="radio" class="sc-ZqFbI fNwSVA"
                                                @if ($listing->fishing_guide == 'optional') checked @endif
                                                value="optional"></span></span><span class="sc-dwnOUR iBfvwL">Sometimes,
                                        depending on the trip booked</span></label><label class="sc-GhhNo cbCCGQ"><span
                                        class="sc-fXqpFg eiuMvt"><span class="sc-jIILKH kTJfR"><span
                                                class="sc-UpCWa KOPzU"></span>
                                            <input name="guide_section" type="radio" class="sc-ZqFbI fNwSVA"
                                                @if ($listing->fishing_guide == 'excluded') checked @endif
                                                value="excluded"></span></span><span class="sc-dwnOUR iBfvwL">No, fishing
                                        guides
                                        do not accompany guests</span></label></div>
                        </div>
                    </section>
                    <hr>

                    <section data-testid="boat-facilities">
                        <div class="component-margin-medium label-header-desktop"><strong>Facilities</strong></div>
                        <p class="text-muted">Which of these facilities are available?</p>

                        <div class="checkbox-label">
                            <label class="checkbox-text" style="display: flex; align-items: center;">
                                <input @if (DB::table('facilities')->where('name', 'flybridge')->exists() and
                                        DB::table('facilities')->where('listing_id', $listing->id)->where('name', 'flybridge')->count() >=
                                            1) checked @endif type="checkbox"
                                    class="checkbox-input" name="boat_facilities[]" value="flybridge">Flybridge</label>
                        </div>

                        <div class="checkbox-label">
                            <label class="checkbox-text" style="display: flex; align-items: center;">
                                <input @if (DB::table('facilities')->where('name', 'toilet')->exists() and
                                        DB::table('facilities')->where('listing_id', $listing->id)->where('name', 'toilet')->count() >=
                                            1) checked @endif type="checkbox"
                                    class="checkbox-input" name="boat_facilities[]" value="toilet">Toilet</label>
                        </div>

                        <div class="checkbox-label">
                            <label class="checkbox-text" style="display: flex; align-items: center;">
                                <input @if (DB::table('facilities')->where('name', 'shower')->exists() and
                                        DB::table('facilities')->where('listing_id', $listing->id)->where('name', 'shower')->count() >=
                                            1) checked @endif type="checkbox"
                                    class="checkbox-input" name="boat_facilities[]" value="shower">Shower</label>
                        </div>

                        <div class="checkbox-label">
                            <label class="checkbox-text" style="display: flex; align-items: center;">
                                <input @if (DB::table('facilities')->where('name', 'kitchen')->exists() and
                                        DB::table('facilities')->where('listing_id', $listing->id)->where('name', 'kitchen')->count() >=
                                            1) checked @endif type="checkbox"
                                    class="checkbox-input" name="boat_facilities[]" value="kitchen">Kitchen</label>
                        </div>

                        <div class="checkbox-label">
                            <label class="checkbox-text" style="display: flex; align-items: center;">
                                <input @if (DB::table('facilities')->where('name', 'bed')->exists() and
                                        DB::table('facilities')->where('listing_id', $listing->id)->where('name', 'bed')->count() >=
                                            1) checked @endif type="checkbox"
                                    class="checkbox-input" name="boat_facilities[]" value="bed">Bed</label>
                        </div>

                        <div class="checkbox-label">
                            <label class="checkbox-text" style="display: flex; align-items: center;">
                                <input @if (DB::table('facilities')->where('name', 'wheelchair_accessible')->exists() and
                                        DB::table('facilities')->where('listing_id', $listing->id)->where('name', 'wheelchair_accessible')->count() >=
                                            1) checked @endif type="checkbox"
                                    class="checkbox-input" name="boat_facilities[]"
                                    value="wheelchair_accessible">Wheelchair Accessible</label>
                        </div>

                    </section>

                    <hr>
                    <div class="">
                        <section data-testid="boat-features">
                            <div class="component-margin-medium label-header-desktop"><strong>Features</strong></div>
                            <p class="text-muted">Tell us about any additional features.</p>

                            <div class="checkbox-label">
                                <label class="checkbox-text" style="display: flex; align-items: center;">
                                    <input @if (DB::table('features')->where('name', 'air_conditioning')->exists() and
                                            DB::table('features')->where('listing_id', $listing->id)->where('name', 'air_conditioning')->count() >=
                                                1) checked @endif type="checkbox"
                                        class="checkbox-input" name="boat_features[]" value="air_conditioning">Air
                                    Conditioning</label>
                            </div>

                            <div class="checkbox-label">
                                <label class="checkbox-text" style="display: flex; align-items: center;">
                                    <input @if (DB::table('features')->where('name', 'multimedia_system')->exists() and
                                            DB::table('features')->where('listing_id', $listing->id)->where('name', 'multimedia_system')->count() >=
                                                1) checked @endif type="checkbox"
                                        class="checkbox-input" name="boat_features[]"
                                        value="multimedia_system">Multimedia System</label>
                            </div>

                            <div class="checkbox-label">
                                <label class="checkbox-text" style="display: flex; align-items: center;">
                                    <input @if (DB::table('features')->where('name', 'tv')->exists() and
                                            DB::table('features')->where('listing_id', $listing->id)->where('name', 'tv')->count() >=
                                                1) checked @endif type="checkbox"
                                        class="checkbox-input" name="boat_features[]" value="tv">TV</label>
                            </div>

                            <div class="checkbox-label">
                                <label class="checkbox-text" style="display: flex; align-items: center;">
                                    <input @if (DB::table('features')->where('name', 'wireless_trolling_motor')->exists() and
                                            DB::table('features')->where('listing_id', $listing->id)->where('name', 'wireless_trolling_motor')->count() >=
                                                1) checked @endif type="checkbox"
                                        class="checkbox-input" name="boat_features[]"
                                        value="wireless_trolling_motor">Wireless Trolling Motor</label>
                            </div>

                            <div class="checkbox-label">
                                <label class="checkbox-text" style="display: flex; align-items: center;">
                                    <input @if (DB::table('features')->where('name', 'refrigerator')->exists() and
                                            DB::table('features')->where('listing_id', $listing->id)->where('name', 'refrigerator')->count() >=
                                                1) checked @endif type="checkbox"
                                        class="checkbox-input" name="boat_features[]"
                                        value="refrigerator">Refrigerator</label>
                            </div>

                            <div class="checkbox-label">
                                <label class="checkbox-text" style="display: flex; align-items: center;">
                                    <input @if (DB::table('features')->where('name', 'ice_box')->exists() and
                                            DB::table('features')->where('listing_id', $listing->id)->where('name', 'ice_box')->count() >=
                                                1) checked @endif type="checkbox"
                                        class="checkbox-input" name="boat_features[]" value="ice_box">Ice-Box</label>
                            </div>

                        </section>
                    </div>
                </section>
                <div class="listing__sc-qdm6vt-3 jeHyJy text-muted footer-container-desktop">
                    <hr>
                    <button id="submitBtn" type="submit" class="save_button">Save</button>
    </form>
    <div data-testid="next-step-btn" class="pull-right text-center next-desktop selectable next-button-available"
        onclick="window.location.href = 'photosVideos'">Next</div>
    </div>
    </div>
    </div>
@endsection
