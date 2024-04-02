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

        /*obsah*/
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

        .label-header-desktop {
            margin-bottom: 10px;
            font-size: 20px;
        }

        .text-component .text-label {
            display: inline-block;
            max-width: 100%;
        }

        .component-margin-small {
            margin: 0 0 5px 0;
        }

        .listing label {
            font-weight: 400;
        }

        .component-margin-medium {
            margin: 0 0 10px 0;
        }

        .label-header-desktop {
            margin-bottom: 10px;
            font-size: 20px;
        }

        .component-margin-small {
            font-weight: normal;
        }

        .control-label {
            font-weight: normal;
        }

        .listing .textarea-field {
            resize: none !important;
            font-size: 16px;
            padding: 10px 12px;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
        }



        .form-control {
            display: block;
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: var(--bs-body-color);
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-color: var(--bs-body-bg);
            background-clip: padding-box;
            border: var(--bs-border-width) solid var(--bs-border-color);
            border-radius: var(--bs-border-radius);
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
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
    </style>

    <div class="captain-dashboards__sc-l574mi-0 cjvDjC webview-hidden"><a class="eqRKgt" href="/manage/listings"
            style="border-bottom-width: 2px;">Back to Listings</a>
    </div>


    @include('details.listing_menu')

    <div id="scrollable-content" class="scrollable-div">
        <div class="center-container">
            <section class="pages-container-desktop" data-testid="listing-description-container">
                <div class="text-muted header-desktop">Description</div>
                <section>
                    <div class="component-margin-medium label-header-desktop"><strong>Here's a name for your
                            listing</strong></div>
                    <p class="text-muted">Your business name has already been input but feel free to personalize it if you
                        use a different name or run multiple boats.</p>

                    <form action="{{ route('update_description', $listing->id) }}" method="POST">
                        @csrf

                        <div class="clearfix">
                            <div class="text-component">
                                <div><label class="text-label component-margin-small">Title:</label>
                                    <div class="form-group" style="width: 100%; margin: 0px;">
                                        <span class="input-group" style="width: 100%;">
                                            <input name="title" id="businessNameInput"
                                                data-testid="business-name" placeholder="Enter Listing Title" type="text"
                                                class="form-control" value="{{ $listing -> title }}"
                                                style="appearance: none; height: 45px; font-size: 14px; width: 100%; border-width: 1px; margin: auto; border-style: solid; border-radius: 3px; border-color: rgb(195, 195, 195); z-index: 0;" required></span>
                                    </div>
                                </div>
                            </div><span class="help-block text-right characters-left-desktop"
                                style="display: inline-block; float: right;">36 characters remaining</span>
                        </div>
                </section>
                <div style="margin-top: 16px;">
                    <section>
                        <div class="component-margin-medium label-header-desktop"><strong>Here's your listing description so
                                far</strong></div>
                        <p class="text-muted">Feel free to make changes now or any time you like. Our team will make sure
                            it's neat and tidy once your listing goes public.</p>
                        <div class="clearfix"><label for="summary" class="control-label">Description:</label>
                            <textarea name="description" id="businessDesc" data-testid="business-description" rows="7" placeholder="OPTIONAL" id="summary"
                                class="textarea-field form-control" style="height: 797px;" required>{{ $listing -> description }}</textarea>
                        </div>
                    </section>
                </div>
            </section>
            <div class="listing__sc-qdm6vt-3 jeHyJy text-muted footer-container-desktop">
                <hr>
                <button type="submit" class="save_button">Save</button>
                </form>
                <div data-testid="next-step-btn"
                    class="pull-right text-center next-desktop selectable next-button-available"
                    onclick="window.location.href = 'availability'">Next</div>
            </div>
        </div>
    @endsection
