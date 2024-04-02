@extends('layout')
@section('content')
    <style>
        .gJyUFZ {
            padding: 0 0 0 16px;
            height: 50px;
            width: 100%;
            background-color: #2185C5;
        }

        .cjvDjC {
            border-bottom: 1px solid rgb(204, 204, 204);
            height: 40px;
            padding: 0px;
        }

        .eqRKgt {
            padding: 9px 16px;
            display: inline-block;
            font-size: 14px;
            position: relative;
            color: rgb(51, 51, 51);
            border-style: solid;
            border-width: 0px;
            border-color: rgb(33, 133, 197);
            text-decoration: none !important;
        }

        .eqRKgt:hover {
            color: rgb(51, 51, 51);
        }

        .captain-dashboards__sc-l574mi-2:hover {
            border-bottom: 2px solid;
            border-color: rgb(33, 133, 197);
        }

        .hZkVxy {
            box-sizing: border-box;
            flex: 0 0 auto;
            padding-right: 2.5rem;
            padding-left: 2.5rem;
        }



        .ibAHKx {
            font-size: 30px;
            padding: 40px 0px;
            line-height: 32px;
            display: inline-block;
        }

        .etvNyP {
            -webkit-box-pack: justify;
            justify-content: space-between;
        }

        .etvNyP {
            box-sizing: border-box;
            display: flex;
            flex: 0 1 auto;
            flex-flow: wrap;
            margin-right: -2rem;
            margin-left: -2rem;
        }




        /*Button*/
        .caBWeH {
            border: 1px solid rgb(33, 133, 197);
            color: rgb(33, 133, 197);
        }

        .dlQJAV {
            display: inline-block;
            background-color: rgb(255, 255, 255);
            font-size: 15px;
            font-weight: 700;
            border-radius: 3px;
            border: none;
            line-height: 1;
            padding: 13px 23px;
            cursor: pointer;
            outline: 0px;
            user-select: none;
            vertical-align: middle;
            border: 1px solid rgb(33, 133, 197);
            background-color: transparent;
            transition: background-color 0.2s ease;
        }

        .lfkIGt {
            margin: 0px;
            padding: 15px;
            flex: 0 0 auto;
            text-align: left;
        }

        .jBiRTY {
            font-weight: bold;
            padding: 0px 22px 0px 0px;
        }



        @media only screen and (min-width: 36em) {
            .hEfnWF {
                box-sizing: border-box;
                flex: 0 0 auto;
                padding-right: 1.5rem;
                padding-left: 1.5rem;
            }
        }

        svg:not(:root).svg-inline--fa,
        svg:not(:host).svg-inline--fa {
            overflow: visible;
            box-sizing: content-box;
        }

        .kpnrbJ {
            font-size: 125px;
            color: rgb(33, 133, 197);
        }

        @media only screen and (min-width: 36em) {
            .bWIXxf {
                flex-basis: 75%;
                max-width: 75%;
                display: block;
            }
        }

        .bWIXxf {
            box-sizing: border-box;
            flex: 0 0 auto;
            padding-right: 1.5rem;
            padding-left: 1.5rem;
        }

        b,
        optgroup,
        strong {
            font-weight: 700;
        }

        .iGOIid input:last-of-type,
        .iGOIid select:last-of-type,
        .iGOIid textarea:last-of-type {
            border-top-right-radius: 3px;
        }

        .iGOIid>input,
        .iGOIid>select {
            flex-basis: 0px;
            -webkit-box-flex: 1;
            flex-grow: 1;
            max-width: 100%;
        }

        .eQAPRL {
            height: 44px;
            width: 100%;
            padding-left: 12px;
            padding-right: 12px;
            font-size: 16px;
            background-color: rgb(255, 255, 255);
            outline: none;
            appearance: none;
            box-shadow: none;
            border-radius: 3px;
            border: 1px solid rgb(204, 204, 204);
        }

        .eGPOQh {
            background-color: rgb(33, 133, 197);
            border: 1px solid rgb(33, 133, 197);
            color: rgb(255, 255, 255);
        }

        .eGPOQh:hover {
            background-color: rgb(31, 111, 160);
            border: 1px solid rgb(33, 133, 197);
            color: rgb(255, 255, 255);
        }

        .cxtMOk {
            display: block;
            padding: 15px;
            flex: 0 0 auto;
        }

        .eDbSMH {
            flex: 1 1 auto;
            overflow-y: auto;
            padding: 15px;
            border-bottom: 1px solid rgb(230, 230, 230);
        }

        .hEfnWF {
            box-sizing: border-box;
            flex: 0 0 auto;
            padding-right: 1.5rem;
            padding-left: 1.5rem;
        }

        .bWIXxf {
            box-sizing: border-box;
            flex: 0 0 auto;
            padding-right: 1.5rem;
            padding-left: 1.5rem;
        }

        @media only screen and (min-width: 36em) {
            .bWIXxf {
                flex-basis: 75%;
                max-width: 75%;
                display: block;
            }
        }

        .bSfYSm {
            padding-top: 16px;
            margin-left: 50px;
        }

        .ijwHZv {
            padding-right: 10px;
        }

        .ijwHZv {
            display: inline-block;
            width: 150px;
        }

        .zfeyC {
            display: flex;
            font-weight: bold;
            border-bottom: 1px solid rgb(204, 204, 204);
            padding-bottom: 10px;
        }

        .dQSgMo {
            display: inline-block;
            width: 350px;
        }

        .lmGekf {
            display: inline-block;
            width: 220px;
        }

        .hQXcFd {
            display: inline-block;
            position: relative;
            width: 175px;
            margin-right: 64px;
        }

        .efOnYa {
            display: inline-block;
            width: 540px;
            position: relative;
        }

        .eFdBUd {
            display: inline-block;
            width: 170px;
        }

        .bSfYSm {
            padding-top: 16px;
        }

        .cwIbpN {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            font-weight: bold;
            padding: 7px 5px;
        }


        .sc-hKMtZM.sc-jqUVSM.dlQJAV.caBWeH:hover {
            background-color: rgb(33, 133, 197);
            color: white;
        }

        .cTKvOW {
            border: none;
            cursor: default;
            border-radius: 3px;
            color: rgb(119, 119, 119);
            background-color: rgb(245, 245, 245);
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
            width: 100%;
        }

        .cTKvOW.active {
          
            color: rgb(255, 255, 255);
            background-color: rgb(60, 118, 61);
        }

        .dLUqAb {
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            padding: 20px 0px;
            border-bottom: 1px solid rgb(204, 204, 204);
        }

        .dLUqAb {
            -webkit-box-pack: justify;
            justify-content: space-between;
        }

        .dLUqAb {
            margin-left: 20px;
        }


        .sc-hKMtZM.sc-jqUVSM.eUovri.caBWeH {
            width: 150px;
            font-weight: bold;
            background-color: white;
            color: rgb(33, 133, 197);
            padding: 10px 20px;
            border: 1px solid rgb(33, 133, 197);
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        .sc-hKMtZM.sc-jqUVSM.eUovri.caBWeH:hover {
            background-color: rgb(33, 133, 197);
            color: white;
        }

        .captain-dashboards__sc-1hizcyk-1.bSfYSm {
            overflow-x: auto;
            white-space: nowrap;
        }

        .hxclFM {
            color: black;
        }
    </style>

    @include('manage.new_listing')

    <div class="captain-dashboards__sc-l574mi-0 cjvDjC webview-hidden"><a class="eqRKgt" href="/manage/listings"
            style="border-bottom-width: 2px;">Listings</a>
        <a class="captain-dashboards__sc-l574mi-2 eqRKgt" href="/manage/notifications">Notifications</a>
    </div>

    <div class="sc-gsnTZi etvNyP">
        <div class="sc-dkzDqf hZkVxy">
            <div class="captain-dashboards__sc-fq2mdt-0 ibAHKx" style="margin-left: 10px"><strong>Listings</strong></div>
        </div>
        <div class="sc-dkzDqf hZkVxy" style="display: flex; justify-content: flex-end; align-items: center;">
            <button type="button" class="sc-hKMtZM sc-jqUVSM dlQJAV caBWeH" data-bs-toggle="modal"
                data-bs-target="#listingModal">Create another listing</button>
        </div>
        <div class="captain-dashboards__sc-1hizcyk-1 bSfYSm">
            <div class="captain-dashboards__sc-18e0oet-0 zfeyC">
                <div class="captain-dashboards__sc-1sek7qk-1 ijwHZv">Status</div>
                <div class="captain-dashboards__sc-1sek7qk-2 dQSgMo">Listing</div>
                <div class="captain-dashboards__sc-1sek7qk-3 lmGekf">Location</div>
                <div class="captain-dashboards__sc-1sek7qk-4 hQXcFd">Verification</div>
                <div class="captain-dashboards__sc-1sek7qk-5 efOnYa">Instant Book</div>
                <div class="captain-dashboards__sc-1sek7qk-7 eFdBUd">Action</div>
            </div>
        </div>
    </div>



    @foreach (\App\Models\Listing::where('user_id', Auth::id())->get() as $listing)
        <div class="captain-dashboards__sc-1mnyok8-0 dLUqAb">
            <div class="captain-dashboards__sc-1sek7qk-1 ijwHZv">
                <div class="captain-dashboards__sc-1hen0n5-0 eoZHLs">
                
                       
                            @if (
                                $listing->guest_capacity == null ||
                                    $listing->media->count() < 5 ||
                                    $listing->trips->count() < 1 ||
                                    ($listing->fishes != null && $listing->fishes()->count() < 5) ||
                                    ($listing->fishing_locations != null && $listing->fishing_locations()->count() < 1) ||
                                    ($listing->fishing_technique != null && $listing->fishing_technique()->count() < 1) ||
                                    $listing->city == null ||
                                    $listing->street_address == null ||
                                    $listing->postal_code == null ||
                                    $listing->title == null ||
                                    $listing->description == null ||
                                    $listing->calendar_availability == null ||
                                    $listing->booking_window == null ||
                                    $listing->week_start == null)

                                    <div class="sc-dwVMhp cTKvOW" color="#777777">
                                     <span class="sc-hKdnnL cwIbpN">
                                IN PROGESS
                                     </span>
                                    </div>
                            @else
                            <div class="sc-dwVMhp cTKvOW active" color="#777777">
                            <span class="sc-hKdnnL cwIbpN">
                                FINISHED
                            </span>
                            </div>
                            @endif
                       
                 
                </div>
            </div>
            <div class="captain-dashboards__sc-1sek7qk-2 dQSgMo">
                <a href="/manage/listings/{{ $listing->id }}/basicInfo" target="_blank" rel="noopener noreferrer"
                    class="sc-bZkfAO sc-ikZpkk captain-dashboards__sc-1mnyok8-1 fLrNHD loolwc kdOAzU">
                    <div class="captain-dashboards__sc-f55gpf-0 iKQKJR"></div>
                    <div class="captain-dashboards__sc-f55gpf-1 hxclFM">
                        <div><strong>{{ $listing->title }}</strong>&nbsp;</div>
                    </div>
                </a>
            </div>
            <div class="captain-dashboards__sc-1sek7qk-3 lmGekf">{{ $listing->city }}, {{ $listing->country }}</div>
            <div class="captain-dashboards__sc-1sek7qk-4 hQXcFd">/</div>
            <div class="captain-dashboards__sc-1sek7qk-5 efOnYa"> 
                @if ($listing -> instant_book == 1) ON
                @else OFF
                @endif
            </div>
            <div class="captain-dashboards__sc-1sek7qk-7 eFdBUd">
                <a href="/manage/listings/{{ $listing->id }}/basicInfo" target="_blank" rel="noopener noreferrer"
                    class="sc-bZkfAO sc-ikZpkk captain-dashboards__sc-1pxwam4-0 fLrNHD loolwc deXYJE">
                    <button type="button" class="sc-hKMtZM sc-jqUVSM eUovri caBWeH">Finish</button>
                </a>
            </div>
        </div>
    @endforeach

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
@endsection
