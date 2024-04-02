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


        /*savebutton*/
        .save_button {
            border-radius: 5px;
            min-width: 120px;
            padding: 0px 16px;
            border: 2px solid white;
            color: white;
            float: right;
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

        .component-margin-medium {
            margin: 0 0 10px 0;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group {
            width: 100%;
            display: inline-block;
            margin-right: 3.28px;
        }


        element.style {
            appearance: none;
            height: 45px;
            font-size: 14px;
            width: 100%;
            border-width: 1px;
            margin: auto;
            border-style: solid;
            border-radius: 3px;
            border-color: rgb(195, 195, 195);
            z-index: 0;
        }

        .input-group .form-control:last-child,
        .input-group-addon:last-child,
        .input-group-btn:first-child>.btn-group:not(:first-child)>.btn,
        .input-group-btn:first-child>.btn:not(:first-child),
        .input-group-btn:last-child>.btn,
        .input-group-btn:last-child>.btn-group>.btn,
        .input-group-btn:last-child>.dropdown-toggle {
            border-bottom-left-radius: 0;
            border-top-left-radius: 0;
        }

        .input-group .form-control:first-child,
        .input-group-addon:first-child,
        .input-group-btn:first-child>.btn,
        .input-group-btn:first-child>.btn-group>.btn,
        .input-group-btn:first-child>.dropdown-toggle,
        .input-group-btn:last-child>.btn-group:not(:last-child)>.btn,
        .input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle) {
            border-bottom-right-radius: 0;
            border-top-right-radius: 0;
        }

        .input-group .form-control,
        .input-group-addon,
        .input-group-btn {
            display: table-cell;
        }

        .input-group .form-control {
            position: relative;
            z-index: 2;
            float: left;
            width: 100%;
            margin-bottom: 0;
        }

        .text-component input {
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
        }

        .form-control {
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            background-color: #fff;
            border: 1px solid #ccc;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        }

        .form-control,
        output {
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            display: block;
        }

        .characters-left-desktop {
            font-size: 16px;
        }

        .help-block {
            display: block;
            margin-bottom: 10px;
            color: #737373;
        }

        .btn-block+.btn-block,
        .help-block {
            margin-top: 5px;
        }

        .text-right {
            text-align: right;
        }

        .component-margin-medium {
            margin: 0 0 10px 0;
        }

        .textarea-field {
            resize: none !important;
            font-size: 16px;
            padding: 10px 12px;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
        }

        .form-control {
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            background-color: #fff;
            border: 1px solid #ccc;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        }

        hr {
            margin-top: 20px;
            margin-bottom: 20px;
            border: 0;
            border-top: 1px solid #ccc;
            box-sizing: content-box;
            height: 0;
        }

        .component-margin-medium {
            margin: 0 0 10px 0;
        }

        .display-half {
            width: 50%;
        }

        .mobile-true-false-component .mobileSelectedRow {
            float: none;
            display: table-cell;
            vertical-align: middle;
        }

        .mobile-true-false-component .selected {
            background-color: #2185c5;
            color: white;
        }

        .col-xs-6 {
            width: 50%;
        }

        .col-xs-1,
        .col-xs-10,
        .col-xs-11,
        .col-xs-12,
        .col-xs-2,
        .col-xs-3,
        .col-xs-4,
        .col-xs-5,
        .col-xs-6,
        .col-xs-7,
        .col-xs-8,
        .col-xs-9 {
            float: left;
        }

        .col-lg-1,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-md-1,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-sm-1,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-xs-1,
        .col-xs-10,
        .col-xs-11,
        .col-xs-12,
        .col-xs-2,
        .col-xs-3,
        .col-xs-4,
        .col-xs-5,
        .col-xs-6,
        .col-xs-7,
        .col-xs-8,
        .col-xs-9 {
            position: relative;
            min-height: 1px;
            padding-left: 15px;
            padding-right: 15px;
        }

        *,
        :after,
        :before {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        div {
            display: block;
        }

        .mobile-true-false-component .mobileTrueFalseSelect {
            -webkit-appearance: none;
            height: 45px;
            display: table;
            width: 100%;
            border: 1px solid #c3c3c3;
            border-radius: 4px;
            margin: auto;
            text-indent: 5px;
            text-align: center;
            cursor: pointer;
            cursor: hand;
        }

        .mobileTrueFalseSelect2 {
            -webkit-appearance: none;
            height: 45px;
            display: table;
            width: 100%;
            border: 1px solid #c3c3c3;
            border-radius: 4px;
            margin: auto;
            text-indent: 5px;
            text-align: center;
            cursor: pointer;
            cursor: hand;
        }

        .mobile-true-false-component {
            font-size: 16px;
        }

        /**/

        .component-margin-large {
            margin: 0 0 20px 0;
        }

        .component-margin-medium {
            font-weight: 400;
        }

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

        .fbkr-select,
        .style-guide textarea:not([disabled]) {
            width: 100%;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
        }

        .fbkr-select,
        .style-guide input.arrow:hover {
            cursor: pointer;
        }

        /**/


        td,
        th {
            padding: 5px;
        }



        /**/

        .onoffswitch-checkbox {
            height: 18px;
            width: 18px;
            cursor: pointer;
        }

        .larger-checkbox {
            height: 16px;
            width: 16px;
        }

        .selected-package {
            background-color: #2185c5;
            /* Tu môžete zmeniť farbu podľa vašich preferencií */
            color: white;
            /* Tu môžete zmeniť farbu textu podľa vašich preferencií */
        }

        .text-addon {
            font-size: 14px;
            min-width: 50%;
            padding-left: 12px;
            margin: auto;
        }

        .text-muted {
            color: #777;
        }

        .text-with-addon-container {
            width: 100%;
            display: inline-flex;
        }

        .sc-cabOPr.jcWBPl {
            border-color: rgb(240, 173, 78);
        }

        .kcTRGa {
            padding: 15px;
            border-width: 1px 1px 1px 5px;
            border-style: solid;
            border-color: initial;
            border-image: initial;
            border-radius: 3px;
            position: relative;
            background-color: rgb(255, 255, 255);
        }

        svg:not(:root).svg-inline--fa {
            overflow: visible;
        }

        .svg-inline--fa.fa-w-9 {
            width: 0.5625em;
        }

        svg:not(:root) {
            overflow: hidden;
        }

        .svg-inline--fa {
            display: inline-block;
            font-size: inherit;
            height: 1em;
            overflow: visible;
            vertical-align: -0.125em;
        }

        .jcWBPl .sc-cjibBx {
            color: rgb(240, 173, 78);
        }

        .fwpxVw {
            display: table-cell;
            vertical-align: top;
            padding-right: 10px;
        }

        .kCfWnQ {
            color: rgb(51, 51, 51);
        }

        .price-guarantee a {
            color: #2185C5;
            text-decoration: none;
            transition: color 0.3s, text-decoration 0.3s;
        }

        .price-guarantee a:hover {
            color: #235c80;
            text-decoration: underline;
        }

        .hUwBEC {
            width: 20px;
            height: 20px;
            cursor: pointer;
        }



        .cbCCGQ {
            cursor: pointer;
            display: inline-flex;
            align-items: flex-start;
            font-weight: normal;
            vertical-align: top;
            -webkit-tap-highlight-color: transparent;
            width: 100%;
        }

        .iBfvwL {
            margin-left: 7px;
        }

        .kJqlRW {
            font-size: 18px;
            font-weight: 700;
            line-height: 28px;
        }

        .footer-container-desktop .back-desktop {
            text-align: left;
            display: inline-block;
            width: 188px;
        }

        .selectable {
            cursor: pointer;
        }

        .pull-left {
            float: left !important;
        }

        .back-desktop {
            color: grey;
            text-decoration: none;
            font-size: 20px;
            text font-weight: bold;
        }

        .back-desktop:hover {
            color: black;
            font-size: 20px;
            text-decoration: none;
            font-weight: bold;
        }

        .iTJPFh {
            color: rgb(119, 119, 119);
        }

        .dvpcpn {
            font-size: 14px;
            font-weight: 400;
            line-height: 20px;
        }

        .iJwsiS input:first-of-type {
            padding-left: 35px;
        }

        .elnOwQ input:last-of-type,
        .elnOwQ select:last-of-type,
        .elnOwQ textarea:last-of-type {
            border-top-right-radius: 3px;
            border-bottom-right-radius: 3px;
        }

        .elnOwQ input:first-of-type,
        .elnOwQ select:first-of-type,
        .elnOwQ textarea:first-of-type {
            border-top-left-radius: 3px;
            border-bottom-left-radius: 3px;
        }

        .elnOwQ input,
        .elnOwQ select,
        .elnOwQ textarea {
            border-radius: 0px;
        }

        .elnOwQ>input,
        .elnOwQ>select {
            flex-basis: 0px;
            -webkit-box-flex: 1;
            flex-grow: 1;
            max-width: 100%;
        }

        .elnOwQ>input,
        .elnOwQ>select,
        .elnOwQ>textarea {
            float: left;
        }

        .hyomwy {
            height: 44px;
            width: 100%;
            padding-left: 12px;
            padding-right: 12px;
            font-size: 14px;
            background-color: rgb(255, 255, 255);
            outline: none;
            appearance: none;
            box-shadow: none;
            border-radius: 3px;
            border: 1px solid rgb(204, 204, 204);
        }

        .iJwsiS>.sc-fvEvSO {
            display: table-cell;
            vertical-align: middle;
            height: 100%;
            position: absolute;
            text-align: center;
            padding-left: 10px;
            padding-right: 10px;
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

        .gOYkIn {
            margin-top: 14px;
            color: rgb(119, 119, 119);
        }

        .svg-inline--fa {
            display: inline-block;
            font-size: inherit;
            height: 1em;
            overflow: visible;
            vertical-align: -0.125em;
        }

        .BnSFL {
            position: relative;
            list-style: none;
            height: 100%;
            max-height: 280px;
            min-height: 280px;
            overflow-y: auto;
            border: 1px solid rgb(33, 133, 197);
            border-radius: 4px;
            margin-top: 5px;
            margin-bottom: 0px;
            padding: 0px;
        }

        .bhsxFa {
            white-space: nowrap;
            cursor: pointer;
            padding: 16px 24px;
            display: flex;
        }


        /*Modal*/
        .default-modal-body {
            font-size: 14px;
        }

        .default-modal-body {
            padding: 35px 25px 24px !important;
        }

        .component-margin-medium {
            margin: 0 0 10px 0;
        }

        .font-16 {
            font-size: 16px;
        }

        b,
        optgroup,
        strong {
            font-weight: 700;
            margin-left: 14px;
        }

        .component-margin-small {
            font-weight: normal;
        }

        .btn-primary {
            background-color: #2185c5;
        }

        .btn-primary:hover {
            background-color: #2174a8;
        }

        .delete-button {
            margin-left: 10px;
            background-color: #fa5f5f;
            color: #fff;
            border: none;
            padding: 6px 12px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .delete-button:hover {
            background-color: #c64949;
        }

        #tripFrom,
        #tripTo {
            padding: 8px 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        #tripFrom,
        #tripTo {
            background-color: #f9f9f9;
            color: #333;
        }

        #tripFrom:focus,
        #tripTo:focus {
            outline: none;
            border-color: #66afe9;
        }
    </style>

    <div class="captain-dashboards__sc-l574mi-0 cjvDjC webview-hidden"><a class="eqRKgt" href="/manage/listings"
            style="border-bottom-width: 2px;">Back to Listings</a>
    </div>


    @include('details.listing_menu')


    <form action="{{ route('create_newFishingTrip', $listing->id) }}" method="POST">
        @csrf
        <div id="scrollable-content" class="scrollable-div">
            <div class="center-container">
                <div class="">
                    <div class="text-muted header-desktop">New Fishing Trip</div>
                    <div class="form-group">
                        <div class="component-margin-medium">Trip name:</div>
                        <div class="text-component">
                            <div>
                                <div class="form-group" style="width: 100%; margin: 0px;">
                                    <span class="input-group" style="width: 100%;">
                                        <input name="tripName" placeholder="Example: Half day trip" type="text"
                                            id="package_name" class="form-control" value=""
                                            style="appearance: none; height: 45px; font-size: 14px; width: 100%; border-width: 1px; margin: auto; border-style: solid; border-radius: 3px; border-color: rgb(195, 195, 195); z-index: 0;"
                                            required autofocus></span>
                                </div>
                            </div>
                        </div>
                        <div class="component-margin-medium"><span class="help-block text-right characters-left-desktop">35
                                characters remaining</span></div>


                        <div class="component-margin-medium">Description:</div>
                        <textarea name="description" rows="7"
                            placeholder="What's unique about this trip? Where will you be fishing and what will you be targeting?"
                            id="description" class="textarea-field form-control"
                            style="overflow: hidden; overflow-wrap: break-word; height: 181px;" required autofocus></textarea>
                        <div class="component-margin-medium"><span class="help-block text-right characters-left-desktop">510
                                characters remaining</span></div>
                        <hr>


                        <div class="component-margin-large">
                            <div class="display-half">
                                <div class="component-margin-medium">Type:</div>
                                <div class="mobile-true-false-component">
                                    <div class="mobileTrueFalseSelect" id="type">
                                        <input type="hidden" id="day-trip-input" name="tripType" value="Day Trip">
                                        <div id="day-trip" data-testid="true-false-select-left-label"
                                            class="col-xs-6 selected mobileSelectedRow" onclick="selectDayTrip()">Day Trip
                                        </div>

                                        <input type="hidden" id="multiday-trip-input" name="tripType"
                                            value="Multiday Trip">
                                        <div id="multiday-trip" data-testid="true-false-select-right-label"
                                            class="col-xs-6 mobileSelectedRow" onclick="selectMultidayTrip()">Multiday Trip
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="display-half">
                            <div class="component-margin-large">
                                <label class="component-margin-medium" for="duration">Duration:</label>
                                <div class="selectdiv" id="day-trip-section">
                                    <select name="duration_hours" class="fbkr-select gray arrow" id="duration">
                                        <option value="1">1 hour</option>
                                        <option value="2">2 hours</option>
                                        <option value="3">3 hours</option>
                                        <option value="4">4 hours</option>
                                        <option value="5">5 hours</option>
                                        <option value="6">6 hours</option>
                                        <option value="7">7 hours</option>
                                        <option value="8">8 hours</option>
                                        <option value="9">9 hours</option>
                                        <option value="10">10 hours</option>
                                        <option value="11">11 hours</option>
                                        <option value="12">12 hours</option>
                                        <option value="13">13 hours</option>
                                        <option value="14">14 hours</option>
                                        <option value="15">15 hours</option>
                                        <option value="16">16 hours</option>
                                        <option value="17">17 hours</option>
                                        <option value="18">18 hours</option>
                                        <option value="19">19 hours</option>
                                        <option value="20">20 hours</option>
                                        <option value="21">21 hours</option>
                                        <option value="22">22 hours</option>
                                        <option value="23">23 hours</option>
                                        <option value="24">24 hours</option>
                                    </select>
                                </div>
                                <div class="selectdiv" id="multiday-trip-section" style="display: none;">
                                    <select name="duration_days" class="fbkr-select gray arrow" id="duration">
                                        <option value="1">1 day</option>
                                        <option value="2">2 days</option>
                                        <option value="3">3 days</option>
                                        <option value="4">4 days</option>
                                        <option value="5">5 days</option>
                                        <option value="6">6 days</option>
                                        <option value="7">7 days</option>
                                        <option value="8">8 days</option>
                                        <option value="9">9 days</option>
                                        <option value="10">10 days</option>
                                        <option value="11">11 days</option>
                                        <option value="12">12 days</option>
                                        <option value="13">13 days</option>
                                        <option value="14">14 days</option>
                                        <option value="15">15 days</option>
                                        <option value="16">16 days</option>
                                    </select>
                                    <div>
                                        <div class="component-margin-medium">Accommodation:</div>
                                        <div class="mobile-true-false-component ">
                                            <div class="mobileTrueFalseSelect" id="accommodation">
                                                <input type="hidden" id="liveaboard-input" name="accom"
                                                    value="liveaboard">
                                                <div data-testid="true-false-select-liveaboard-label"
                                                    class="col-xs-6 selected mobileSelectedRow"
                                                    onclick="selectOption('liveaboard')" style="cursor: pointer;">
                                                    Liveaboard</div>

                                                <input type="hidden" id="lodging-input" name="accom" value="lodging">
                                                <div data-testid="true-false-select-lodging-label"
                                                    class="col-xs-6 mobileSelectedRow" onclick="selectOption('lodging')"
                                                    style="cursor: pointer;">Lodging</div>
                                            </div>
                                        </div>

                                    </div>

                                    <script>
                                        function selectOption(option) {
                                            var selectedOption = document.querySelector("#accommodation [data-testid=true-false-select-" + option +
                                                "-label]");
                                            var unselectedOption = document.querySelector("#accommodation [data-testid=true-false-select-" + (option ===
                                                'liveaboard' ? 'lodging' : 'liveaboard') + "-label]");

                                            if (selectedOption !== null && unselectedOption !== null) {
                                                selectedOption.classList.add("selected");
                                                unselectedOption.classList.remove("selected");
                                            }

                                        }

                                        selectOption('liveaboard');
                                    </script>


                                </div>
                            </div>
                        </div>

                        <script>
                            function selectDayTrip() {
                                document.getElementById('day-trip-section').style.display = 'block';
                                document.getElementById('multiday-trip-section').style.display = 'none';
                                document.getElementById('day-trip').classList.add('selected');
                                document.getElementById('multiday-trip').classList.remove('selected');
                            }

                            function selectMultidayTrip() {
                                document.getElementById('day-trip-section').style.display = 'none';
                                document.getElementById('multiday-trip-section').style.display = 'block';
                                document.getElementById('day-trip').classList.remove('selected');
                                document.getElementById('multiday-trip').classList.add('selected');
                            }

                            selectDayTrip();
                        </script>



                        <hr>


                        @include('details.trips_select_date_range')



                        <div class="component-margin-medium">Seasonal trip:</div>

                        <table>
                            <tr>
                                <td>
                                    <label for="tripFrom" style="font-weight: normal;">
                                        From:
                                    </label>
                                </td>
                                <td>
                                    <input id="tripFrom" type="date" name="tripFrom">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="tripTo" style="font-weight: normal;">
                                        To:
                                    </label>
                                </td>

                                <td>
                                    <input id="tripTo" type="date" name="tripTo">
                                </td>
                            </tr>

                        </table>

                        <script>
                            function openModal() {
                                document.getElementById("selectDateRangeModal").modal('show');
                            }
                        </script>


                        <hr>
                        <div class="component-margin-medium">Shared trip:</div>
                        <div class="component-margin-large">
                            <div class="toggle-button-component">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="onoffswitch" value="0"
                                        class="onoffswitch-checkbox" id="shared-toggle-button"
                                        onchange="toggleTripModel()">
                                    <label class="onoffswitch-label" for="shared-toggle-button">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="display-half" id="trip_model_section">
                            <div class="component-margin-medium">Trip Model:</div>
                            <div class="mobile-true-false-component component-margin-large">
                                <div class="mobileTrueFalseSelect" id="package_model">
                                    <input type="hidden" id="per-group-input" name="tripModel" value="Per Group">
                                    <div id="per-group" data-testid="per-group-label"
                                        class="col-xs-6 selected-package mobileSelectedRow" onclick="selectPerGroup()">Per
                                        Group</div>

                                    <input type="hidden" id="per-person-input" name="tripModel" value="Per Person">
                                    <div id="per-person" data-testid="per-person-label"
                                        class="col-xs-6 mobileSelectedRow" onclick="selectPerPerson()">Per Person</div>
                                </div>
                            </div>
                        </div>

                        <div class="row marginless" id="price_section">
                            <div class="component-margin-medium">Price per <span id="price_type">trip</span></div>
                            <div class="col-xs-6 paddingless">
                                <div class="text-with-addon-container">
                                    <div class="text-component">
                                        <div>
                                            <div class="form-group" style="width: 100%; margin: 0px;">
                                                <span class="input-group" style="width: 100%;">
                                                    <input name="price" placeholder="Price" type="number"
                                                        id="price_per_trip" class="form-control" value=""
                                                        style="appearance: none; height: 45px; font-size: 14px; width: 100%; border-width: 1px; margin: auto; border-style: solid; border-radius: 3px; border-color: rgb(195, 195, 195); z-index: 0;"
                                                        required autofocus>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-addon text-muted"><span>EUR, with tax <br> and deposit</span></div>
                                </div>
                            </div>
                        </div>

                        <script>
                            function toggleTripModel() {
                                var checkbox = document.getElementById("shared-toggle-button");
                                var tripModelSection = document.getElementById("trip_model_section");
                                var priceType = document.getElementById("price_type");

                                var value = checkbox.checked ? 1 : 0;

                                if (checkbox.checked) {
                                    tripModelSection.style.display = "none";
                                    priceType.textContent = "person";
                                } else {
                                    tripModelSection.style.display = "block";
                                    priceType.textContent = "trip";
                                }

                                checkbox.value = value;
                            }




                            function selectPerGroup() {
                                var selectedOption = document.querySelector("[data-testid=per-group-label]");
                                var unselectedOption = document.querySelector("[data-testid=per-person-label]");
                                var priceSection = document.getElementById("price_section");

                                if (selectedOption !== null && unselectedOption !== null) {
                                    selectedOption.classList.add("selected-package");
                                    unselectedOption.classList.remove("selected-package");
                                    document.querySelector("#price_section .component-margin-medium").textContent = "Price per trip";
                                }
                            }

                            function selectPerPerson() {
                                var selectedOption = document.querySelector("[data-testid=per-person-label]");
                                var unselectedOption = document.querySelector("[data-testid=per-group-label]");
                                var priceSection = document.getElementById("price_section");

                                if (selectedOption !== null && unselectedOption !== null) {
                                    selectedOption.classList.add("selected-package");
                                    unselectedOption.classList.remove("selected-package");
                                    document.querySelector("#price_section .component-margin-medium").textContent = "Price per person";
                                }
                            }
                        </script>

                        <div style="margin-top: 8px; margin-bottom: 8px;">
                            <div class="sc-cabOPr sc-eeMvmM kcTRGa jcWBPl">
                                <div class="sc-jcMfQk ksPBum">
                                    <div class="listing__sc-11jzsnf-0 kCfWnQ">
                                        <div style="margin-bottom: 8px;"><b><span>Please advertise your regular
                                                    prices</span></b></div><span class="price-guarantee">Customers count on
                                            our
                                            <a href="https://help.fishingbooker.com/360009232834-Working-with-FishingBooker/360010990254-how-does-the-best-price-guarantee-apply-to-my-listing-"
                                                target="_blank">Best Price Guarantee</a> to find the most affordable
                                            charter
                                            rates online. Your prices on
                                            FishingBooker must match or be lower than the prices on your own website and
                                            other
                                            online services.</span>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <div style="margin-bottom: 16px;">
                            <div class="listing__sc-9wibq3-0 kJqlRW">Targeted species</div>
                        </div>
                        <div style="margin-bottom: 24px;">
                            <div class="listing__sc-9wibq3-1 iTJPFh">Which fish species do you target and catch on this
                                trip?
                                Add up to 12 fish species.</div>
                        </div>
                        <div>
                            <div style="margin-bottom: 8px;">
                                <div class="listing__sc-9wibq3-2 dvpcpn">Add targeted species</div>
                            </div>
                        </div>

                        <div>
                            <input type="text" id="searchInput" class="sc-bWOGAC hyomwy"
                                placeholder="Search fish species">
                            <select name="tripFish" id="fishSpeciesSelect" multiple size="5"
                                style="display: none;">
                                <option name="fish_species[]" value="Alligator Gar"
                                    data-image="https://static.fishingbooker.com/public/images/fish/275x160/alligator-gar.png">
                                    Alligator Gar
                                </option>
                                <option name="fish_species[]" value="Amberjack"
                                    data-image="https://static.fishingbooker.com/public/images/fish/275x160/amberjack.png">
                                    Amberjack
                                </option>
                                <option name="fish_species[]" value="Arapaima"
                                    data-image="https://static.fishingbooker.com/public/images/fish/275x160/arapaima.png">
                                    Arapaima
                                </option>
                                <option name="fish_species[]" value="Arctic Char"
                                    data-image="https://static.fishingbooker.com/public/images/fish/275x160/arctic-char.png">
                                    Arctic Char
                                </option>
                                <option name="fish_species[]" value="Asp"
                                    data-image="https://static.fishingbooker.com/public/images/fish/275x160/asp.png">
                                    Asp
                                </option>
                                <option name="fish_species[]" value="Barracuda (Great)"
                                    data-image="https://static.fishingbooker.com/public/images/fish/275x160/barracuda-great.png">
                                    Barracuda (Great)
                                </option>
                                <option name="fish_species[]" value="Barracuda (Pacific)"
                                    data-image="https://static.fishingbooker.com/public/images/fish/275x160/barracuda-pacific.png">
                                    Barracuda (Pacific)
                                </option>
                                <option name="fish_species[]" value="Barramundi"
                                    data-image="https://static.fishingbooker.com/public/images/fish/275x160/barramundi.png">
                                    Barramundi
                                </option>
                                <option name="fish_species[]" value="Bass (Australian)"
                                    data-image="https://static.fishingbooker.com/public/images/fish/275x160/bass-australian.png">
                                    Bass (Australian)
                                </option>
                                <option name="fish_species[]" value="Bass (Largemouth)"
                                    data-image="https://static.fishingbooker.com/public/images/fish/275x160/bass-largemouth.png">
                                    Bass (Largemouth)
                                </option>
                                <option name="fish_species[]" value="Bass (Peacock)"
                                    data-image="https://static.fishingbooker.com/public/images/fish/275x160/bass-peacock.png">
                                    Bass (Peacock)
                                </option>
                                <option name="fish_species[]" value="Bass (Rainbow)"
                                    data-image="https://static.fishingbooker.com/public/images/fish/275x160/bass-rainbow.png">
                                    Bass (Rainbow)
                                </option>
                                <option name="fish_species[]" value="Bass (Smallmouth)"
                                    data-image="https://static.fishingbooker.com/public/images/fish/275x160/bass-smallmouth.png">
                                    Bass (Smallmouth)
                                </option>
                                <option name="fish_species[]" value="Bass (Spotted)"
                                    data-image="https://static.fishingbooker.com/public/images/fish/275x160/bass-spotted.png">
                                    Bass (Spotted)
                                </option>
                                <option name="fish_species[]" value="Bass (Striped)"
                                    data-image="https://static.fishingbooker.com/public/images/fish/275x160/bass-striped.png">
                                    Bass (Striped)
                                </option>
                                <option name="fish_species[]" value="Bass (White)"
                                    data-image="https://static.fishingbooker.com/public/images/fish/275x160/bass-white.png">
                                    Bass (White)
                                </option>
                                <option name="fish_species[]" value="Black Drum"
                                    data-image="https://static.fishingbooker.com/public/images/fish/275x160/black-drum.png">
                                    Black Drum
                                </option>
                                <option name="fish_species[]" value="Black Jewfish"
                                    data-image="https://static.fishingbooker.com/public/images/fish/275x160/black-jewfish.png">
                                    Black Jewfish
                                </option>
                                <option name="fish_species[]" value="Black Rockfish"
                                    data-image="https://static.fishingbooker.com/public/images/fish/275x160/black-rockfish.png">
                                    Black Rockfish
                                </option>
                                <option name="fish_species[]" value="Bluefish"
                                    data-image="https://static.fishingbooker.com/public/images/fish/275x160/bluefish.png">
                                    Bluefish
                                </option>
                            </select><br>
                            <div id="selectedFish"></div>
                            <input type="hidden" name="tripFishNumber" id="fishNumber" value="0">
                        </div>

                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                const searchInput = document.getElementById("searchInput");
                                const fishSpeciesSelect = document.getElementById("fishSpeciesSelect");
                                const selectedFishContainer = document.getElementById("selectedFish");
                                let selectedOptions = Array.from(fishSpeciesSelect.selectedOptions);
                                let allOptions = Array.from(fishSpeciesSelect.options);

                                function updateSelectedFish() {
                                    selectedFishContainer.innerHTML = "";
                                    selectedOptions.forEach((option, index) => {
                                        const fishDiv = document.createElement("div");
                                        const image = document.createElement("img");
                                        image.src = option.dataset.image;
                                        image.alt = option.text;
                                        image.style.width = "100px";
                                        image.style.height = "auto";
                                        fishDiv.appendChild(image);
                                        const fishName = document.createElement("span");
                                        fishName.textContent = option.text;
                                        fishDiv.appendChild(fishName);
                                        const deleteButton = document.createElement("button");
                                        deleteButton.textContent = "Delete";
                                        deleteButton.classList.add("delete-button");
                                        deleteButton.addEventListener("click", function() {
                                            fishSpeciesSelect.appendChild(option);
                                            selectedOptions.splice(index, 1);
                                            updateSelectedFish();
                                            updateHiddenInputs();
                                        });
                                        fishDiv.appendChild(deleteButton);
                                        selectedFishContainer.appendChild(fishDiv);

                                        const hiddenInput = document.createElement("input");
                                        hiddenInput.type = "hidden";
                                        hiddenInput.name = "fishes[]";
                                        hiddenInput.value = option.value;
                                        selectedFishContainer.appendChild(hiddenInput);
                                    });
                                    updateHiddenInputs();
                                }

                                function updateHiddenInputs() {
                                    const fishNumberInput = document.getElementById("fishNumber");
                                    fishNumberInput.value = selectedOptions.length;
                                }

                                function handleOptionSelection(option) {
                                    if (option.selected) {
                                        if (selectedOptions.length >= 5) {
                                            alert("You can select a maximum of 5 fish species.");
                                            option.selected = false;
                                        } else {
                                            selectedOptions.push(option);
                                            updateSelectedFish();
                                            option.remove();
                                        }
                                    } else {
                                        const index = selectedOptions.indexOf(option);
                                        if (index !== -1) {
                                            selectedOptions.splice(index, 1);
                                            updateSelectedFish();
                                            fishSpeciesSelect.appendChild(option);
                                        }
                                    }
                                }

                                fishSpeciesSelect.addEventListener("change", function(event) {
                                    const selectedOption = event.target.selectedOptions[0];
                                    handleOptionSelection(selectedOption);
                                });

                                searchInput.addEventListener("click", function() {
                                    fishSpeciesSelect.style.display = "block";
                                });

                                searchInput.addEventListener("input", function() {
                                    const searchTerm = searchInput.value.toLowerCase();
                                    fishSpeciesSelect.innerHTML = "";
                                    allOptions.forEach(option => {
                                        if (option.text.toLowerCase().startsWith(searchTerm)) {
                                            fishSpeciesSelect.appendChild(option.cloneNode(true));
                                        }
                                    });
                                });

                                searchInput.dispatchEvent(new Event('input'));
                            });
                        </script>



                        <script>
                            var input = document.getElementById('searchInput');
                            var items = document.querySelectorAll('.listing__sc-10wjq9x-1');
                            var selectedSpeciesCount = 0;

                            input.addEventListener('input', function() {
                                var filter = input.value.toLowerCase();

                                items.forEach(function(item) {
                                    var text = item.textContent.toLowerCase();
                                    var listItem = item.closest('li');

                                    if (text.includes(filter)) {
                                        listItem.style.display = 'block';
                                    } else {
                                        listItem.style.display = 'none';
                                    }
                                });
                            });

                            document.querySelector('.sc-jRwbcX').addEventListener('click', function() {
                                var ul = document.querySelector('.listing__sc-10wjq9x-0');
                                ul.style.display = (ul.style.display === 'none') ? 'block' : 'none';
                            });


                            items.forEach(function(item) {
                                item.addEventListener('click', function(event) {
                                    event.stopPropagation();

                                    if (selectedSpeciesCount >= 12) return;

                                    var value = item.getAttribute('value');
                                    input.value = value;
                                    showSelectedSpecies(value);
                                    item.remove();

                                    selectedSpeciesCount++;
                                });
                            });

                            function removeSelectedSpecies(event) {
                                event.stopPropagation();
                                event.target.closest('.selected-species')
                                    .remove();
                                selectedSpeciesCount--;
                            }


                            function showSelectedSpecies(speciesName) {
                                var selectedSpeciesDiv = document.createElement('div');
                                selectedSpeciesDiv.textContent = speciesName;
                                selectedSpeciesDiv.classList.add(
                                    'selected-species');

                                var deleteButton = document.createElement('button');
                                deleteButton.textContent = 'Delete';
                                deleteButton.classList.add('delete-button');
                                deleteButton.addEventListener('click',
                                    removeSelectedSpecies);

                                selectedSpeciesDiv.appendChild(document.createTextNode(' '));

                                selectedSpeciesDiv.appendChild(deleteButton);

                                var lineBreak = document.createElement('br');
                                document.querySelector('.sc-jRwbcX').appendChild(lineBreak);

                                document.querySelector('.sc-jRwbcX').appendChild(selectedSpeciesDiv);
                            }
                        </script>
                        <br>
                        <hr>
                        <div style="margin-bottom: 16px;">
                            <div class="listing__sc-9wibq3-0 kJqlRW">Fishing locations</div>
                        </div>
                        <div style="margin-bottom: 24px;">
                            <div class="listing__sc-9wibq3-1 iTJPFh">Where do you go on this fishing trip?</div>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                <span class="sc-fXqpFg eiuMvt">
                                    <span class="sc-cZFQFd kmNniD">
                                        <span class="sc-dsHJmm jxZtQh"></span>
                                        <input type="checkbox" class="sc-jTjUTQ hUwBEC" name="trip_fishing_locations[]"
                                            value="river">
                                    </span>
                                </span>
                                <span style="margin-left: 7px; font-weight: normal;">River</span>
                            </label>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                <span class="sc-fXqpFg eiuMvt">
                                    <span class="sc-cZFQFd kmNniD">
                                        <span class="sc-dsHJmm jxZtQh"></span>
                                        <input type="checkbox" class="sc-jTjUTQ hUwBEC" name="trip_fishing_locations[]"
                                            value="lake">
                                    </span>
                                </span>
                                <span style="margin-left: 7px; font-weight: normal;">Lake</span>
                            </label>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                <span class="sc-fXqpFg eiuMvt">
                                    <span class="sc-cZFQFd kmNniD">
                                        <span class="sc-dsHJmm jxZtQh"></span>
                                        <input type="checkbox" class="sc-jTjUTQ hUwBEC" name="trip_fishing_locations[]"
                                            value="inshore">
                                    </span>
                                </span>
                                <span style="margin-left: 7px; font-weight: normal;">Inshore</span>
                            </label>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                <span class="sc-fXqpFg eiuMvt">
                                    <span class="sc-cZFQFd kmNniD">
                                        <span class="sc-dsHJmm jxZtQh"></span>
                                        <input type="checkbox" class="sc-jTjUTQ hUwBEC" name="trip_fishing_locations[]"
                                            value="nearshore">
                                    </span>
                                </span>
                                <span style="margin-left: 7px; font-weight: normal;">Nearshore</span>
                            </label>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                <span class="sc-fXqpFg eiuMvt">
                                    <span class="sc-cZFQFd kmNniD">
                                        <span class="sc-dsHJmm jxZtQh"></span>
                                        <input type="checkbox" class="sc-jTjUTQ hUwBEC" name="trip_fishing_locations[]"
                                            value="offshore">
                                    </span>
                                </span>
                                <span style="margin-left: 7px; font-weight: normal;">Offshore</span>
                            </label>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                <span class="sc-fXqpFg eiuMvt">
                                    <span class="sc-cZFQFd kmNniD">
                                        <span class="sc-dsHJmm jxZtQh"></span>
                                        <input type="checkbox" class="sc-jTjUTQ hUwBEC" name="trip_fishing_locations[]"
                                            value="reef">
                                    </span>
                                </span>
                                <span style="margin-left: 7px; font-weight: normal;">Reef</span>
                            </label>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                <span class="sc-fXqpFg eiuMvt">
                                    <span class="sc-cZFQFd kmNniD">
                                        <span class="sc-dsHJmm jxZtQh"></span>
                                        <input type="checkbox" class="sc-jTjUTQ hUwBEC" name="trip_fishing_locations[]"
                                            value="wreck">
                                    </span>
                                </span>
                                <span style="margin-left: 7px; font-weight: normal;">Wreck</span>
                            </label>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                <span class="sc-fXqpFg eiuMvt">
                                    <span class="sc-cZFQFd kmNniD">
                                        <span class="sc-dsHJmm jxZtQh"></span>
                                        <input type="checkbox" class="sc-jTjUTQ hUwBEC" name="trip_fishing_locations[]"
                                            value="flats">
                                    </span>
                                </span>
                                <span style="margin-left: 7px; font-weight: normal;">Flats</span>
                            </label>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                <span class="sc-fXqpFg eiuMvt">
                                    <span class="sc-cZFQFd kmNniD">
                                        <span class="sc-dsHJmm jxZtQh"></span>
                                        <input type="checkbox" class="sc-jTjUTQ hUwBEC" name="trip_fishing_locations[]"
                                            value="backcountry">
                                    </span>
                                </span>
                                <span style="margin-left: 7px; font-weight: normal;">Backcountry</span>
                            </label>
                        </div>







                        <hr>
                        <div style="margin-bottom: 16px;">
                            <div class="listing__sc-9wibq3-0 kJqlRW">Fishing techniques</div>
                        </div>
                        <div style="margin-bottom: 24px;">
                            <div class="listing__sc-9wibq3-1 iTJPFh">Which fishing techniques do you use on this trip?
                            </div>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                <span class="sc-fXqpFg eiuMvt">
                                    <span class="sc-cZFQFd kmNniD">
                                        <span class="sc-dsHJmm jxZtQh"></span>
                                        <input type="checkbox" class="sc-jTjUTQ hUwBEC"
                                            name="trip_fishing_technique[]"value="light_tackle">
                                    </span>
                                </span>
                                <span style="margin-left: 7px; font-weight: normal;">Light Tackle</span>
                            </label>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                <span class="sc-fXqpFg eiuMvt">
                                    <span class="sc-cZFQFd kmNniD">
                                        <span class="sc-dsHJmm jxZtQh"></span>
                                        <input type="checkbox" class="sc-jTjUTQ hUwBEC" name="trip_fishing_technique[]"
                                            value="heavy_tackle">
                                    </span>
                                </span>
                                <span style="margin-left: 7px; font-weight: normal;">Heavy Tackle</span>
                            </label>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                <span class="sc-fXqpFg eiuMvt">
                                    <span class="sc-cZFQFd kmNniD">
                                        <span class="sc-dsHJmm jxZtQh"></span>
                                        <input type="checkbox" class="sc-jTjUTQ hUwBEC" name="trip_fishing_technique[]"
                                            value="bottom_fishing">
                                    </span>
                                </span>
                                <span style="margin-left: 7px; font-weight: normal;">Bottom Fishing</span>
                            </label>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                <span class="sc-fXqpFg eiuMvt">
                                    <span class="sc-cZFQFd kmNniD">
                                        <span class="sc-dsHJmm jxZtQh"></span>
                                        <input type="checkbox" class="sc-jTjUTQ hUwBEC" name="trip_fishing_technique[]"
                                            value="deep_sea_fishing">
                                    </span>
                                </span>
                                <span style="margin-left: 7px; font-weight: normal;">Deep Sea Fishing</span>
                            </label>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                <span class="sc-fXqpFg eiuMvt">
                                    <span class="sc-cZFQFd kmNniD">
                                        <span class="sc-dsHJmm jxZtQh"></span>
                                        <input type="checkbox" class="sc-jTjUTQ hUwBEC" name="trip_fishing_technique[]"
                                            value="trolling">
                                    </span>
                                </span>
                                <span style="margin-left: 7px; font-weight: normal;">Trolling</span>
                            </label>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                <span class="sc-fXqpFg eiuMvt">
                                    <span class="sc-cZFQFd kmNniD">
                                        <span class="sc-dsHJmm jxZtQh"></span>
                                        <input type="checkbox" class="sc-jTjUTQ hUwBEC" name="trip_fishing_technique[]"
                                            value="spinning">
                                    </span>
                                </span>
                                <span style="margin-left: 7px; font-weight: normal;">Spinning</span>
                            </label>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                <span class="sc-fXqpFg eiuMvt">
                                    <span class="sc-cZFQFd kmNniD">
                                        <span class="sc-dsHJmm jxZtQh"></span>
                                        <input type="checkbox" class="sc-jTjUTQ hUwBEC" name="trip_fishing_technique[]"
                                            value="jigging">
                                    </span>
                                </span>
                                <span style="margin-left: 7px; font-weight: normal;">Jigging</span>
                            </label>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                <span class="sc-fXqpFg eiuMvt">
                                    <span class="sc-cZFQFd kmNniD">
                                        <span class="sc-dsHJmm jxZtQh"></span>
                                        <input type="checkbox" class="sc-jTjUTQ hUwBEC" name="trip_fishing_technique[]"
                                            value="popping">
                                    </span>
                                </span>
                                <span style="margin-left: 7px; font-weight: normal;">Popping</span>
                            </label>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                <span class="sc-fXqpFg eiuMvt">
                                    <span class="sc-cZFQFd kmNniD">
                                        <span class="sc-dsHJmm jxZtQh"></span>
                                        <input type="checkbox" class="sc-jTjUTQ hUwBEC" name="trip_fishing_technique[]"
                                            value="fly_fishing">
                                    </span>
                                </span>
                                <span style="margin-left: 7px; font-weight: normal;">Fly Fishing</span>
                            </label>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                <span class="sc-fXqpFg eiuMvt">
                                    <span class="sc-cZFQFd kmNniD">
                                        <span class="sc-dsHJmm jxZtQh"></span>
                                        <input type="checkbox" class="sc-jTjUTQ hUwBEC" name="trip_fishing_technique[]"
                                            value="drift_fishing">
                                    </span>
                                </span>
                                <span style="margin-left: 7px; font-weight: normal;">Drift Fishing</span>
                            </label>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                <span class="sc-fXqpFg eiuMvt">
                                    <span class="sc-cZFQFd kmNniD">
                                        <span class="sc-dsHJmm jxZtQh"></span>
                                        <input type="checkbox" class="sc-jTjUTQ hUwBEC" name="trip_fishing_technique[]"
                                            value="kite_fishing">
                                    </span>
                                </span>
                                <span style="margin-left: 7px; font-weight: normal;">Kite Fishing</span>
                            </label>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                <span class="sc-fXqpFg eiuMvt">
                                    <span class="sc-cZFQFd kmNniD">
                                        <span class="sc-dsHJmm jxZtQh"></span>
                                        <input type="checkbox" class="sc-jTjUTQ hUwBEC" name="trip_fishing_technique[]"
                                            value="bow_fishing">
                                    </span>
                                </span>
                                <span style="margin-left: 7px; font-weight: normal;">Bow Fishing</span>
                            </label>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                <span class="sc-fXqpFg eiuMvt">
                                    <span class="sc-cZFQFd kmNniD">
                                        <span class="sc-dsHJmm jxZtQh"></span>
                                        <input type="checkbox" class="sc-jTjUTQ hUwBEC" name="trip_fishing_technique[]"
                                            value="handline">
                                    </span>
                                </span>
                                <span style="margin-left: 7px; font-weight: normal;">Handline</span>
                            </label>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                <span class="sc-fXqpFg eiuMvt">
                                    <span class="sc-cZFQFd kmNniD">
                                        <span class="sc-dsHJmm jxZtQh"></span>
                                        <input type="checkbox" class="sc-jTjUTQ hUwBEC" name="trip_fishing_technique[]"
                                            value="spearfishing">
                                    </span>
                                </span>
                                <span style="margin-left: 7px; font-weight: normal;">Spearfishing</span>
                            </label>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                <span class="sc-fXqpFg eiuMvt">
                                    <span class="sc-cZFQFd kmNniD">
                                        <span class="sc-dsHJmm jxZtQh"></span>
                                        <input type="checkbox" class="sc-jTjUTQ hUwBEC" name="trip_fishing_technique[]"
                                            value="ice_fishing">
                                    </span>
                                </span>
                                <span style="margin-left: 7px; font-weight: normal;">Ice Fishing</span>
                            </label>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                <span class="sc-fXqpFg eiuMvt">
                                    <span class="sc-cZFQFd kmNniD">
                                        <span class="sc-dsHJmm jxZtQh"></span>
                                        <input type="checkbox" class="sc-jTjUTQ hUwBEC" name="trip_fishing_technique[]"
                                            value="flounder_gigging">
                                    </span>
                                </span>
                                <span style="margin-left: 7px; font-weight: normal;">Flounder Gigging</span>
                            </label>
                        </div>

                    </div>
                </div>
                <div class="listing__sc-qdm6vt-3 jeHyJy text-muted footer-container-desktop">
                    <hr>
                    <a href="trips" class="back-desktop selectable pull-left">&nbsp;←&nbsp;Back</a>
                    <button type="submit" class="save_button">Save</button>
                </div>
    </form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
@endsection
