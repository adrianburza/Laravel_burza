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

        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        main,
        menu,
        nav,
        section,
        summary {
            display: block;
        }

        .component-margin-large {
            margin: 0 0 20px 0;
        }

        .label-header-desktop {
            margin-bottom: 10px;
            font-size: 20px;
        }

        b,
        optgroup,
        strong {
            font-weight: 700;
        }

        *,
        :after,
        :before {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .component-margin-medium {
            margin: 0 0 10px 0;
            font-weight: 400;
            display: inline-block;
            max-width: 100%;
            margin-bottom: 5px;
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

        hr {
            display: block;
            unicode-bidi: isolate;
            margin-block-start: 0.5em;
            margin-block-end: 0.5em;
            margin-inline-start: auto;
            margin-inline-end: auto;
            overflow: hidden;
            border-style: inset;
            border-width: 1px;
        }

        .component-margin-medium {
            margin: 0 0 10px 0;
        }

        .label-header-desktop {
            margin-bottom: 10px;
            font-size: 20px;
        }

        element.style {
            margin-bottom: 16px;
        }

        .btn-link,
        .btn-link:active,
        .btn-link:focus,
        .btn-link:hover {
            border-color: transparent;
        }

        .btn-link,
        .btn-link.active,
        .btn-link:active,
        .btn-link[disabled],
        fieldset[disabled] .btn-link {
            background-color: transparent;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
        }

        .btn-link {
            color: #2185C5;
            font-weight: 400;
            border-radius: 0;
        }

        .btn {
            display: inline-block;
            margin-bottom: 0;
            font-weight: 400;
            text-align: center;
            touch-action: manipulation;
            cursor: pointer;
            border: 1px solid transparent;
            white-space: nowrap;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            -webkit-user-select: none;
            user-select: none;
        }

        .btn,
        .btn-danger.active,
        .btn-danger:active,
        .btn-default.active,
        .btn-default:active,
        .btn-info.active,
        .btn-info:active,
        .btn-primary.active,
        .btn-primary:active,
        .btn-warning.active,
        .btn-warning:active,
        .btn.active,
        .btn:active,
        .dropdown-menu>.disabled>a:focus,
        .dropdown-menu>.disabled>a:hover,
        .form-control,
        .navbar-toggle,
        .open>.dropdown-toggle.btn-danger,
        .open>.dropdown-toggle.btn-default,
        .open>.dropdown-toggle.btn-info,
        .open>.dropdown-toggle.btn-primary,
        .open>.dropdown-toggle.btn-warning {
            background-image: none;
        }

        .btn,
        .btn-group,
        .btn-group-vertical,
        .caret,
        .checkbox-inline,
        .datepicker .cw,
        .input-daterange .add-on,
        .radio-inline,
        img {
            vertical-align: middle;
        }

        .btn,
        .datepicker table {
            -moz-user-select: none;
            -ms-user-select: none;
        }

        button,
        input,
        select,
        textarea {
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }

        button,
        html input[type=button],
        input[type=reset],
        input[type=submit] {
            -webkit-appearance: button;
            cursor: pointer;
        }

        button,
        select {
            text-transform: none;
        }

        button {
            overflow: visible;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            color: inherit;
            font: inherit;
            margin: 0;
        }

        .add-trips-container {
            display: inline-block;
        }

        .add-trips-container .add-trips-button {
            width: 35px;
            height: 35px;
            font-size: 21px;
            padding: 4px 7px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            color: white;
            background-color: #2185C5;
            margin-right: 10px;
        }

        .add-trips-container div {
            display: inline-block;
        }

        svg:not(:root).svg-inline--fa {
            overflow: visible;
        }

        .svg-inline--fa {
            display: inline-block;
            font-size: inherit;
            height: 1em;
            overflow: visible;
            vertical-align: -0.125em;
        }


        .font-18 {
            font-size: 18px;
        }

        .package-items-container-desktop {
            border: 1px solid #ccc;
            border-bottom: none;
        }


        .package-item:nth-child(odd) {
            background-color: #efefef;
        }

        .package-item-desktop {
            border-bottom: 1px solid #ccc;
        }

        .package-item-expanded {
            position: relative;
            padding: 15px;
        }

        .selectable {
            cursor: pointer;
        }

        .component-margin-large {
            margin: 0 0 20px 0;
        }

        .package-header-title {
            padding: 0 5px;
            width: 90%;
            font-size: 18px;
            overflow: hidden;
            display: inline-block;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        b,
        optgroup,
        strong {
            font-weight: 700;
        }

        .package-header-actions-container {
            display: inline-block;
            font-size: 14px;
        }

        .package-header-actions-container div {
            display: inline-block;
        }

        .package-header-actions {
            margin: 5px 0;
            padding: 0 5px;
            color: #2185C5;
            border-right: 1px solid #cacaca;
            cursor: pointer;
            z-index: 6000;
        }
    </style>

    <div class="captain-dashboards__sc-l574mi-0 cjvDjC webview-hidden"><a class="eqRKgt" href="/manage/listings"
            style="border-bottom-width: 2px;">Back to Listings</a>
    </div>


    @include('details.listing_menu')


    <div id="scrollable-content" class="scrollable-div">
        <div class="center-container">
            <section class="pages-container-desktop" data-testid="listing-trips-container">
                <div class="text-muted header-desktop">Trips</div>
                <section>
                    <p class="text-muted">Add any fishing trip you want to advertise on FishingBooker. This can include your
                        special deals, seasonal packages, and discounted trips. Please note that non-fishing trips are not
                        allowed.</p>

                    @foreach ($listing->trips as $item)
                        <div class="package-items-container-desktop component-margin-large">
                            <div class="selectable package-item package-item-desktop package-item-expanded">
                                <div class="package-header">
                                    <div class="package-header-title"><strong>{{ $item -> name }}</strong></div>
                                    <div class="package-header-actions-container">
                                        <form action="{{ route("tripDelete", $listing -> id) }}" method = "POST">
                                            @csrf
                                            <input type="hidden" name="trip_id" value="{{ $item -> id }}">
                                            <button type="submit" class="package-header-actions" style="border: none">Remove</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div style="margin-bottom: 16px;">
                        <a class="btn btn-link" href="{{ route('newFishingTrip', $listing->id) }}">
                            <div class="clearfix add-trips-container">
                                <div class="add-trips-button">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus"
                                        class="svg-inline--fa fa-plus fa-w-14" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path fill="currentColor"
                                            d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="font-18">Add new fishing trip</div>
                            </div>
                        </a>

                        <script>
                            function openNewFishingTrip() {
                                window.location.href = "newFishingTrip";
                            }
                        </script>
                    </div>
                </section>
            </section>
            <div class="listing__sc-qdm6vt-3 jeHyJy text-muted footer-container-desktop">
                <hr>
            </div>
        </div>
    </div>
@endsection
