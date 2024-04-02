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

        /*Body*/
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

        *,
        :after,
        :before {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            background-color: #FFF;
            height: 100%;
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

        .component-margin-medium {
            margin: 0 0 10px 0;
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





        .fwgQQR {
            display: block;
            width: 100%;
            text-align: left;
            padding: 20px;
            border: 1px solid rgb(204, 204, 204);
            margin-bottom: 20px;
            border-radius: 3px;
            background: white;
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

        element.style {
            font-size: 16px;
        }

        label {
            font-weight: 400;
        }

        label {
            display: inline-block;
            max-width: 100%;
            margin-bottom: 5px;
        }

        b,
        optgroup,
        strong {
            font-weight: 700;
        }

        .ddPyHZ {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            font-weight: bold;
            padding: 7px 5px;
        }

        .kCJUgm {
            border: none;
            cursor: default;
            border-radius: 3px;
            color: rgb(60, 118, 61);
            background-color: rgb(225, 240, 216);
            display: inline-flex;
            outline: 0px;
            padding: 0px;
            line-height: 1;
            font-size: 12px;
            box-sizing: border-box;
            -webkit-box-align: center;
            align-items: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-box-pack: center;
            justify-content: center;
            text-decoration: none;
        }

        .sc-ezOQGI.kCJUgm.listing__sc-9wibq3-11 {
            margin-left: 15px;
        }


        .NXBty {
            margin-left: 30px;
            font-size: 14px;
        }

        .instant-book-icon {
            color: #f0ad4e;
        }

        .listing input[type="radio"]+label:before {
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 9px;
            content: "";
            display: inline-block;
            font-size: 22px;
            width: 18px;
            height: 18px;
            line-height: 18px;
            margin: -2px 10px 0 0;
            text-align: center;
            vertical-align: middle;
        }

        button,
        html input[type=button],
        input[type=reset],
        input[type=submit] {
            -webkit-appearance: button;
            cursor: pointer;
        }

        .inpt {
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 9px;
            content: "";
            display: inline-block;
            font-size: 22px;
            width: 18px;
            height: 18px;
            line-height: 18px;
            margin: -2px 10px 0 0;
            text-align: center;
            vertical-align: middle;
        }

        .fmaGQO {
            font-size: 20px;
            margin-top: 32px;
            margin-bottom: 24px;
            font-weight: 700;
        }

        .iiyrGM {
            border: 1px solid rgb(204, 204, 204);
            border-radius: 4px;
            padding: 24px 16px;
        }

        .jPCDOX {
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            flex-direction: row;
        }

        .lezTEd {
            margin-bottom: 14px;
            margin-top: 4px;
            color: rgb(119, 119, 119);
        }

        .sc-iBYQkv.sc-eDWCr.krQtnJ.iCmIXF {
            border: 1px solid rgb(33, 133, 197);
            color: rgb(33, 133, 197);
            display: inline-block;
            background-color: rgb(255, 255, 255);
            font-size: 16px;
            font-weight: 700;
            border-radius: 3px;
            line-height: 1;
            padding: 13px 23px;
            cursor: pointer;
            outline: 0px;
            user-select: none;
            vertical-align: middle;
            transition: color 0.3s, background-color 0.3s;
        }

        .sc-iBYQkv.sc-eDWCr.krQtnJ.iCmIXF:hover {
            color: white;
            background-color: rgb(33, 133, 197);
        }

        .iBfvwL {
            padding: 10px 0px;
            width: 100%;
            align-items: center;
            display: flex;
            margin-top: 2px;
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

        .cbCCGQ {
            cursor: pointer;
            font-weight: normal;
            vertical-align: top;
            -webkit-tap-highlight-color: transparent;
            margin: 0px 0px 0px -9px;
            width: 100%;
            align-items: center;
            display: flex;
        }

        *,
        :after,
        :before {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }



        .fNwSVA {
            width: 100%;
            height: 100%;
            margin-left: 0.5px;
            margin-top: 0.5px;
            display: flex;
            -webkit-box-align: inherit;
            align-items: inherit;
            -webkit-box-pack: inherit;
            justify-content: inherit;
            width: 20px;
            height: 20px;
            padding: 6px;
            border-radius: 50%;
            display: flex;
            align-items: center;
        }



        .ddPyHZ {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            font-weight: bold;
            padding: 7px 5px;
        }

        .hoIFSD {
            margin-top: 24px;
            display: flex;
            -webkit-box-pack: end;
            justify-content: end;
        }

        .fzayYu {
            border: 1px solid transparent;
            color: rgb(33, 133, 197);
        }

        .fzayYu:hover {
            color: rgb(29, 102, 148);
            /* Tmavší odstieň farby pri prejdení kurzorom */
            text-decoration: underline;
            /* Pridanie podčiarknutia */
        }

        .krQtnJ {
            display: inline-block;
            background-color: rgb(255, 255, 255);
            font-size: 16px;
            font-weight: 700;
            border-radius: 3px;
            border: none;
            line-height: 1;
            padding: 13px 23px;
            cursor: pointer;
            outline: 0px;
            user-select: none;
            vertical-align: middle;
        }

        .dqPjgi {
            background-color: rgb(33, 133, 197);
            border: 1px solid rgb(33, 133, 197);
            color: rgb(255, 255, 255);
        }

        .dqPjgi:hover {
            background-color: rgb(29, 102, 148);
            /* Tmavší odstieň farby pri prejdení kurzorom */
        }

        .lezTEd {
            margin-bottom: 14px;
            margin-top: 4px;
            color: rgb(119, 119, 119);
        }

        .bduqqe {
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        .iOIWLO {
            display: flex;
            padding: 24px 16px;
            -webkit-box-align: center;
            align-items: center;
            gap: 4px;
            background-color: rgb(245, 245, 245);
            border-radius: 4px;
            flex-direction: column;
        }

        .eqRYHZ {
            display: flex;
            flex-direction: row;
            width: 100%;
        }

        .gsLIEA {
            color: rgb(33, 133, 197);
            cursor: pointer;
            text-decoration: none;
        }

        .gsLIEA:hover {
            color: rgb(29, 102, 148);
            text-decoration: none;
        }

        .fIAjxH {
            width: 100%;
            color: rgb(119, 119, 119);
        }

        .cywHYW {
            margin-left: auto;
        }

        .iULsAs {
            display: flex;
            flex-direction: row;
            width: 100%;
        }

        .hofkon {
            margin-left: auto;
        }


        .hofkon:hover {
            color: rgb(29, 102, 148);
            text-decoration: none;
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

        .selectable {
            cursor: pointer;
        }

        .pull-right {
            float: right !important;
        }

        .text-center {
            text-align: center;
        }


        /*Modal*/
        .default-modal-body {
            font-size: 14px;
        }

        .default-modal-body {
            padding: 35px 25px 24px !important;
        }

        b,
        optgroup,
        strong {
            font-weight: 700;
        }

        .component-margin-medium {
            margin: 0 0 10px 0;
        }

        .font-16 {
            font-size: 16px;
        }

        .component-margin-small {
            margin: 0 0 5px 0;
        }

        .listing label {
            font-weight: 400;
        }

        label {
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

        .component-margin-medium {
            margin: 0 0 10px 0;
        }

        .font-16 {
            font-size: 16px;
        }

        *,
        :after,
        :before {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .text-right {
            text-align: right;
        }

        .default-modal-buttons {
            width: 80px;
        }

        .btn-primary {
            color: #fff;
            background-color: #2185C5;
            border-color: #1d76af;
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

        .svg-inline--fa {
            display: inline-block;
            font-size: inherit;
            height: 1em;
            overflow: visible;
            vertical-align: -0.125em;
        }

        .inactive_instant {
            cursor: pointer;
        }
    </style>

    <div class="captain-dashboards__sc-l574mi-0 cjvDjC webview-hidden"><a class="eqRKgt" href="/manage/listings"
            style="border-bottom-width: 2px;">Back to Listings</a>
    </div>


    @include('details.listing_menu')


    <div id="scrollable-content" class="scrollable-div">
        <div class="center-container">
            <section class="pages-container-desktop" data-testid="listing-availability-container">
                <div class="text-muted header-desktop">Availability</div>
                <div class="listing__sc-zxhiuj-1 hlrQeR">
                    <section>
                        <div class="component-margin-medium label-header-desktop">
                            <strong>Instant Book&nbsp;<span class="instant-book-icon"><svg aria-hidden="true"
                                        focusable="false" data-prefix="fas" data-icon="bolt"
                                        class="svg-inline--fa fa-bolt fa-w-10 " role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                        <path fill="currentColor"
                                            d="M296 160H180.6l42.6-129.8C227.2 15 215.7 0 200 0H56C44 0 33.8 8.9 32.2 20.8l-32 240C-1.7 275.2 9.5 288 24 288h118.7L96.6 482.5c-3.6 15.2 8 29.5 23.3 29.5 8.4 0 16.4-4.4 20.8-12l176-304c9.3-15.9-2.2-36-20.7-36z">
                                        </path>
                                    </svg></span></strong>
                        </div>
                        <p class="text-muted">70% of customers choose Instant Book. Get more bookings, a ranking boost and
                            spend more time fishing.</p>


                        <form action="{{ route('update_availability', $listing->id) }}" method="POST">
                            @csrf
                            <div class="component-margin-large">
                                <button class="listing__sc-tuz6do-1 fwgQQR">
                                    <input @if ($listing->instant_book == 1) checked @endif type="radio" class="inpt"
                                        id="active-instant" name="instantBook" value="1">
                                    <label for="active-instant" style="font-size: 16px;">
                                        <b style="margin-right: 10px;">Instant Book on</b>
                                        <div class="sc-ezOQGI kCJUgm" color="#3c763d"><span
                                                class="sc-kMjNwy ddPyHZ">RECOMMENDED</span></div>
                                    </label>
                                    <div class="listing__sc-tuz6do-0 NXBty">Customers can book your available dates
                                        instantly.</div>
                                </button>
                                <button class="listing__sc-tuz6do-1 fwgQQR">
                                    <input @if ($listing->instant_book == 0) checked @endif type="radio" class="inpt"
                                        id="inactive-instant" name="instantBook" value="0">
                                    <label for="inactive-instant" style="font-size: 16px;">
                                        <b>Instant Book off</b>
                                    </label>
                                    <div class="listing__sc-tuz6do-0 NXBty">You'll need to manually review every request
                                        within 24 hours.</div>
                                </button>
                            </div>
                            <div class="listing__sc-9wibq3-13 hoIFSD"><button id="saveButton1" type="submit"
                                    class="sc-iBYQkv sc-ftTHYK krQtnJ dqPjgi">Save</button></div>
                        </form>
                    </section>


                    <form action="{{ route('update_availability', $listing->id) }}" method="POST">
                        @csrf
                        <div class="listing__sc-zxhiuj-0 fmaGQO">Calendar availability</div>
                        <div class="listing__sc-9wibq3-15 iiyrGM">
                            <div class="listing__sc-1lmvbc-5 jPCDOX">
                                <div class="listing__sc-1lmvbc-3 bduqqe"><b>Advance notice</b>
                                    <div class="listing__sc-9wibq3-14 lezTEd">How much notice do you need between a customer
                                        booking and the departure time of the trip?</div>
                                </div>
                                <div class="listing__sc-1lmvbc-4 hofkon">
                                    <button type="button" id="toggleButton"
                                        class="sc-iBYQkv sc-eDWCr krQtnJ iCmIXF">Set</button>
                                </div>
                            </div>

                            <div id="hiddenContent" style="display: none;">
                                <div class="listing__sc-1lmvbc-0 kOoVfa">
                                    <div class="listing__sc-1lmvbc-2 VddEl">
                                        <div class="sc-jNJNQp icwIWU">
                                            <label class="sc-GhhNo cbCCGQ">
                                                <span class="sc-fXqpFg eiuMvt">
                                                    <span class="sc-jIILKH kTJfR">
                                                        <span class="sc-UpCWa KOPzU"></span>
                                                        <input @if ($listing->calendar_availability == 0) checked @endif
                                                            id="sameDay" name="advance_notice" type="radio"
                                                            class="sc-ZqFbI fNwSVA" value="0">
                                                    </span>
                                                </span>
                                                <span class="sc-dwnOUR iBfvwL">Customers can book on the same day</span>
                                            </label>

                                            <label class="sc-GhhNo cbCCGQ">
                                                <span class="sc-fXqpFg eiuMvt">
                                                    <span class="sc-jIILKH kTJfR">
                                                        <span class="sc-UpCWa jjbSlt"></span>
                                                        <input @if ($listing->calendar_availability == 12) checked @endif
                                                            id="atLeast12" name="advance_notice" type="radio"
                                                            class="sc-ZqFbI fNwSVA" value="12">
                                                    </span>
                                                </span>
                                                <span class="sc-dwnOUR iBfvwL">At least 12 hours</span>
                                            </label>

                                            <label class="sc-GhhNo cbCCGQ">
                                                <span class="sc-fXqpFg eiuMvt">
                                                    <span class="sc-jIILKH kTJfR">
                                                        <span class="sc-UpCWa jjbSlt"></span>
                                                        <input @if ($listing->calendar_availability == 24) checked @endif
                                                            id="atLeast24" name="advance_notice" type="radio"
                                                            class="sc-ZqFbI fNwSVA" value="24">
                                                    </span>
                                                </span>
                                                <span class="sc-dwnOUR iBfvwL">At least 24 hours</span>
                                            </label>

                                            <label class="sc-GhhNo cbCCGQ">
                                                <span class="sc-fXqpFg eiuMvt">
                                                    <span class="sc-jIILKH kTJfR">
                                                        <span class="sc-UpCWa jjbSlt"></span>
                                                        <input @if ($listing->calendar_availability == 48) checked @endif
                                                            id="atLeast48" name="advance_notice" type="radio"
                                                            class="sc-ZqFbI fNwSVA" value="48">
                                                    </span>
                                                </span>
                                                <span class="sc-dwnOUR iBfvwL">At least 48 hours</span>
                                            </label>

                                            <label class="sc-GhhNo cbCCGQ">
                                                <span class="sc-fXqpFg eiuMvt">
                                                    <span class="sc-jIILKH kTJfR">
                                                        <span class="sc-UpCWa jjbSlt"></span>
                                                        <input @if ($listing->calendar_availability == 72) checked @endif
                                                            id="atLeast72" name="advance_notice" type="radio"
                                                            class="sc-ZqFbI fNwSVA" value="72">
                                                    </span>
                                                </span>
                                                <span class="sc-dwnOUR iBfvwL">At least 72 hours</span>
                                            </label>

                                            <label class="sc-GhhNo cbCCGQ">
                                                <span class="sc-fXqpFg eiuMvt">
                                                    <span class="sc-jIILKH kTJfR">
                                                        <span class="sc-UpCWa jjbSlt"></span>
                                                        <input @if ($listing->calendar_availability == 168) checked @endif
                                                            id="atLeast168" name="advance_notice" type="radio"
                                                            class="sc-ZqFbI fNwSVA" value="168">
                                                    </span>
                                                </span>
                                                <span class="sc-dwnOUR iBfvwL">At least 168 hours (7 days)</span>
                                            </label>


                                        </div>
                                        <div class="listing__sc-9wibq3-13 hoIFSD">
                                            <button type="button"
                                                class="sc-iBYQkv sc-bjfHbI krQtnJ fzayYu">Cancel</button>
                                            <button id="saveButton2" type="submit"
                                                class="sc-iBYQkv sc-ftTHYK krQtnJ dqPjgi">Save</button>
                                        </div>
                                        <form>
                                    </div>
                                </div>
                            </div>

                            <script>
                               
                                var toggleButton = document.getElementById('toggleButton');
                                var hiddenContent = document.getElementById('hiddenContent');

                                toggleButton.addEventListener('click', function() {
                                 
                                    hiddenContent.style.display = 'block';
                                 
                                    toggleButton.style.display = 'none';
                                });

                                var cancelButton = document.querySelector('.listing__sc-9wibq3-13.hoIFSD button.sc-bjfHbI');
                                var saveButton = document.querySelector('.listing__sc-9wibq3-13.hoIFSD button.sc-ftTHYK');

                                cancelButton.addEventListener('click', function() {
                                    hiddenContent.style.display = 'none';
                                    toggleButton.style.display = 'block';
                                });

                                saveButton.addEventListener('click', function() {
                                    hiddenContent.style.display = 'none';
                                    toggleButton.style.display = 'block';
                                });
                            </script>
                        </div>
                        <div style="margin-top: 16px; margin-bottom: 16px;">
                            <div class="listing__sc-9wibq3-15 iiyrGM">
                                <div class="listing__sc-1lmvbc-5 jPCDOX">
                                    <div class="listing__sc-1lmvbc-3 bduqqe"><b>Booking window</b>
                                        <div class="listing__sc-9wibq3-14 lezTEd">How far in advance can customers book a
                                            trip?
                                        </div>
                                    </div>
                                    <div class="listing__sc-1lmvbc-4 hofkon">
                                        <button type="button" id="toggleButton2"
                                            class="sc-iBYQkv sc-eDWCr krQtnJ iCmIXF">Set</button>
                                    </div>
                                </div>
                                <form action="{{ route('update_availability', $listing->id) }}" method="POST">
                                    @csrf
                                    <div id="hiddenContent2" style="display: none;">
                                        <div class="listing__sc-1lmvbc-0 jrftMz">
                                            <div class="listing__sc-1lmvbc-2 VddEl">
                                                <div class="sc-jNJNQp icwIWU">
                                                    <label class="sc-GhhNo cbCCGQ"
                                                        style="display: flex; align-items: center; margin-left: 1px;">
                                                        <input @if ($listing->booking_window == 12) checked @endif
                                                            id="booking12" name="booking_window" type="radio"
                                                            class="sc-ZqFbI fNwSVA" value="12"
                                                            style="margin-right: 5px;">
                                                        <span class="sc-dwnOUR iBfvwL">12 months in advance</span>
                                                    </label>

                                                    <label class="sc-GhhNo cbCCGQ"
                                                        style="display: flex; align-items: center; margin-left: 1px;">
                                                        <input @if ($listing->booking_window == 9) checked @endif
                                                            id="booking9" name="booking_window" type="radio"
                                                            class="sc-ZqFbI fNwSVA" value="9"
                                                            style="margin-right: 5px;">
                                                        <span class="sc-dwnOUR iBfvwL">9 months in advance</span>
                                                    </label>

                                                    <label class="sc-GhhNo cbCCGQ"
                                                        style="display: flex; align-items: center; margin-left: 1px;">
                                                        <input @if ($listing->booking_window == 6) checked @endif
                                                            id="booking6" name="booking_window" type="radio"
                                                            class="sc-ZqFbI fNwSVA" value="6"
                                                            style="margin-right: 5px;">
                                                        <span class="sc-dwnOUR iBfvwL">6 months in advance</span>
                                                    </label>

                                                    <label class="sc-GhhNo cbCCGQ"
                                                        style="display: flex; align-items: center; margin-left: 1px;">
                                                        <input @if ($listing->booking_window == 3) checked @endif
                                                            id="booking3" name="booking_window" type="radio"
                                                            class="sc-ZqFbI fNwSVA" value="3"
                                                            style="margin-right: 5px;">
                                                        <span class="sc-dwnOUR iBfvwL">3 months in advance</span>
                                                    </label>
                                                </div>


                                                <div class="listing__sc-9wibq3-13 hoIFSD"><button type="button"
                                                        class="cancel2 sc-iBYQkv sc-bjfHbI krQtnJ fzayYu">Cancel</button>
                                                    <button id="saveButton3" type="submit"
                                                        class="save2 sc-iBYQkv sc-ftTHYK krQtnJ dqPjgi">Save</button>
                                                </div>
                                </form>
                            </div>
                        </div>
                </div>
        </div>
        <script>
            var toggleButton2 = document.getElementById('toggleButton2');
            var hiddenContent2 = document.getElementById('hiddenContent2');

            toggleButton2.addEventListener('click', function() {
                hiddenContent2.style.display = 'block';
                toggleButton2.style.display = 'none';
            });

            var cancelButton2 = document.querySelector('.listing__sc-9wibq3-13.hoIFSD button.sc-bjfHbI.cancel2');
            var saveButton2 = document.querySelector('.listing__sc-9wibq3-13.hoIFSD button.sc-ftTHYK.save2');

            cancelButton2.addEventListener('click', function() {
                hiddenContent2.style.display = 'none';
                toggleButton2.style.display = 'block';
            });

            saveButton2.addEventListener('click', function() {
                hiddenContent2.style.display = 'none';
                toggleButton2.style.display = 'block';
            });
        </script>
    </div>
    <div class="listing__sc-9wibq3-15 iiyrGM">
        <div class="listing__sc-1lmvbc-1 iULsAs"><b>Week start</b>
            <div class="listing__sc-1lmvbc-4 hofkon"><a id="toggleButton3"
                    class="sc-bcXHqe sc-dkrFOg NcSfy gsLIEA"><b>Edit</b></a></div>




        </div>
        <div class="listing__sc-9wibq3-14 kuWnPq">Monday is the first day of the week on your
            FishingBooker
            calendar.</div>

        <form action="{{ route('update_availability', $listing->id) }}" method="POST">
            @csrf
            <div id="hiddenContent3" style="display: none;">
                <div class="listing__sc-1lmvbc-0 jrftMz">
                    <div class="listing__sc-1lmvbc-2 VddEl">
                        <div class="sc-jNJNQp icwIWU">

                            <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center; margin-left: 1px;">
                                <input @if ($listing->week_start == 'Sunday') checked @endif id="weekSunday"
                                    name="week_start" type="radio" class="sc-ZqFbI fNwSVA" value="Sunday"
                                    style="margin-right: 5px;">
                                <span class="sc-dwnOUR iBfvwL">Sunday</span>
                            </label>

                            <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center; margin-left: 1px;">
                                <input @if ($listing->week_start == 'Monday') checked @endif id="weekMonday"
                                    name="week_start" type="radio" class="sc-ZqFbI fNwSVA" value="Monday"
                                    checked="" style="margin-right: 5px;">
                                <span class="sc-dwnOUR iBfvwL">Monday</span>
                            </label>

                            <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center; margin-left: 1px;">
                                <input @if ($listing->week_start == 'Saturday') checked @endif id="weekSaturday"
                                    name="week_start" type="radio" class="sc-ZqFbI fNwSVA" value="Saturday"
                                    style="margin-right: 5px;">
                                <span class="sc-dwnOUR iBfvwL">Saturday</span>
                            </label>

                        </div>
                        <div class="listing__sc-9wibq3-13 hoIFSD"><button type="button"
                                class="cancel3 sc-iBYQkv sc-bjfHbI krQtnJ fzayYu">Cancel</button><button id="saveButton4"
                                type="submit" class="save3 sc-iBYQkv sc-ftTHYK krQtnJ dqPjgi">Save</button>
                        </div>
        </form>
    </div>
    </div>
    </div>
    </div>

    <script>
        var toggleButton3 = document.getElementById('toggleButton3');
        var hiddenContent3 = document.getElementById('hiddenContent3');

        toggleButton3.addEventListener('click', function() {
            hiddenContent3.style.display = 'block';
            toggleButton3.style.display = 'none';
        });

        var cancelButton3 = document.querySelector('.listing__sc-9wibq3-13.hoIFSD button.sc-bjfHbI.cancel3');
        var saveButton3 = document.querySelector('.listing__sc-9wibq3-13.hoIFSD button.sc-ftTHYK.save3');

        cancelButton3.addEventListener('click', function() {
            hiddenContent3.style.display = 'none';
            toggleButton3.style.display = 'block';
        });

        saveButton3.addEventListener('click', function() {
            hiddenContent3.style.display = 'none';
            toggleButton3.style.display = 'block';
        });
    </script>

    </div>
    </section>
    <div class="listing__sc-qdm6vt-3 jeHyJy text-muted footer-container-desktop">
        <hr>
        <div data-testid="next-step-btn" class="pull-right text-center next-desktop selectable next-button-available"
            onclick="window.location.href = 'trips'">Next</div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
@endsection
