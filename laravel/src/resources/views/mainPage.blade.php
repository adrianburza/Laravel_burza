@extends('layout')
@section('content')
    <div class="sc-e579117f-0 bDsXVP">
        <picture>
            <source media="(min-width: 992px)" srcset="https://static.fishingbooker.com/public/images/home/background-lg.jpg">
            <source media="(min-width: 768px)" srcset="https://static.fishingbooker.com/public/images/home/background-md.jpg">
            <img src="https://static.fishingbooker.com/public/images/home/background-sm.jpg" class="sc-e579117f-5 iVIunx">
        </picture>

        <div class="sc-e579117f-1 dEHmGL">
            <div class="sc-c2119f28-0 sc-e579117f-2 jZmdif koBqJs">
                <div class="fresnel-container fresnel-greaterThanOrEqual-md fresnel-:Rchdam:">
                    <div class="sc-e579117f-3 csRuJl">
                        <div class="sc-7ef74824-0 gydNva search-form" data-testid="search-form-container">
                            <div class="fresnel-container fresnel-greaterThanOrEqual-md fresnel-:rd:">
                                <h1 data-testid="search-form-heading-title"
                                    class="sc-ad108f7f-0 sc-7ef74824-1 dEIdij SgrOB">Book your next fishing
                                    trip
                                </h1>
                            </div>
                            <div style="margin-top: 16px;">
                                <p class="sc-ad108f7f-3 sc-ad108f7f-4 sc-7ef74824-3 btlYwf fLIhvM ceXOrv">
                                    Destination, charter, or captain name</p>
                                <div class="sc-6a846889-2 nTOSW">
                                    <div class="sc-1fbab04e-0 sc-df79aabc-0 sc-6a846889-0 OgBcn dgVJSy iRjvvJ">
                                        <input placeholder="Your next fishing destination"
                                            data-testid="search-form-input-field"
                                            class="sc-fbd04bbc-0 sc-6a846889-7 SBxkp iMAYdS" value="">
                                    </div>
                                </div>
                            </div>
                            <div style="margin-top: 16px;">
                                <p class="sc-ad108f7f-3 sc-ad108f7f-4 sc-7ef74824-3 btlYwf fLIhvM ceXOrv">Trip
                                    Date
                                </p>
                                <div tabindex="-1" class="sc-1fbab04e-0 sc-df79aabc-0 sc-3debc663-0 OgBcn dMcays ikrbit"
                                    data-testid="search-form-trip-date-input"><input placeholder="Select date"
                                        readonly="" data-date="" class="sc-fbd04bbc-0 sc-3debc663-1 gWshhh ebyPU"
                                        value=""><span class="sc-1fbab04e-1 sc-3debc663-3 SUpRP gErnNY"><svg
                                            aria-hidden="true" focusable="false" data-prefix="far" data-icon="calendar-days"
                                            class="svg-inline--fa fa-calendar-days fa-w-14 sc-1fbab04e-3 sc-3debc663-2 jmonah ckJsWZ"
                                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path fill="currentColor"
                                                d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192h80v56H48V192zm0 104h80v64H48V296zm128 0h96v64H176V296zm144 0h80v64H320V296zm80-48H320V192h80v56zm0 160v40c0 8.8-7.2 16-16 16H320V408h80zm-128 0v56H176V408h96zm-144 0v56H64c-8.8 0-16-7.2-16-16V408h80zM272 248H176V192h96v56z">
                                            </path>
                                        </svg></span></div>
                            </div>
                            <div style="margin-top: 16px;"><label data-testid="search-form-group-size-label"
                                    class="sc-ad108f7f-3 sc-ad108f7f-4 sc-7ef74824-3 btlYwf fLIhvM ceXOrv">Group
                                    Size</label>
                                <div class="sc-ff24bce2-0 ldzso">
                                    <div class="sc-1fbab04e-0 sc-df79aabc-0 HmfIq dMcays"><input
                                            id="group-size-picker-input" placeholder="2 adults • 0 children" readonly=""
                                            data-persons="2" data-children="0" data-adults="2"
                                            class="sc-fbd04bbc-0 sc-89a94aee-0 sc-89a94aee-1 gKWUkO logEZF lxxJd"
                                            value="2 adults • 0 children"><span
                                            class="sc-1fbab04e-1 sc-89a94aee-9 SUpRP jnmozd"><svg aria-hidden="true"
                                                focusable="false" data-prefix="fas" data-icon="user"
                                                class="svg-inline--fa fa-user fa-w-14 sc-1fbab04e-3 sc-89a94aee-8 jmonah ifTOkT"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path fill="currentColor"
                                                    d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                                </path>
                                            </svg></span></div>
                                </div>
                            </div>
                            <div style="margin-top: 24px;"><a href="charters/search"
                                    data-testid="search-form-check-availability-button" type="button"
                                    class="sc-e34bd1e5-0 sc-4bbe1ea8-0 sc-7ef74824-2 hwkCTO fEEqcX gUJqrO">Check
                                    availability</a></div><input type="hidden" data-testid="search-form-group-size-persons"
                                value="2"><input type="hidden" data-testid="search-form-group-size-children"
                                value="0">
                        </div>
                    </div>
                </div>
            </div>
            <div class="fresnel-container fresnel-lessThan-md fresnel-:Rkhdam:"></div>
        </div>
    </div>
    <div class="fresnel-container fresnel-lessThan-md fresnel-:R11dam:"></div>



    <div class="formular">
        <div class="sc-7ef74824-0 gydNva search-form" data-testid="search-form-container">
            <h1 data-testid="search-form-heading-title" class="sc-ad108f7f-0 sc-7ef74824-1 dEIdij SgrOB">Book your next
                fishing
                trip
            </h1>
            <div style="margin-top: 16px;">
                <p class="sc-ad108f7f-3 sc-ad108f7f-4 sc-7ef74824-3 btlYwf fLIhvM ceXOrv">
                    Destination, charter, or captain name</p>
                <div class="sc-6a846889-2 nTOSW">
                    <div class="sc-1fbab04e-0 sc-df79aabc-0 sc-6a846889-0 OgBcn dgVJSy iRjvvJ">
                        <input placeholder="Your next fishing destination" data-testid="search-form-input-field"
                            class="sc-fbd04bbc-0 sc-6a846889-7 SBxkp iMAYdS" value="">
                    </div>
                </div>
            </div>
            <div style="margin-top: 16px;">
                <p class="sc-ad108f7f-3 sc-ad108f7f-4 sc-7ef74824-3 btlYwf fLIhvM ceXOrv">Trip
                    Date
                </p>
                <div tabindex="-1" class="sc-1fbab04e-0 sc-df79aabc-0 sc-3debc663-0 OgBcn dMcays ikrbit"
                    data-testid="search-form-trip-date-input"><input placeholder="Select date" readonly=""
                        data-date="" class="sc-fbd04bbc-0 sc-3debc663-1 gWshhh ebyPU" value=""><span
                        class="sc-1fbab04e-1 sc-3debc663-3 SUpRP gErnNY"><svg aria-hidden="true" focusable="false"
                            data-prefix="far" data-icon="calendar-days"
                            class="svg-inline--fa fa-calendar-days fa-w-14 sc-1fbab04e-3 sc-3debc663-2 jmonah ckJsWZ"
                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="currentColor"
                                d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192h80v56H48V192zm0 104h80v64H48V296zm128 0h96v64H176V296zm144 0h80v64H320V296zm80-48H320V192h80v56zm0 160v40c0 8.8-7.2 16-16 16H320V408h80zm-128 0v56H176V408h96zm-144 0v56H64c-8.8 0-16-7.2-16-16V408h80zM272 248H176V192h96v56z">
                            </path>
                        </svg></span></div>
            </div>
            <div style="margin-top: 16px;"><label data-testid="search-form-group-size-label"
                    class="sc-ad108f7f-3 sc-ad108f7f-4 sc-7ef74824-3 btlYwf fLIhvM ceXOrv">Group
                    Size</label>
                <div class="sc-ff24bce2-0 ldzso">
                    <div class="sc-1fbab04e-0 sc-df79aabc-0 HmfIq dMcays"><input id="group-size-picker-input"
                            placeholder="2 adults • 0 children" readonly="" data-persons="2" data-children="0"
                            data-adults="2" class="sc-fbd04bbc-0 sc-89a94aee-0 sc-89a94aee-1 gKWUkO logEZF lxxJd"
                            value="2 adults • 0 children"><span class="sc-1fbab04e-1 sc-89a94aee-9 SUpRP jnmozd"><svg
                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user"
                                class="svg-inline--fa fa-user fa-w-14 sc-1fbab04e-3 sc-89a94aee-8 jmonah ifTOkT"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path fill="currentColor"
                                    d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                </path>
                            </svg></span></div>
                </div>
            </div>
            <div style="margin-top: 24px;"><a href="charters/search" data-testid="search-form-check-availability-button"
                    type="button" class="sc-e34bd1e5-0 sc-4bbe1ea8-0 sc-7ef74824-2 hwkCTO fEEqcX gUJqrO">Check
                    availability</a></div><input type="hidden" data-testid="search-form-group-size-persons"
                value="2"><input type="hidden" data-testid="search-form-group-size-children" value="0">
        </div>
    </div>





    <div class="container_second">
        <div class="slider-wrapper">
            <h3 class="sc-ad108f7f-2 sc-2f490a4-0 iHiFgZ bSvfnR">Exciting fishing destinations close to you</h3>
            <div class="image-list">
                <div class="sc-2f490a4-1 cZrFAX">
                    <div class="sc-ca150323-0 dpyxok sc-e01b5760-0 UGYOv" elevation="0">
                        <div class="sc-bd4edd0a-5 cuapMn">
                            <a href="destinations/location/hu/keszthely" data-testid="nearby-destination-card-0"
                                class="sc-bd4edd0a-1 cfhDGJ">
                                <img src="https://static.fishingbooker.com/public/images/destination/baners/8d26196105e45841b3c27b6ec7c8e44d.jpg"
                                    alt="Keszthely" class="sc-bd4edd0a-4 eMFxRa">
                                <div class="sc-bd4edd0a-3 jveQTG">
                                    <h2 class="sc-ad108f7f-1 sc-bd4edd0a-2 inFPlS bXNxTt">Keszthely
                                        <img src="https://static.fishingbooker.com/public/img/icons/flags/hu-flag.png"
                                            alt="Keszthely" width="24" height="24">
                                    </h2>
                                    <p class="sc-ad108f7f-3 irTMHP">1 fishing charter</p>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="sc-2f490a4-1 cZrFAX">
                    <a href="destinations/location/si/murska-sobota" data-testid="nearby-destination-card-1"
                        class="sc-bd4edd0a-1 cfhDGJ">
                        <div class="sc-ca150323-0 dpyxok sc-e01b5760-0 UGYOv" elevation="0">
                            <div class="sc-bd4edd0a-5 cuapMn">
                                <img src="https://static.fishingbooker.com/public/images/destination/baners/904046a3533fc70e6901e4216db5406f.jpg"
                                    alt="Murska Sobota" class="sc-bd4edd0a-4 eMFxRa">
                                <div class="sc-bd4edd0a-3 jveQTG">
                                    <h2 class="sc-ad108f7f-1 sc-bd4edd0a-2 inFPlS bXNxTt">Murska Sobota
                                        <img src="https://static.fishingbooker.com/public/img/icons/flags/si-flag.png"
                                            alt="Murska Sobota" width="24" height="24">
                                    </h2>
                                    <p class="sc-ad108f7f-3 irTMHP">1 fishing charter</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="sc-2f490a4-1 cZrFAX">
                    <a href="destinations/location/si/krka" data-testid="nearby-destination-card-2"
                        class="sc-bd4edd0a-1 cfhDGJ">
                        <div class="sc-ca150323-0 dpyxok sc-e01b5760-0 UGYOv" elevation="0">
                            <div class="sc-bd4edd0a-5 cuapMn">
                                <img src="https://static.fishingbooker.com/public/images/destination/baners/1e176071e819cfac7ba3da4f834124b4.jpg"
                                    alt="Krka" class="sc-bd4edd0a-4 eMFxRa">
                                <div class="sc-bd4edd0a-3 jveQTG">
                                    <h2 class="sc-ad108f7f-1 sc-bd4edd0a-2 inFPlS bXNxTt">Krka
                                        <img src="https://static.fishingbooker.com/public/img/icons/flags/si-flag.png"
                                            alt="Krka" width="24" height="24">
                                    </h2>
                                    <p class="sc-ad108f7f-3 irTMHP">2 fishing charters</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>



            </div>
        </div>
        <div class="slider-scrollbar">
            <div class="scrollbar-track">
                <div class="scrollbar-thumb"></div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/script_slider.js') }}" defer></script>


    <div style="margin-top:40px">
        <div class="sc-686a1dc7-0 bUBvMs">
            <div class="sc-c2119f28-0 lgMvXM">
                <div class="sc-fc4618c-0 kqpcid">
                    <div class="sc-8903e72c-0 fcSVSC">
                        <div class="sc-686a1dc7-1 sc-686a1dc7-2 jXbBlk jhAXkH">
                            <div class="sc-686a1dc7-4 iSDNJd">
                                <div class="sc-686a1dc7-5 cPZcWT">FishingBooker – the world's largest online
                                    travel
                                    fishing company</div>
                                <div class="sc-cfc62e76-0 WvjSB">
                                    <div class="sc-cfc62e76-1 dcagMw"><svg width="24" height="24"
                                            focusable="false" viewBox="0 0 15 15" role="img"
                                            xmlns="http://www.w3.org/2000/svg" class="sc-d6fa761b-0 iNhtZO">
                                            <path
                                                d="M15 5.78977H9.31583L7.55601 0L5.76668 5.78977H0L4.67177 9.29901L2.91737 15L7.52349 11.4206L12.1483 14.964L10.3963 9.2707L15 5.78977V5.78977Z">
                                            </path>
                                        </svg></div>
                                    <div style="margin-left:4px"><span font-size="24"
                                            class="sc-3f1fa8b6-2 sc-cfc62e76-2 cxVhIJ fUsCai">4.8</span><span
                                            font-size="24" class="sc-3f1fa8b6-5 sc-cfc62e76-4 euVUxp gpxffk">/</span><span
                                            font-size="18" class="sc-3f1fa8b6-1 sc-cfc62e76-3 jQlWmk hVeUiM">5</span>
                                    </div>
                                </div><small>Based on 28115 ratings from actual customers by<!-- -->&nbsp;<a
                                        target="_blank" rel="noreferrer noopener" title="Shopper Approved"
                                        href="https://www.shopperapproved.com/reviews/fishingbooker.com/"
                                        data-testid="shopper-approved-link">Shopper Approved</a></small>
                            </div>
                        </div>
                    </div>
                    <div class="sc-8903e72c-0 fcSVSC">
                        <div class="sc-686a1dc7-1 sc-686a1dc7-3 jXbBlk kRBMVR">
                            <div class="sc-686a1dc7-7 hKNvMw">
                                <picture>
                                    <source media="(min-width: 768px)"
                                        srcset="https://static.fishingbooker.com/public/images/pages/shopper_approved.png">
                                    <img src="https://static.fishingbooker.com/public/images/pages/shopper_approved_xs.png"
                                        alt="List Your Boat" class="sc-686a1dc7-9 da-DdeD">
                                </picture>
                                <div style="margin-top:20px;margin-right:5px;margin-left:20px">
                                    <div class="sc-686a1dc7-6 efSvRR"><b>List your business on
                                            FishingBooker</b>
                                        <p class="sc-686a1dc7-10 fdoOIB"><small>Find customers and earn
                                                more</small></p><a href="/pages/whylist"><button
                                                data-testid="list-your-business-learn-more-button" type="button"
                                                class="sc-e34bd1e5-0 sc-4bbe1ea8-1 sc-686a1dc7-8 jGQxKN hqzFOY iODNXp">Why
                                                list</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="new-container">
        <div class="new-slider-wrapper">
            <h3 class="sc-ad108f7f-2 sc-2f490a4-0 iHiFgZ bSvfnR">Amazing destinations for your next fishing trip</h3>
            <div class="new-image-list">

                <div class="sc-2f490a4-1 cZrFAX">
                    <div class="sc-ca150323-0 dpyxok sc-e01b5760-0 UGYOv" elevation="0">
                        <div class="sc-bd4edd0a-5 cuapMn">
                            <a href="destinations/location/us/FL/key-west" data-testid="popular-destination-card-0"
                                class="sc-bd4edd0a-1 cfhDGJ">
                                <img src="https://static.fishingbooker.com/public/images/destination/baners/f6523ce8b80373c4ff466b91be861d3e.jpg"
                                    alt="Key West" class="sc-bd4edd0a-4 eMFxRa">
                                <div class="sc-bd4edd0a-3 jveQTG">
                                    <h2 class="sc-ad108f7f-1 sc-bd4edd0a-2 inFPlS bXNxTt">Key West
                                        <img src="https://static.fishingbooker.com/public/img/icons/flags/us-flag.png"
                                            alt="Key West" width="24" height="24">
                                    </h2>
                                    <p class="sc-ad108f7f-3 irTMHP">171 fishing charters</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="sc-2f490a4-1 cZrFAX">
                    <div class="sc-ca150323-0 dpyxok sc-e01b5760-0 UGYOv" elevation="0">
                        <div class="sc-bd4edd0a-5 cuapMn">
                            <a href="destinations/location/us/FL/panama-city" data-testid="popular-destination-card-1"
                                class="sc-bd4edd0a-1 cfhDGJ">
                                <img src="https://static.fishingbooker.com/public/images/destination/baners/e82d8c2c266f75e12af4e4dccc7d6950.jpg"
                                    alt="Panama City" class="sc-bd4edd0a-4 eMFxRa">
                                <div class="sc-bd4edd0a-3 jveQTG">
                                    <h2 class="sc-ad108f7f-1 sc-bd4edd0a-2 inFPlS bXNxTt">Panama City
                                        <img src="https://static.fishingbooker.com/public/img/icons/flags/us-flag.png"
                                            alt="Panama City" width="24" height="24">
                                    </h2>
                                    <p class="sc-ad108f7f-3 irTMHP">177 fishing charters</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="sc-2f490a4-1 cZrFAX">
                    <div class="sc-ca150323-0 dpyxok sc-e01b5760-0 UGYOv" elevation="0">
                        <div class="sc-bd4edd0a-5 cuapMn">
                            <a href="destinations/location/mx/BS/cabo-san-lucas" data-testid="popular-destination-card-2"
                                class="sc-bd4edd0a-1 cfhDGJ">
                                <img src="https://static.fishingbooker.com/public/images/destination/baners/145170785d85cbe112aca282b170d2dd.jpg"
                                    alt="Cabo San Lucas" class="sc-bd4edd0a-4 eMFxRa">
                                <div class="sc-bd4edd0a-3 jveQTG">
                                    <h2 class="sc-ad108f7f-1 sc-bd4edd0a-2 inFPlS bXNxTt">Cabo San Lucas
                                        <img src="https://static.fishingbooker.com/public/img/icons/flags/mx-flag.png"
                                            alt="Cabo San Lucas" width="24" height="24">
                                    </h2>
                                    <p class="sc-ad108f7f-3 irTMHP">133 fishing charters</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="sc-2f490a4-1 cZrFAX">
                    <div class="sc-ca150323-0 dpyxok sc-e01b5760-0 UGYOv" elevation="0">
                        <div class="sc-bd4edd0a-5 cuapMn">
                            <a href="destinations/location/us/FL/destin" data-testid="popular-destination-card-3"
                                class="sc-bd4edd0a-1 cfhDGJ">
                                <img src="https://static.fishingbooker.com/public/images/destination/baners/62a6e9a33748062956985fdeffc0f11e.jpg"
                                    alt="Destin" class="sc-bd4edd0a-4 eMFxRa">
                                <div class="sc-bd4edd0a-3 jveQTG">
                                    <h2 class="sc-ad108f7f-1 sc-bd4edd0a-2 inFPlS bXNxTt">Destin
                                        <img src="https://static.fishingbooker.com/public/img/icons/flags/us-flag.png"
                                            alt="Destin" width="24" height="24">
                                    </h2>
                                    <p class="sc-ad108f7f-3 irTMHP">239 fishing charters</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="sc-2f490a4-1 cZrFAX">
                    <div class="sc-ca150323-0 dpyxok sc-e01b5760-0 UGYOv" elevation="0">
                        <div class="sc-bd4edd0a-5 cuapMn">
                            <a href="destinations/location/us/AL/orange-beach" data-testid="popular-destination-card-4"
                                class="sc-bd4edd0a-1 cfhDGJ">
                                <img src="https://static.fishingbooker.com/public/images/destination/baners/7ec5cd242bbf180f809291b258a0e815.jpg"
                                    alt="Orange Beach" class="sc-bd4edd0a-4 eMFxRa">
                                <div class="sc-bd4edd0a-3 jveQTG">
                                    <h2 class="sc-ad108f7f-1 sc-bd4edd0a-2 inFPlS bXNxTt">Orange Beach
                                        <img src="https://static.fishingbooker.com/public/img/icons/flags/us-flag.png"
                                            alt="Orange Beach" width="24" height="24">
                                    </h2>
                                    <p class="sc-ad108f7f-3 irTMHP">259 fishing charters</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="sc-2f490a4-1 cZrFAX">
                    <div class="sc-ca150323-0 dpyxok sc-e01b5760-0 UGYOv" elevation="0">
                        <div class="sc-bd4edd0a-5 cuapMn">
                            <a href="destinations/location/us/TX/galveston" data-testid="popular-destination-card-5"
                                class="sc-bd4edd0a-1 cfhDGJ">
                                <img src="https://static.fishingbooker.com/public/images/destination/baners/53517bc578d9a742a88ce0b721d363bc.jpg"
                                    alt="Galveston" class="sc-bd4edd0a-4 eMFxRa">
                                <div class="sc-bd4edd0a-3 jveQTG">
                                    <h2 class="sc-ad108f7f-1 sc-bd4edd0a-2 inFPlS bXNxTt">Galveston
                                        <img src="https://static.fishingbooker.com/public/img/icons/flags/us-flag.png"
                                            alt="Galveston" width="24" height="24">
                                    </h2>
                                    <p class="sc-ad108f7f-3 irTMHP">184 fishing charters</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="new-slider-scrollbar">
            <div class="new-scrollbar-track">
                <div class="new-scrollbar-thumb"></div>
            </div>
        </div>
        <a href="/sitemap">See all destinations</a>
        <small>
            <i class="fas fa-chevron-right text-primary" aria-hidden="true"></i>
        </small>
    </div>
    <script src="{{ asset('js/script_slider2.js') }}" defer></script>




    <style>
        .slick-slide {
            margin-right: 10px;
        }

        .slick-slide:last-child {
            margin-right: 0;
        }
    </style>

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />


    <div style="margin-top:40px">
        <div class="sc-c2119f28-0 dtfqPR">
            <h3 class="sc-ad108f7f-2 sc-2f490a4-0 iHiFgZ bSvfnR">Top targeted fish species</h3>
            <div class="fresnel-container fresnel-lessThan-lg fresnel-:R17dam:"></div>
            <div class="fresnel-container fresnel-greaterThanOrEqual-lg fresnel-:R1ndam:">


                <div class="sc-61553c17-0 dQVlSB">
                    <div class="sc-84264211-0 leChHZ"><a href="https://fishingbooker.com/fish/amberjack"
                            data-testid="fish-species-segment-card-0" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/fish/275x160/amberjack.png"
                                alt="Amberjack" width="150px" height="88px" loading="lazy"
                                class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">Amberjack</p>
                            </div>
                        </a></div>
                    <div class="sc-84264211-0 leChHZ"><a href="https://fishingbooker.com/fish/cobia"
                            data-testid="fish-species-segment-card-1" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/fish/275x160/cobia.png" alt="Cobia"
                                width="150px" height="88px" loading="lazy" class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">Cobia</p>
                            </div>
                        </a></div>
                    <div class="sc-84264211-0 leChHZ"><a href="https://fishingbooker.com/fish/dolphin-mahi-mahi"
                            data-testid="fish-species-segment-card-2" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/fish/275x160/dolphin-mahi-mahi.png"
                                alt="Dolphin (Mahi Mahi)" width="150px" height="88px" loading="lazy"
                                class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">Dolphin (Mahi Mahi)</p>
                            </div>
                        </a></div>
                    <div class="sc-84264211-0 leChHZ"><a href="https://fishingbooker.com/fish/king-mackerel-kingfish"
                            data-testid="fish-species-segment-card-3" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/fish/275x160/king-mackerel-kingfish.png"
                                alt="King Mackerel (Kingfish)" width="150px" height="88px" loading="lazy"
                                class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">King Mackerel (Kingfish)
                                </p>
                            </div>
                        </a></div>
                    <div class="sc-84264211-0 leChHZ"><a href="https://fishingbooker.com/fish/snapper-red"
                            data-testid="fish-species-segment-card-4" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/fish/275x160/snapper-red.png"
                                alt="Red Snapper" width="150px" height="88px" loading="lazy"
                                class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">Red Snapper</p>
                            </div>
                        </a></div>
                    <div class="sc-84264211-0 leChHZ"><a href="https://fishingbooker.com/fish/wahoo"
                            data-testid="fish-species-segment-card-5" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/fish/275x160/wahoo.png" alt="Wahoo"
                                width="150px" height="88px" loading="lazy" class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">Wahoo</p>
                            </div>
                        </a></div>
                </div>



                <div class="sc-61553c17-0 dQVlSB slick-carousel">
                    <div class="sc-84264211-0 leChHZ"><a href="https://fishingbooker.com/fish/amberjack"
                            data-testid="fish-species-segment-card-0" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/fish/275x160/amberjack.png"
                                alt="Amberjack" width="150px" height="88px" loading="lazy"
                                class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">Amberjack</p>
                            </div>
                        </a></div>
                    <div class="sc-84264211-0 leChHZ"><a href="https://fishingbooker.com/fish/cobia"
                            data-testid="fish-species-segment-card-1" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/fish/275x160/cobia.png" alt="Cobia"
                                width="150px" height="88px" loading="lazy" class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">Cobia</p>
                            </div>
                        </a></div>
                    <div class="sc-84264211-0 leChHZ"><a href="https://fishingbooker.com/fish/dolphin-mahi-mahi"
                            data-testid="fish-species-segment-card-2" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/fish/275x160/dolphin-mahi-mahi.png"
                                alt="Dolphin (Mahi Mahi)" width="150px" height="88px" loading="lazy"
                                class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">Dolphin (Mahi Mahi)</p>
                            </div>
                        </a></div>
                    <div class="sc-84264211-0 leChHZ"><a href="https://fishingbooker.com/fish/king-mackerel-kingfish"
                            data-testid="fish-species-segment-card-3" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/fish/275x160/king-mackerel-kingfish.png"
                                alt="King Mackerel (Kingfish)" width="150px" height="88px" loading="lazy"
                                class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">King Mackerel (Kingfish)
                                </p>
                            </div>
                        </a></div>
                    <div class="sc-84264211-0 leChHZ"><a href="https://fishingbooker.com/fish/snapper-red"
                            data-testid="fish-species-segment-card-4" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/fish/275x160/snapper-red.png"
                                alt="Red Snapper" width="150px" height="88px" loading="lazy"
                                class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">Red Snapper</p>
                            </div>
                        </a></div>
                    <div class="sc-84264211-0 leChHZ"><a href="https://fishingbooker.com/fish/wahoo"
                            data-testid="fish-species-segment-card-5" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/fish/275x160/wahoo.png" alt="Wahoo"
                                width="150px" height="88px" loading="lazy" class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">Wahoo</p>
                            </div>
                        </a></div>
                </div>
            </div>
            <div style="margin-top:16px">
                <p class="sc-ad108f7f-3 btlYwf"><a href="/fish" data-testid="fish-species-see-all-link"
                        class="sc-dc94d4cf-0 sc-dc94d4cf-1 sc-5a5c6c9f-0 dIsgyn hOxsCK kZvQsd">See all fish
                        species<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right"
                            class="svg-inline--fa fa-chevron-right fa-w-10 sc-5a5c6c9f-1 gxkpRp" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <path fill="currentColor"
                                d="M305 239c9.4 9.4 9.4 24.6 0 33.9L113 465c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l175-175L79 81c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L305 239z">
                            </path>
                        </svg></a></p>
            </div>
        </div>
    </div>




    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>


    <script>
        $(document).ready(function() {
            $('.slick-carousel').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 4000,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });
    </script>




    <div style="margin-top:40px">
        <div class="sc-c2119f28-0 dtfqPR">
            <h3 class="sc-ad108f7f-2 sc-2f490a4-0 iHiFgZ bSvfnR">Top fishing types</h3>
            <div class="fresnel-container fresnel-lessThan-lg fresnel-:R18dam:"></div>
            <div class="fresnel-container fresnel-greaterThanOrEqual-lg fresnel-:R1odam:">


                <div class="sc-61553c17-0 dQVlSB">
                    <div class="sc-84264211-0 leChHZ"><a href="/fishing-type/river"
                            data-testid="fishing-types-segment-card-0" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/segmented-pages/thumbnail/8ba06d1d5564832c57909bd9ddec499f.jpg"
                                alt="River" width="144px" height="88.67px" loading="lazy"
                                class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">River</p>
                            </div>
                        </a></div>
                    <div class="sc-84264211-0 leChHZ"><a href="/fishing-type/inshore"
                            data-testid="fishing-types-segment-card-1" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/segmented-pages/thumbnail/7f050d3ce7aec54424254f824573197d.jpg"
                                alt="Inshore" width="150px" height="88px" loading="lazy"
                                class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">Inshore</p>
                            </div>
                        </a></div>
                    <div class="sc-84264211-0 leChHZ"><a href="/fishing-type/offshore"
                            data-testid="fishing-types-segment-card-2" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/segmented-pages/thumbnail/42ccc319b1e6f5b74bfde9e758a803ab.jpg"
                                alt="Offshore" width="150px" height="88px" loading="lazy"
                                class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">Offshore</p>
                            </div>
                        </a></div>
                    <div class="sc-84264211-0 leChHZ"><a href="/fishing-type/reef"
                            data-testid="fishing-types-segment-card-3" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/segmented-pages/thumbnail/70de2207de15d0e7bb534a8ca79951db.jpg"
                                alt="Reef" width="150px" height="88px" loading="lazy"
                                class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">Reef</p>
                            </div>
                        </a></div>
                    <div class="sc-84264211-0 leChHZ"><a href="/fishing-type/flats"
                            data-testid="fishing-types-segment-card-4" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/segmented-pages/thumbnail/b5187fd0bf8e9ec2a5becb05e2415faa.jpg"
                                alt="Flats" width="150px" height="88px" loading="lazy"
                                class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">Flats</p>
                            </div>
                        </a></div>
                    <div class="sc-84264211-0 leChHZ"><a href="/fishing-type/backcountry"
                            data-testid="fishing-types-segment-card-5" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/segmented-pages/thumbnail/91b4950773c524525836f80107476faa.jpg"
                                alt="Backcountry" width="150px" height="88px" loading="lazy"
                                class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">Backcountry</p>
                            </div>
                        </a></div>
                </div>


                <div class="sc-61553c17-0 dQVlSB slick-carousel">
                    <div class="sc-84264211-0 leChHZ"><a href="/fishing-type/river"
                            data-testid="fishing-types-segment-card-0" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/segmented-pages/thumbnail/8ba06d1d5564832c57909bd9ddec499f.jpg"
                                alt="River" width="144px" height="88.67px" loading="lazy"
                                class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">River</p>
                            </div>
                        </a></div>
                    <div class="sc-84264211-0 leChHZ"><a href="/fishing-type/inshore"
                            data-testid="fishing-types-segment-card-1" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/segmented-pages/thumbnail/7f050d3ce7aec54424254f824573197d.jpg"
                                alt="Inshore" width="150px" height="88px" loading="lazy"
                                class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">Inshore</p>
                            </div>
                        </a></div>
                    <div class="sc-84264211-0 leChHZ"><a href="/fishing-type/offshore"
                            data-testid="fishing-types-segment-card-2" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/segmented-pages/thumbnail/42ccc319b1e6f5b74bfde9e758a803ab.jpg"
                                alt="Offshore" width="150px" height="88px" loading="lazy"
                                class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">Offshore</p>
                            </div>
                        </a></div>
                    <div class="sc-84264211-0 leChHZ"><a href="/fishing-type/reef"
                            data-testid="fishing-types-segment-card-3" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/segmented-pages/thumbnail/70de2207de15d0e7bb534a8ca79951db.jpg"
                                alt="Reef" width="150px" height="88px" loading="lazy"
                                class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">Reef</p>
                            </div>
                        </a></div>
                    <div class="sc-84264211-0 leChHZ"><a href="/fishing-type/flats"
                            data-testid="fishing-types-segment-card-4" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/segmented-pages/thumbnail/b5187fd0bf8e9ec2a5becb05e2415faa.jpg"
                                alt="Flats" width="150px" height="88px" loading="lazy"
                                class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">Flats</p>
                            </div>
                        </a></div>
                    <div class="sc-84264211-0 leChHZ"><a href="/fishing-type/backcountry"
                            data-testid="fishing-types-segment-card-5" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/segmented-pages/thumbnail/91b4950773c524525836f80107476faa.jpg"
                                alt="Backcountry" width="150px" height="88px" loading="lazy"
                                class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">Backcountry</p>
                            </div>
                        </a></div>
                </div>
            </div>
            <div style="margin-top:16px">
                <p class="sc-ad108f7f-3 btlYwf"><a href="/fishing-type" data-testid="fishing-types-see-all-link"
                        class="sc-dc94d4cf-0 sc-dc94d4cf-1 sc-5a5c6c9f-0 dIsgyn hOxsCK kZvQsd">See all types of fishing<svg
                            aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right"
                            class="svg-inline--fa fa-chevron-right fa-w-10 sc-5a5c6c9f-1 gxkpRp" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <path fill="currentColor"
                                d="M305 239c9.4 9.4 9.4 24.6 0 33.9L113 465c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l175-175L79 81c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L305 239z">
                            </path>
                        </svg></a></p>
            </div>
        </div>
    </div>




    <div style="margin-top:40px">
        <div class="sc-c2119f28-0 dtfqPR">
            <h3 class="sc-ad108f7f-2 sc-2f490a4-0 iHiFgZ bSvfnR">Top fishing techniques</h3>
            <div class="fresnel-container fresnel-lessThan-lg fresnel-:R19dam:"></div>
            <div class="fresnel-container fresnel-greaterThanOrEqual-lg fresnel-:R1pdam:">


                <div class="sc-61553c17-0 dQVlSB">
                    <div class="sc-84264211-0 leChHZ"><a href="/technique/big-game-fishing"
                            data-testid="fishing-techniques-segment-card-0" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/segmented-pages/thumbnail/bce1bdce0a80982178ed4aa807de83d8.jpg"
                                alt="Deep Sea Fishing" width="150px" height="88px" loading="lazy"
                                class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">Deep Sea Fishing</p>
                            </div>
                        </a></div>
                    <div class="sc-84264211-0 leChHZ"><a href="/technique/bottom-fishing"
                            data-testid="fishing-techniques-segment-card-1" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/segmented-pages/thumbnail/c2c7db60258b4a00bd2d8fdf2138f19e.jpg"
                                alt="Bottom Fishing" width="150px" height="88px" loading="lazy"
                                class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">Bottom Fishing</p>
                            </div>
                        </a></div>
                    <div class="sc-84264211-0 leChHZ"><a href="/technique/light-tackle"
                            data-testid="fishing-techniques-segment-card-2" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/segmented-pages/thumbnail/9b9ff793bde4b881dd750b1e2c00d885.jpg"
                                alt="Light Tackle" width="150px" height="88px" loading="lazy"
                                class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">Light Tackle</p>
                            </div>
                        </a></div>
                    <div class="sc-84264211-0 leChHZ"><a href="/technique/fly-fishing"
                            data-testid="fishing-techniques-segment-card-3" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/segmented-pages/thumbnail/6712cb4f30dbd8c39bc07de3fa0a048a.jpg"
                                alt="Fly Fishing" width="150px" height="88px" loading="lazy"
                                class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">Fly Fishing</p>
                            </div>
                        </a></div>
                    <div class="sc-84264211-0 leChHZ"><a href="/technique/jigging"
                            data-testid="fishing-techniques-segment-card-4" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/segmented-pages/thumbnail/a72e67c680c21914c9ba47f2da132c53.jpg"
                                alt="Jigging" width="150px" height="88px" loading="lazy"
                                class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">Jigging</p>
                            </div>
                        </a></div>
                    <div class="sc-84264211-0 leChHZ"><a href="/technique/drift-fishing"
                            data-testid="fishing-techniques-segment-card-5" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/segmented-pages/thumbnail/52f5e6cb1258a752b0641490f4acc649.jpg"
                                alt="Drift Fishing" width="150px" height="88px" loading="lazy"
                                class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">Drift Fishing</p>
                            </div>
                        </a></div>
                </div>


                <div class="sc-61553c17-0 dQVlSB slick-carousel">
                    <div class="sc-84264211-0 leChHZ"><a href="/technique/big-game-fishing"
                            data-testid="fishing-techniques-segment-card-0" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/segmented-pages/thumbnail/bce1bdce0a80982178ed4aa807de83d8.jpg"
                                alt="Deep Sea Fishing" width="150px" height="88px" loading="lazy"
                                class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">Deep Sea Fishing</p>
                            </div>
                        </a></div>
                    <div class="sc-84264211-0 leChHZ"><a href="/technique/bottom-fishing"
                            data-testid="fishing-techniques-segment-card-1" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/segmented-pages/thumbnail/c2c7db60258b4a00bd2d8fdf2138f19e.jpg"
                                alt="Bottom Fishing" width="150px" height="88px" loading="lazy"
                                class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">Bottom Fishing</p>
                            </div>
                        </a></div>
                    <div class="sc-84264211-0 leChHZ"><a href="/technique/light-tackle"
                            data-testid="fishing-techniques-segment-card-2" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/segmented-pages/thumbnail/9b9ff793bde4b881dd750b1e2c00d885.jpg"
                                alt="Light Tackle" width="150px" height="88px" loading="lazy"
                                class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">Light Tackle</p>
                            </div>
                        </a></div>
                    <div class="sc-84264211-0 leChHZ"><a href="/technique/fly-fishing"
                            data-testid="fishing-techniques-segment-card-3" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/segmented-pages/thumbnail/6712cb4f30dbd8c39bc07de3fa0a048a.jpg"
                                alt="Fly Fishing" width="150px" height="88px" loading="lazy"
                                class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">Fly Fishing</p>
                            </div>
                        </a></div>
                    <div class="sc-84264211-0 leChHZ"><a href="/technique/jigging"
                            data-testid="fishing-techniques-segment-card-4" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/segmented-pages/thumbnail/a72e67c680c21914c9ba47f2da132c53.jpg"
                                alt="Jigging" width="150px" height="88px" loading="lazy"
                                class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">Jigging</p>
                            </div>
                        </a></div>
                    <div class="sc-84264211-0 leChHZ"><a href="/technique/drift-fishing"
                            data-testid="fishing-techniques-segment-card-5" class="sc-6f299ceb-0 hwxEcx"><img
                                src="https://static.fishingbooker.com/public/images/segmented-pages/thumbnail/52f5e6cb1258a752b0641490f4acc649.jpg"
                                alt="Drift Fishing" width="150px" height="88px" loading="lazy"
                                class="sc-6f299ceb-3 dIWxKH">
                            <div class="sc-6f299ceb-1 hhkYDW">
                                <p class="sc-ad108f7f-3 sc-6f299ceb-2 bxLfMw fVYNhl">Drift Fishing</p>
                            </div>
                        </a></div>
                </div>
            </div>
            <div style="margin-top:16px">
                <p class="sc-ad108f7f-3 btlYwf"><a href="/technique" data-testid="fishing-techniques-see-all-link"
                        class="sc-dc94d4cf-0 sc-dc94d4cf-1 sc-5a5c6c9f-0 dIsgyn hOxsCK kZvQsd">See all fishing
                        techniques<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right"
                            class="svg-inline--fa fa-chevron-right fa-w-10 sc-5a5c6c9f-1 gxkpRp" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <path fill="currentColor"
                                d="M305 239c9.4 9.4 9.4 24.6 0 33.9L113 465c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l175-175L79 81c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L305 239z">
                            </path>
                        </svg></a></p>
            </div>
        </div>
    </div>





    <div style="margin-top:80px">
        <div style="margin-bottom:24px">
            <div class="sc-65c1f-0 hFynbr"></div>
        </div>
        <div class="sc-c2119f28-0 sc-35fc10ae-0 lgMvXM bryfmf">
            <div class="sc-fc4618c-0 hQMuRN">
                <div class="sc-8903e72c-0 hLPqxK">
                    <div class="fresnel-container fresnel-greaterThanOrEqual-md fresnel-:r2:"><select
                            aria-label="Select language" class="sc-71c5fbff-0 sc-df0b4b4e-0 caUcJO CFFGH">
                            <option value="EUR - €">EUR - €</option>
                        </select></div>
                    <div class="fresnel-container fresnel-lessThan-md fresnel-:r3:"></div>
                    <div style="margin-top:16px">
                        <div class="fresnel-container fresnel-greaterThanOrEqual-md fresnel-:r0:"><select
                                aria-label="Select language" class="sc-71c5fbff-0 sc-df0b4b4e-0 caUcJO CFFGH">
                                <option value="English">English</option>
                            </select></div>
                        <div class="fresnel-container fresnel-lessThan-md fresnel-:r1:"></div>
                    </div>
                </div>
                <div class="sc-8903e72c-0 duTKhK">
                    <div class="fresnel-container fresnel-greaterThanOrEqual-md fresnel-:R2lqm:">
                        <div class="sc-fc4618c-0 hQMuRN">
                            <div class="sc-8903e72c-0 gRcLDl">
                                <div style="margin-bottom: 8px;">
                                    <p class="sc-ad108f7f-3 sc-ad108f7f-4 btlYwf fLIhvM">About FishingBooker
                                    </p>
                                </div><a href="/about" class="sc-12667ca2-0 yMehb">About Us</a><a href="/careers"
                                    class="sc-12667ca2-0 yMehb">Careers</a><a href="/blog"
                                    class="sc-12667ca2-0 yMehb">Blog</a><a href="/contact"
                                    class="sc-12667ca2-0 yMehb">Contact</a><a href="/pages/safety"
                                    class="sc-12667ca2-0 yMehb">Safety</a>
                            </div>
                            <div class="sc-8903e72c-0 gRcLDl">
                                <div style="margin-bottom: 8px;">
                                    <p class="sc-ad108f7f-3 sc-ad108f7f-4 btlYwf fLIhvM">Discover</p>
                                </div><a href="/technique" class="sc-12667ca2-0 yMehb">Fishing
                                    Techniques</a><a href="/fishing-type" class="sc-12667ca2-0 yMehb">Fishing
                                    Types</a><a href="/fish" class="sc-12667ca2-0 yMehb">Fish Species</a><a
                                    href="/fishing-near-me" class="sc-12667ca2-0 yMehb">Fishing Near Me</a><a
                                    href="/sitemap" class="sc-12667ca2-0 yMehb">Sitemap</a>
                            </div>
                            <div class="sc-8903e72c-0 gRcLDl">
                                <div style="margin-bottom: 8px;">
                                    <p class="sc-ad108f7f-3 sc-ad108f7f-4 btlYwf fLIhvM">Support</p>
                                </div><a href="https://help.fishingbooker.com/" class="sc-12667ca2-0 yMehb">Help
                                    Center</a><a href="/pages/terms" class="sc-12667ca2-0 yMehb">Terms of
                                    Use</a><a href="/pages/privacy" class="sc-12667ca2-0 yMehb">Privacy
                                    Policy</a><a href="/pages/gdpr_privacy_notice" class="sc-12667ca2-0 yMehb">GDPR
                                    Privacy Notice</a>
                            </div>
                        </div>
                    </div>
                    <div class="fresnel-container fresnel-lessThan-md fresnel-:R4lqm:"></div>
                </div>
                <div class="sc-8903e72c-0 hMSKnS">
                    <div class="fresnel-container fresnel-greaterThanOrEqual-lg fresnel-:R2tqm:"><a href="/pages/whylist"
                            type="button" class="sc-e34bd1e5-0 sc-4bbe1ea8-1 sc-49fc01c4-0 hwkCTO hqzFOY iuLdNy">List
                            Your
                            Boat</a></div>
                    <div class="fresnel-container fresnel-lessThan-lg fresnel-:R4tqm:"></div>
                </div>
                <div class="sc-8903e72c-0 jpaljx">
                    <div style="margin-top:24px;margin-bottom:32px">
                        <div class="sc-65c1f-0 eyrFBg"></div>
                    </div>
                    <div class="fresnel-container fresnel-greaterThanOrEqual-md fresnel-:Rd5qm:">
                        <div class="sc-caf22c33-0 gJOSAe">
                            <ul class="sc-ab0a1195-0 bImZSD">
                                <li class="sc-ab0a1195-1 ggmeVH"><a href="https://www.facebook.com/FishingBooker/"
                                        target="_blank" aria-label="Facebook" class="sc-ab0a1195-2 iHkIGn"><svg
                                            aria-hidden="true" focusable="false" data-prefix="fab"
                                            data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 320 512">
                                            <path fill="currentColor"
                                                d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
                                                class=""></path>
                                        </svg></a></li>
                                <li class="sc-ab0a1195-1 bRsusu"><a href="https://www.instagram.com/fishingbooker/"
                                        target="_blank" aria-label="Instagram" class="sc-ab0a1195-2 iHkIGn"><svg
                                            aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram"
                                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path fill="currentColor"
                                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                                                class=""></path>
                                        </svg></a></li>
                                <li class="sc-ab0a1195-1 cqlECq"><a href="https://twitter.com/FishingBooker/"
                                        target="_blank" aria-label="Twitter" class="sc-ab0a1195-2 iHkIGn"><svg
                                            aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter"
                                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="currentColor"
                                                d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
                                                class=""></path>
                                        </svg></a></li>
                            </ul>
                            <div class="sc-c8e5eb83-0 iLasQa">
                                <div class="sc-c8e5eb83-1 caHkoR"></div>
                                <div class="sc-c8e5eb83-1 gBJyvS"></div>
                                <div class="sc-c8e5eb83-1 dkLFYG"></div>
                                <div class="sc-c8e5eb83-1 gHerFW"></div>
                                <div class="sc-c8e5eb83-1 gdpwDp"></div>
                            </div>
                        </div>
                    </div>
                    <div class="fresnel-container fresnel-lessThan-md fresnel-:Rl5qm:"></div>
                </div>
                <div class="sc-8903e72c-0 jpaljx">
                    <div style="margin-top:32px;margin-bottom:32px">
                        <div class="sc-65c1f-0 eyrFBg"></div>
                    </div>
                    <div class="sc-35fc10ae-1 ljPgeh">
                        <p class="sc-ad108f7f-5 doLMdF">Copyright © 2024 FishingBooker, Inc. All rights
                            reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script id="__NEXT_DATA__" type="application/json">{"props":{"pageProps":{"dehydratedState":{"mutations":[],"queries":[{"state":{"data":{"homepage":{"aroundTheCorner":"Exciting fishing destinations close to you","benefitsBestPriceDescription":"Found the same trip for less? We'll refund the difference!","benefitsBestPriceTitle":"Best Price Guarantee","benefitsPaymentsDescription":"Book via our secure platform and enjoy flexible payment options.","benefitsPaymentsTitle":"Trusted Payments","benefitsServiceDescription":"7 day customer support for a hassle-free fishing experience.","benefitsServiceTitle":"Service You Can Trust","benefitsWeatherProtectionDescription":"Canceled due to bad weather? We'll help reschedule or refund.","benefitsWeatherProtectionTitle":"Weather Protection","bookFishingTripsWithLocalCaptains":"Discover and book amazing fishing charters at exclusive prices","bookFishingTripsWithLocalCaptainsVar":"Find and book the best fishing charters in %p1%+ destinations around the world","catchFishInDestination":"Catch %p1% in %p2%","discoverNewDestinations":"Discover new, exciting fishing destinations close to you.","earnMore":"Find customers and earn more","exploreModeCta":"Explore map","exploreModeCtaDescription":"Discover your next fishing trip","exploreModeCtaSeparator":"or","exploreTheWorld":"Amazing destinations for your next fishing trip","fishingChartersInDestinations":"Fishing charters in %p%+ destinations","fishLikeALocalHeading":"FISH LIKE A LOCAL","heroImageAltText":"A man fishing on a boat","homepageTitle":"Book your next fishing trip","learnMoreButtonCta":"Why list","listYourBoatTitle1":"FishingBooker – the world's largest online travel fishing company","listYourBoatTitle2":"List your business on FishingBooker","moreDestinations":"More destinations \u0026raquo;","recentChartersTitle":"Still interested in these charters?","recentSearchDestinationsTitle":"{1} %name%, continue your search | {0} Continue your search","recentSearchPersonCount":"{1} %p% person | [2,Inf] %p% persons","seeTopFishingDestinations":"See the top fishing destinations, all around the world.","shopperApprovedRatingInfo":"Based on %reviewCount% ratings from actual customers by","shopperApprovedSatisfaction":"\u003cb\u003e%rating%\u003c/b\u003e Overall Satisfaction rating","topChartersTitle":"Top fishing charters around you","topFishesSeeAll":"See all fish species","topFishesTitle":"Top targeted fish species","topFishingTechniquesSeeAll":"See all fishing techniques","topFishingTechniquesTitle":"Top fishing techniques","topFishingTypes":"Top types of fishing","topFishingTypesSeeAll":"See all types of fishing","topFishingTypesTitle":"Top fishing types","useCouponCode":"Get \u003cstrong\u003e%p1% OFF\u003c/strong\u003e your next booking! Use coupon code \u003cstrong\u003e%p2%\u003c/strong\u003e","xDaysAgo":"{0} Today|{1} Yesterday|[2,Inf] %p% days ago","yourFishingAdventureAwaits":"Book Your Next Fishing Trip"},"search":{"addMorePersons":"{1} Add %p% more person to book this trip.|[2,Inf] Add %p% more persons to book this trip.","adults":"Adults","ages212":"Ages 2-12","almostThere":"Almost there","anglersChoiceText":"This captain has been rated highly by customers.","availabilityLowInXOnDates":"Our availability in %p% is low on your dates. You missed this one, but there are other great options if you're quick!","beforeX":"before %p%","bestPriceGuaranteed":"Best Price Guaranteed","cancellationPolicyValueToCustomerDesc":"{0} Deposit non-refundable under normal circumstances. If the captain cannot run the trip due to unsafe weather conditions, your booking can be moved to another date or canceled free of charge. | {1} You can cancel or change your booking free of charge up to 1 day before the trip date. If the captain cannot run the trip due to unsafe weather conditions, your booking can be moved to another date or canceled free of charge. | [2,Inf]You can cancel or reschedule your booking up to %p% days before the trip. If the captain cannot run the trip due to unsafe weather conditions, your booking can be moved to another date or canceled free of charge.","cancellationPolicyValueToString":"{0} Deposit non-refundable|{1} 1 day in advance|[2,Inf]  %p% days in advance","cancellationPolicyValueToStringVer2":"{0} Deposit non-refundable|{1} 1 day notice|[2,Inf]  %p% days notice","captain":"Captain","charterItemCTACharter":"View charter","charterItemCTATrips":"View trips","charterItemTripsFrom":"trips from","charterNotAvailableOnDate":"This %listingType% is not available on %date%. Please select another date.","children":"Children","dateFjY":"%p1% %p2%, %p3%","dateFrom":"Date from","dateTo":"Date to","daysCount":"Days","daysGroupSize":"Days \u0026amp; Group Size","depositNonRefundable":"deposit non-refundable","destinationCharterName":"Destination or Operator Name","destinationCharterNamePlaceholder":"Destination or Operator Name","destXFishingCharters":"%p1%: %p2%","destXFishingChartersAvailable":"%p1%: %p2% available","dontHaveSpecificDateYet":"I don't have a specific date yet","eachAdditionalPerson":"each additional person","emptySearchResult":"Sorry, there are no results for your search criteria.","exceededPerson":"You've exceeded the max number of persons for this trip","filterResultsBy":"Filter results by","fishingCharter":"{1} fishing charter|[2,Inf] fishing charters","fishingNearMe":"Fishing near me","fixedDate":"Exact date","fixedTripDate":"Exact trip date","flexibleDate":"Flexible dates","flexibleDepartureTime":"flexible departure time","flexibleTripDate":"Flexible trip dates","freeCancellation":"\u003cb\u003eFREE Cancellation\u003c/b\u003e","freeCancellationNoticeUntilX":"FREE Cancellation – A change of plans is quick and easy before %p%","fromX":"From %p%","fullDate":"%p1%, %p2% %p3% %p4%","groupSize":"Group Size","howFishingBookerRates":"How FishingBooker rates","inHighDemand":"In demand!","instantBook":"%p% Instant Book","instantBookTooltipNotice":"No waiting – Get instant confirmation that your trip is booked","instantConfirmation":"Instant Confirmation","justBooked":"Just booked!","lastBookingXAgo":"Last booking: %p% ago","lastBookingHoursMinutes":"Last booking: %p1% ago","lastBookingYMinutes":"Last booking: %p% ago","liveaboard":"liveaboard","loaderTitle":"Finding the best local fishing charters for you...","loadingCurrentLocation":"Loading current location","lodging":"lodging","lowRate":"\u003cb\u003eLow rate\u003c/b\u003e","mayNotBeReachableByCar":"May not be reachable by car","metaDescriptionChartersSearchNearme":"Looking for fishing charters nearby? Compare \u0026 book fishing charters and deep sea fishing trips!","mostBookedText":"In %p1% this listing was one of our most booked in %p2%!","nearYourLocation":"Near your location","next":"Next","noResultsMatchGroupSize":"%destinationTitle%: No results that match your group size","operator":"Charter Operator","overnightStay":"Overnight stay","overnightStayXDaysMinimum":"{1}Overnight stay, %p1%|[2,Inf] Overnight stay, %p1%, %p2% day minimum","overnightStayXDaysMinimumDeparture":"{1}Overnight stay, %p1%, %p3%|[2,Inf] Overnight stay, %p1%, %p2% day minimum, starts at %p3%","packageBookCTA":"Reserve","perDay":"per day","perDayCtr":"/ day","perPerson":"per person","perPersonDay":"per person / day","perPersonDescription":"This is a shared trip. There will be up to %p% people on the boat, including children","preferredCharterText":"This listing participates in our Preferred Listings Programme. Preferred listings offer excellent service and quality in relation to the best available rates. Based on this, and on feedback received from previous guests, we highly recommend this listing.","prev":"Prev","priceBreakdown":"price breakdown","priceFor":"Price for","privateCharter":"private charter","privateCharterDescription":"You will have the entire boat privately chartered and can bring up to %p% people, including children","recentlyViewed":"Recently Viewed","recentReportsText":"This captain has published fishing reports in the last 15 days.","requestToBook":"Request to Book","reservePackageDepositCTA":"Reserve for %p%","satisfiedCustomers":"Satisfied customers","search":"Search","search2":"Check availability","search3":"Show me prices","searchCharters":"Search Charters","searchChartersDestinations":"Search charters/destinations","searchingCharterDeals":"Searching charter deals...","searchLabel":"Destination, charter, or captain name","searchNearbyForTomorrow":"Search nearby for tomorrow","searchTopFishingCharters":"Search top fishing charters in %p%","secureOnlineBooking":"Secure Online Booking","seeHowFishingBookerRates":"See how FishingBooker rates","selectedFilters":"Selected filters","sellingOutFast":"Going fast!","sharedCharterDescription":"This is a shared trip. There will be up to %p% people on the boat, including children","showMap":"Show map","showMoreFilters":"Show more","soldOut":"Booked out!","soldOutSelectedDate":"You missed this one, but there are other great options if you act fast!","soldOutText":"Your dates are popular – we've run out of trips with this charter! Check out more below.","tripDate":"Trip Date","upToX":"up to %p%","viewXAvailableTrips":"{1} View all available trips |[2,Inf] View %p% available trips","viewXMoreTrips":"{1} view %p% more trip|[2,Inf] view %p% more trips","wePriceMatch":"Best Price Guaranteed","wePriceMatchSubtitle":"When you book with FishingBooker you\u0026rsquo;re getting the lowest rate \u0026bull; If you find a better price for your trip we'll refund the difference!","whereTo":"Where to?","xAdults":"{1} %p% adult|[2,Inf] %p% adults","xBookingsPastWeek":"{1} %p% booking in the past week.|[2,Inf] %p% bookings in the past week.","xChildren":"{0} 0 children|{1}1 child|[2,Inf] %p% children","xDayCustomerService":"7 Day Customer Service","xDays":"{1} %p% day|[2,Inf] %p% days","xDaysTrip":"{1} %p% Day Trip|[2,Inf] %p% Day Trip","xFishingCharters":"{0} No fishing charters|{1} 1 fishing charter|[2,Inf] %p% fishing charters","xFishingChartersAvailableNearYou":"{0} No listings are located near you|{1} %p% listing is located near you|[2, Inf] %p% listings are located near you","xHours":"{1} %p% hour|[2,Inf] %p% hours","xHoursMinutesDriveFrom":"{-1}%p1% hr drive from %p3%|{0}%p2% min drive from %p3%|[1,Inf]%p1% hr %p2% min drive from %p3%","xHoursTrip":"%p% Hour Trip","xMileDriveFromY":"%p1% mile drive from %p2%","xMiles":"mile","xMilesFromY":"{0} %p1% miles from %p2%|{1} %p1% mile from %p2%|[2,Inf] %p1% miles from %p2%","xMilesFromYou":"{0} %p1% miles from you|{1} %p1% mile from you|[2,Inf] %p1% miles from you","xMinimum":"%p% minimum","xMinutes":"{1} %p% minute|[2,Inf] %p% minutes","xPeopleLookingCharter":"{1} There is 1 person looking at this charter.|[2,Inf] There are %p% people looking at this charter.","xPersons":"{1} 1 person|[2,Inf] %p% persons","xPlusAdults":"{1} %p%+ adult|[2,Inf] %p%+ adults","xReviews":"{1} %p% review| [2,Inf]%p% reviews","youMissedIt":"You missed it!","yourNextFishingDestination":"Your Next Fishing Destination","yourSearch":"Your search:"},"seo":{"aboutMetaDesc":"Find out more about FishingBooker. With more than 20k organized fishing trips worldwide. FishingBooker is the world’s largest online service that enables you to find and book fishing trips.","aboutMetaKeywords":"about, fishingbooker, book, fishing trips, travel, fish","aboutMetaTitle":"About Us – FishingBooker","americanExpress":"American Express","bankTransfer":"Bank Transfer","bookNow":"Book now","careersMetaDesc":"Want to become a part of our team? If you're self-motivated, think outside the box, and like to develop data-driven and creative solutions while learning how to grow a business, write to us! We can\u0026rsquo;t wait to meet you.","careersMetaKeywords":"fishingbooker, jobs, careers, apply for a job","careersMetaTitle":"Careers at FishingBooker","cash":"Cash","contactMetaDesc":"Contact Meta Description...","contactMetaKeywords":"Contact Meta keywords","contactMetaTitle":"Contact Us - FishingBooker","corporateCard":"Corporate Card","departmentsMetaDesc":"Want to become a part of our team? If you're self-motivated, think outside the box, and like to develop data-driven and creative solutions while learning how to grow a business, write to us! We can\u0026rsquo;t wait to meet you.","departmentsMetaKeywords":"apply, fishingbooker, job, department, careers","departmentsMetaTitle":"Departments at FishingBooker","masterCard":"Master Card","metaDescriptionAuthLogin":"We missed you, our fellow angler! Ready to get out on the water? Tight Lines.","metaDescriptionCharterViewFishingReport":"Read %destName% fishing reports from %month% %year%. See what fish are biting now in %destName% and find out where to catch them.","metaDescriptionChartersSearch":"[0,5] Looking for fishing charters in %p1%? Compare \u0026 book the best fishing charters and deep sea fishing trips!|[6,Inf] Looking for fishing charters in %p1%? Compare \u0026 book %p2% fishing charters and deep sea fishing trips!","metaDescriptionChartersSearchNearme":"Looking for fishing charters nearby? Compare \u0026 book fishing charters and deep sea fishing trips!","metaDescriptionChartersView":"%p1%. Best Price Guaranteed. See reviews and photos and book now on FishingBooker","metaDescriptionCountriesSitemap":"Want to book one of the 31k+ charters worldwide? Fishingbooker is in %countriesCount% countries","metaDescriptionDestinationsIndex":"Find \u0026amp; compare %p1% fishing charters in over %p2% countries worldwide. Book your trip today!","metaDescriptionDestinationsView":"Top %destName% fishing charters in %season% %year%, from %minPricePerPerson% p/p. Best price guaranteed, verified reviews, and secure online booking. 4-12 hour fishing trips for family and friends.","metaDescriptionDestinationsViewFishingReport":"Fresh %destName% fishing reports from %month% %year%. Top catches, weather conditions and the most productive spots.","metaDescriptionPagesAnglersChoice":"The Angler's Choice Award is given to charter operators on FishingBooker who went the extra mile over the last year. Find out how to qualify for the award.","metaDescriptionPagesIndex":"Looking for a fishing charter? Find the best deals online. Search, book \u0026amp; review over %p1% charters in %p2% countries. Family fishing, sportfishing - you name it!","metaDescriptionPagesWhylist":"FishingBooker helps fishing guides get more customers. It's free to sign up, and with our help, your fishing charter will be seen by customers worldwide.","metaDescriptionReviewsCharter":"{0} Be the first to book a trip with %p1% and leave a review!|[1,Inf]Check out what %p2% anglers say about fishing with %p1% and book your next fishing trip!","metaDescriptionSingleViewFishingReport":"Read %destName% fishing reports from %month% %year%. See what fish are biting now in %destName% and find out where to catch them.","metaDescriptionSitemapListall":"All FishingBooker destinations. Browse fishing charters by destination, fishing type, technique or fish species.","metaDescriptionWinterRelease2023":"Exciting new updates for running your business, stress-free. Boost your listing, diversify your payment options, save time when chatting with customers, and more.","metaKeywordsPagesIndex":"fishing charters, fishing charter, fishing boat, cheap, big game fishing, saltwater fishing, fishing trip, deep sea fishing, bottom fishing, fly fishing, light tackle, big game fishing, sport fishing","metaOgDescriptionPagesIndex":"Need a fishing charter? Search, book \u0026amp; review the best deals online with us! More than %p1% boats in %p2% countries. Deep sea, light tackle, fly fishing - you name it!","metaOgTitlePagesIndex":"FishingBooker - Find \u0026amp; Book Fishing Charters Worldwide. Book your fishing trip now!","metaTitleChartersSearch":"The top fishing charters in %destination%","metaTwitterDescriptionChartersSearch":"I found these fishing charters on FishingBooker and they all look cool. Help me decide which one to book!","metaTwitterDescriptionPagesIndex":"Need a fishing charter? Search, read reviews \u0026amp; book the best deals online with us! More than %p1% fishing boats in %p2% countries.","metaTwitterTitlePagesIndex":"Search, Compare \u0026amp; Book Fishing Charters Worldwide - FishingBooker.com","minMaxPrice":"trips from %minPrice% to %maxPrice%","nearMeMetaDescription":"Discover great fishing charters near you. Compare reviews and rates for local boats and book your angling adventure – best price guaranteed!","nearMeSeoTitle":"Fishing Near Me: Find Charters Near Your Location | FishingBooker","pageTitleAuthLogin":"Welcome! Log In Here - FishingBooker","pageTitleBookingNewBooking":"Book %p% - FishingBooker","pageTitleCategoryDestinationsItem":"Top 10 %p2% %p1% Charters (2022) - FishingBooker","pageTitleCharterListingsIndex":"Charter Listings - FishingBooker","pageTitleChartersIndex":"%p% Fishing Charters - FishingBooker","pageTitleChartersView":"%pChar% - Updated %year% Prices","pageTitleCountriesSitemap":"FishingBooker: Book Fishing Charters in %countriesCount% countries Worldwide","pageTitleCustomLandingPagesIndex":"Custom Landing Pages - FishingBooker","pageTitleDestinationsIndex":"List of Destinations - FishingBooker","pageTitleDestinationsItem":"The 10 BEST Fishing Charters in %p% (%season% %year%)","pageTitleFishSpeciesIndex":"Fish Species by Destination - FishingBooker","pageTitleFishingReportsIndex":"Fishing Reports by Destination - FishingBooker","pageTitleFishingTechniquesIndex":"Fishing Techniques by Destination - FishingBooker","pageTitleFishingTypesIndex":"Fishing Types by Destination - FishingBooker","pageTitleIndexPagesIndex":"Index Pages - FishingBooker","pageTitleLocalizedSitesIndex":"Localized Sites - FishingBooker","pageTitlePagesAnglersChoice":"Angler's Choice Award Program Details | FishingBooker","pageTitlePagesIndex":"FishingBooker - Find \u0026amp; Book Fishing Charters Online","pageTitlePagesWhylist":"List your boat on FishingBooker. Join for free!","pageTitleReportsDestination":"Daily %destName% Fishing Reports (%month% %year%)","pageTitleChartersNearMe":"Fishing near me - Fishingbooker","paymentCheck":"Payment Check","paypal":"PayPal","perGroup":"Price per group","perPerson":"Price per person","pressMetaDesc":"Press meta desc here...","pressMetaKeywords":"Press keywords...","pressMetaTitle":"Press - FishingBooker","reportCharterKeywords":"fishing report, fishing reports, big game fishing, saltwater fishing, fishing trip, deep sea fishing, bottom fishing, fly fishing, light tackle, big game fishing, sport fishing","reportDestinationKeywords":"fishing report, fishing reports, %destinationTitle% fishing reports, big game fishing, saltwater fishing, fishing trip, deep sea fishing, bottom fishing, fly fishing, light tackle, big game fishing, sport fishing","reportLatestKeywords":"fishing report, fishing reports, big game fishing, saltwater fishing, fishing trip, deep sea fishing, bottom fishing, fly fishing, light tackle, big game fishing, sport fishing","reportViewKeywords":"fishing report, fishing reports, %location% fishing reports, %captainName% fishing reports, %charterTitle% fishing reports, fishing trip","safetyMetaTitle":"Safety - FishingBooker","shortDescriptionDepartments":"Ready to join the team? If you identify with our values and know you would fit in with us, send your CV today and let's fish for success together.","teamMetaDesc":"Meet the FishingBooker Team - description...","teamMetaKeywords":"team keywords goes here...","teamMetaTitle":"Meet the FishingBooker Team","TitleDestinations":"The 10 BEST Fishing Charters in %p% from %min_package% (%season% %year%)","verifyMetaDesc":"Want to show customers you're a legitimate business? Upload your documents today.","verifyMetaKeywords":"verification,rankings,fishingbooker","verifyMetaTitle":"Verify your listing and get more bookings","visa":"Visa","winterRelease2023metaTitle":"Introducing 2023's Winter Release","wishlistsMetaTitle":"Wishlist"},"navigation":{"about":"About","aboutFishingbooker":"About FishingBooker","aboutUs":"About Us","account":"My Account","additionalLinks":"Helpful Links","allCharterListings":"Charter Listings","allCountries":"Countries","allCustomLandingPages":"Custom Landing Pages","allDestinations":"All Destinations","allFishingReports":"Fishing Reports","allFishingTechniques":"Fishing Techniques","allFishingTypes":"Fishing Types","allFishSpecies":"Fish Species","allIndexPages":"Index pages","allLocalizedSites":"Localized Sites","allRightsReserved":"Copyright © %year% FishingBooker, Inc. All rights reserved.","anglersChoice":"Angler's Choice","anglersChoiceAward":"Anglers Choice Award","becomeAffiliate":"Become an Affiliate","blog":"Blog","bookings":"Bookings","business":"Business","callSupport":"Call Support","captainApp":"Captain App","captainSignup":"Captain Signup","careers":"Careers","changeCurrency":"Currency","changeLanguage":"Language","company":"Company","contact":"Contact","credit":"Credit","creditAmountText":"Up to \u003cstrong\u003e%p% fishing credit\u003c/strong\u003e will automatically be applied to your next booking.","creditAmountTextNoCredit":"Get $%p% of travel credit for each friend you invite to FishingBooker.","crew":"Team members","crewMembers":"Team members","dashboard":"Dashboard","destinations":"Sitemap","direct":"Direct","discover":"Discover","downloadCaptainApp":"Download the Captain App","expDate":"Exp. %p%","extenuatingCircumstancesPolicy":"Extenuating Circumstances Policy","findUsOn":"Find us on","fishingPages":"Fishing Pages","fishingTechniques":"Fishing Techniques","fishSpecies":"Fish Species","gdprPrivacyNotice":"GDPR Privacy Notice","getHelp":"Get Help","getListed":"List Your Boat","helpCenter":"Help Center","home":"Home","inbox":"Inbox","inviteFriend":"Invite friend","listings":"Listings","logout":"Log Out","loyalty":"My loyalty discounts","manageCalendar":"Calendar","manageMultiCalendar":"Multicalendar","more":"More","myBookings":"My Bookings","myReviews":"My Reviews","myWishlist":"My Wishlist","notifications":"Notifications","onlinePayments":"Online Payments","opportunities":"Opportunities","partnerships":"Partnerships","payoutMethods":"Payout methods","payouts":"Payouts","privacyPolicy":"Privacy Policy","profile":"Profile","questionsAboutFishing":"Questions and answers about fishing","referrals":"Referrals","reports":"Fishing reports","reviews":"Reviews","rulesAndGuidelines":"Platform Rules and Guidelines","safety":"Safety","seeTerms":"See Terms","selectCurrency":"Select currency","selectLanguage":"Select language","settings":"Settings","signinOrCreateProfile":"Sign In or Sign Up","stripeTos":"FishingBooker Online Payment Agreement","support":"Support","termsOfUse":"Terms of Use","typesOfFishing":"Types of Fishing","verification":"Verify Profile","viewAllBookings":"My Bookings","widgets":"Widgets","wishlist":"Wishlist","yourAccount":"Your account"},"login":{"accessYourAccount":"Access your account","additionalInfoMessage":"To continue your Signing Up with %p%, please provide the missing information.","alertDefaultMessage":"Unknown error occurred. Please try again later or contact our customer service.","alertEmailMissing":"Email is missing. Please supply your email.","alreadyCustomer":"Already a member?","anglerSignup":"Angler Signup","areYouSureModalText":"Securing your account gives you full control over your data, trips, and payments.","areYouSureModalTitle":"Are you sure you want to skip securing your account?","backToSignIn":"Back to Log In","captainAccessingCustomerApp":"You’re trying to access the customer app. To access the captain app – please log into FishingBooker for Captains.","changeAccType":"Change account type","charterLocation":"Charter Location","charterOperator":"FishingBooker for Captains","checkYourEmail":"Check your Email","choosePassword":"Create a Password","clickHere":"Click here","companyName":"Company Name","confirm":"Confirm","confirmNewPassword":"Confirm New Password","continueWith":"Continue with %p%","createMyPasswordCTA":"Create my password","createPassword":"Create password so you can securely manage this booking","creatingAccount":"Creating your account...","customerAccessingCaptainApp":"You're trying to access the captain app. To access your customer account, please log into the FishingBooker app.","custToCaptDesc":"It looks like the account %email% you're trying to list your business with is already registered as a customer account.","custToCaptHeader":"Captain, we have a problem","custToCaptOption1":"Go to the settings page and change your account type to captain.","custToCaptOption2":"Log out and register a separate captain account.","custToCaptOptionHeader":"You have two options:","differentEmailError":"Your social account doesn't match the email you booked with. Set up a password now to log in and easily access your trip details.","doNotHaveAnAccountYet":"Don't have an account yet?","email":"Email address","emailDescription":"We will send you a confirmation email once you register. This will give you access to all the benefits FishingBooker has to offer.","errorIncorrectUsernamePassword":"Your email and/or password are incorrect. Please try again (make sure your caps lock is off).","errorInvalidAdminLogin":"Unsuccessful admin login!","finishRegistration":"Finish Registration","finishRegistrationFooter":"Questions? We're here for you: \u003ca href=\"tel:%captainCallService%\"\u003e%captainCallService%\u003c/a\u003e","finishRegistrationHeader":"Welcome, %name% Please Finish Your Registration","firstName":"First Name","forgotPassword":"Forgot password","forgotPasswordInstruction":"Enter the email address associated with your account, and we'll email you a link to reset your password.","forgotPasswordSuccessSubmitMessage":"Check your email at\u003cbr /\u003e\u003cstrong\u003e%p%\u003c/strong\u003e. You\u0026apos;ll get an email with a link to reset your password. It might take a few minutes to arrive.","getStarted":"Get started","goToEmail":"Go to email","goToSignIn":"Go to Sign In","join":"Join %p%","lastName":"Last Name","listYourBoat":"List Your Boat","login":"Log in","logout":"Log Out","magicLinkSentMessage":"Check your email. We sent a link to %email% to help you log in instantly.","newPassword":"New Password (at least 8 characters long)","notMember":"Not a member?","or":"or","password":"Password","passwordDescription":"Choose a unique but memorable password to give you access to your FishingBooker account.","passwordRequiredChars":"Must have at least 8 characters","phoneNumber":"Phone Number","processing":"Processing...","resetPasswordCta":"Save New Password","resetPasswordHeader":"Change Password?","secureAccount":"Secure account","secureYourAccountDescription":"To have full control over your data, trips and payments, set up your account by linking one of your social accounts.","secureYourAccountHeading":"Secure your account","selectLocationFromList":"Select your charter's location from the list so we can customize your FishingBooker experience.","sendAgain":"Send again","sendResetLink":"Send Reset Link","setPasswordButton":"Set up password","setPasswordSuccessDescription":"Please verify your email address","setPasswordSuccessSubmitMessage":"Successfully created password, please verify your email address.","setPasswordSuccessTitle":"Successfully created password","setupAccountModalSeparatorText":"or create the password","setupPassword":"Set up password for","signIn":"Log in","signInTermsPrivacy":"By logging into an account, you're agreeing with our \u003ca href='/pages/terms' class='no-br' target='_blank'\u003eTerms of Use\u003c/a\u003e and \u003ca href='/pages/privacy' class='no-br' target='_blank'\u003ePrivacy Policy\u003c/a\u003e","signInWith":"Log In with %p%","signUp":"Sign up","signupButton":"Sign Up","signupHeader":"Create a Free FishingBooker Account","signupHeaderCaptain":"Create a business listing on FishingBooker","signupHeaderCustomer":"Sign up","signUpTermsPrivacy":"By creating an account, you're agreeing with our \u003ca href='/pages/terms' class='no-br' target='_blank'\u003eTerms of Use\u003c/a\u003e and \u003ca href='/pages/privacy' class='no-br' target='_blank'\u003ePrivacy Policy\u003c/a\u003e","signUpWith":"Sign Up with %p%","signUpWithSocial":"Sign up with","skip":"Skip","socialContinueButton":"Continue with %p%","socialLogInButton":"Log in with %p%","socialSignUpButton":"Sign up with %p%","stayLoggedIn":"Stay logged in","successfulPayment":"Your payment is successful.","termsAndPolicy":"\u003cspan\u003eBy clicking Sign up, I agree to FishingBooker’s \u003ca href=\"https://fishingbooker.com/pages/terms\"\u003eTerms of Use\u003c/a\u003e and\n\u003ca href=\"https://fishingbooker.com/pages/privacy\"\u003e Privacy Policy\u003c/a\u003e.\u003c/span\u003e","thankYouEmail":"Thank you, %email%","tooManyLoginAttemptsMessage":"Login limit reached in the last 15 minutes. Wait a while before attempting again.","twoFaModalInputDescription":"A verification code has been sent to \u003cb\u003e%email%\u003c/b\u003e","twoFaModalInputLabel":"Enter verification code","twoFaModalResendCodeButtonCopy":"Resend","twoFaModalResendCodeExplanation":"Didn't receive a code yet?","twoFaModalResendCodeTimer":"in %timer%","twoFaModalSuccessfulVerification":"Successful verification.","twoFaModalTitle":"Enter verification code","twoFaModalVerifyButtonCopy":"Verify","userCustomer":"Just looking for a fishing trip?","verifyAccountCta":"Resend verification email","verifyAccountEmailSent":"If your email doesn't arrive, please check your spam/junk folder.","verifyAccountEmailSettings":"You can manage your email addresses on the %link% page.","verifyAccountFooter1":"Trouble verifying?","verifyAccountFooter2":"Call customer support %link%.","verifyAccountHeader":"Verify your account","verifyAccountInfo":"You're signed in as %email%. To get full access to all of your account features please verify your email address.","welcomeBack":"Welcome Back!","yourAccount":"Your account"},"nextjsGlobal":{"genericErrorButtonText":"Try again","genericErrorText":"Something went wrong"}},"dataUpdateCount":1,"dataUpdatedAt":1706186338486,"error":null,"errorUpdateCount":0,"errorUpdatedAt":0,"fetchFailureCount":0,"fetchFailureReason":null,"fetchMeta":null,"isInvalidated":false,"status":"success","fetchStatus":"idle"},"queryKey":["translations"],"queryHash":"[\"translations\"]"},{"state":{"data":{"data":null},"dataUpdateCount":1,"dataUpdatedAt":1706186338351,"error":null,"errorUpdateCount":0,"errorUpdatedAt":0,"fetchFailureCount":0,"fetchFailureReason":null,"fetchMeta":null,"isInvalidated":false,"status":"success","fetchStatus":"idle"},"queryKey":["me"],"queryHash":"[\"me\"]"},{"state":{"data":{"data":[{"average":4.8,"reviewCount":28115,"satisfactionRate":96}],"code":200},"dataUpdateCount":1,"dataUpdatedAt":1706186338520,"error":null,"errorUpdateCount":0,"errorUpdatedAt":0,"fetchFailureCount":0,"fetchFailureReason":null,"fetchMeta":null,"isInvalidated":false,"status":"success","fetchStatus":"idle"},"queryKey":["shopper-approved-statistics"],"queryHash":"[\"shopper-approved-statistics\"]"},{"state":{"data":{"data":[],"code":200},"dataUpdateCount":1,"dataUpdatedAt":1706186338563,"error":null,"errorUpdateCount":0,"errorUpdatedAt":0,"fetchFailureCount":0,"fetchFailureReason":null,"fetchMeta":null,"isInvalidated":false,"status":"success","fetchStatus":"idle"},"queryKey":["recent-search-charters",{"currency":"EUR","embed":["charter","min_price","web_url","cover_photo","review_statistics","scarcity"]}],"queryHash":"[\"recent-search-charters\",{\"currency\":\"EUR\",\"embed\":[\"charter\",\"min_price\",\"web_url\",\"cover_photo\",\"review_statistics\",\"scarcity\"]}]"},{"state":{"data":{"data":[],"code":200},"dataUpdateCount":1,"dataUpdatedAt":1706186338598,"error":null,"errorUpdateCount":0,"errorUpdatedAt":0,"fetchFailureCount":0,"fetchFailureReason":null,"fetchMeta":null,"isInvalidated":false,"status":"success","fetchStatus":"idle"},"queryKey":["recent-search-destinations",{"embed":["photo","web_url","title","destination","country_flag","available_charters_label"],"action":"get_by_top_destination"}],"queryHash":"[\"recent-search-destinations\",{\"action\":\"get_by_top_destination\",\"embed\":[\"photo\",\"web_url\",\"title\",\"destination\",\"country_flag\",\"available_charters_label\"]}]"}]},"appProps":{"upstreamUniversalId":"a2550ddac38b42d39128e80e87e1e3e1","upstreamUserAgent":"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36 Edg/120.0.0.0FishingBookerNextJs","baseUrl":"https://fishingbooker.com","currency":"EUR","language":{"code":"en","meta":"en"},"domains":["homepage","search","seo","navigation","login","nextjsGlobal"]}},"__N_SSP":true},"page":"/","query":{"msclkid":"55d43ece2f3b132bdb9d5b7c7a9cc7b0","utm_source":"bing","utm_medium":"cpc","utm_campaign":"DO - [eCPC] - Brand Name - Customers - Worldwide - Search - All Devices","utm_term":"fishingbooker","utm_content":"Brand Name - Main"},"buildId":"o2UexjWF7eNbsonmMOSzI","isFallback":false,"isExperimentalCompile":false,"dynamicIds":[38634,65337,85949,49143,51362,98351,5079,34722,753,7287,58850,3793,43729],"gssp":true,"scriptLoader":[]}</script>
    <script defer=""
        src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
        integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
        data-cf-beacon="{&quot;rayId&quot;:&quot;84b09384094b5b0c&quot;,&quot;version&quot;:&quot;2024.1.0&quot;,&quot;token&quot;:&quot;1ecede7be464412fb75158baf9901398&quot;}"
        crossorigin="anonymous"></script>
    <script id="data-layer" data-nscript="afterInteractive">
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
            "aPageName": "home",
            "aSiteFlow": "a2550ddac38b42d39128e80e87e1e3e1_nextjs",
            "aUrl": "https://fishingbooker.com/?msclkid=55d43ece2f3b132bdb9d5b7c7a9cc7b0&utm_source=bing&utm_medium=cpc&utm_campaign=DO%20-%20%5BeCPC%5D%20-%20Brand%20Name%20-%20Customers%20-%20Worldwide%20-%20Search%20-%20All%20Devices&utm_term=fishingbooker&utm_content=Brand%20Name%20-%20Main"
        });
    </script>
    <script id="google-tag-manager" data-nscript="afterInteractive">
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://sst.fishingbooker.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NWDQ4W');
    </script>
    <script src="https://accounts.google.com/gsi/client" async="true" defer="true" data-nscript="afterInteractive"></script>
    <script id="hotjar" data-nscript="afterInteractive">
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 3282337,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
    <script id="hotjar-identity" data-nscript="afterInteractive">
        window.hj('identify', undefined, {
            'Session ID': 'Nextjs'
        });
    </script><next-route-announcer>
        <p aria-live="assertive" id="__next-route-announcer__" role="alert"
            style="border: 0px; clip: rect(0px, 0px, 0px, 0px); height: 1px; margin: -1px; overflow: hidden; padding: 0px; position: absolute; top: 0px; width: 1px; white-space: nowrap; overflow-wrap: normal;">
        </p>
    </next-route-announcer>
    <script src="https://cdn.cookielaw.org/consent/fd4d689a-7f64-4ab9-a6e1-f855934e1742/OtAutoBlock.js"
        type="text/javascript" data-nscript="afterInteractive"></script>
    <script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js" type="text/javascript" charset="UTF-8"
        data-domain-script="fd4d689a-7f64-4ab9-a6e1-f855934e1742" data-nscript="afterInteractive"></script>
    <div id="onetrust-consent-sdk">
        <div class="onetrust-pc-dark-filter ot-hide ot-fade-in"></div>
        <div id="onetrust-pc-sdk" class="otPcTab ot-hide ot-fade-in" role="alertdialog" aria-modal="true"
            lang="en" aria-label="Manage your privacy settings">
            <div class="ot-pc-header" role="presentation">
                <div class="ot-pc-logo" role="img" aria-label="Company Logo"
                    style="background-image: url(&quot;https://cdn.cookielaw.org/logos/static/ot_logo.png&quot;);
        background-position: left;">
                </div>
                <div class="ot-title-cntr">
                    <h2 id="ot-pc-title">Manage your privacy settings</h2>
                    <div class="ot-close-cntr"><button id="close-pc-btn-handler" class="ot-close-icon"
                            aria-label="Close"></button></div>
                </div>
            </div>
            <div id="ot-pc-content" class="ot-pc-scrollbar ot-sdk-row">
                <div class="ot-sdk-container ot-grps-cntr ot-sdk-column">
                    <div class="ot-sdk-four ot-sdk-columns ot-tab-list" aria-label="Cookie Categories">
                        <ul class="ot-cat-grp" role="tablist">
                            <li class="ot-abt-tab" role="presentation">
                                <div class="ot-active-menu category-menu-switch-handler" role="tab" tabindex="0"
                                    aria-selected="true" aria-controls="ot-tab-desc">
                                    <h3 id="ot-pvcy-txt">Your Privacy</h3>
                                </div>
                            </li>
                            <li class="ot-cat-item ot-always-active-group" role="presentation"
                                data-optanongroupid="C0003">
                                <div class="category-menu-switch-handler" role="tab" tabindex="-1"
                                    aria-selected="false" aria-controls="ot-desc-id-C0003">
                                    <h3 id="ot-header-id-C0003">Functional cookies</h3>
                                </div>
                            </li>
                            <li class="ot-cat-item" role="presentation" data-optanongroupid="C0002">
                                <div class="category-menu-switch-handler" role="tab" tabindex="-1"
                                    aria-selected="false" aria-controls="ot-desc-id-C0002">
                                    <h3 id="ot-header-id-C0002">Analytical cookies</h3>
                                </div>
                            </li>
                            <li class="ot-cat-item" role="presentation" data-optanongroupid="C0004">
                                <div class="category-menu-switch-handler" role="tab" tabindex="-1"
                                    aria-selected="false" aria-controls="ot-desc-id-C0004">
                                    <h3 id="ot-header-id-C0004">Marketing cookies</h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="ot-tab-desc ot-sdk-eight ot-sdk-columns">
                        <div class="ot-desc-cntr" id="ot-tab-desc" tabindex="0" role="tabpanel"
                            aria-labelledby="ot-pvcy-hdr">
                            <h4 id="ot-pvcy-hdr">Your Privacy</h4>
                            <p id="ot-pc-desc" class="ot-grp-desc">Select which cookies you’d like to accept on this
                                site.
                                <br><a href="https://fishingbooker.com/pages/gdpr_privacy_notice"
                                    class="privacy-notice-link" rel="noopener" target="_blank"
                                    aria-label="More information about your privacy, opens in a new tab">You can find
                                    more detailed information on cookie use and descriptions in our privacy and cookie
                                    policy.</a>
                            </p>
                        </div>
                        <div class="ot-desc-cntr ot-hide ot-always-active-group" role="tabpanel" tabindex="0"
                            id="ot-desc-id-C0003">
                            <div class="ot-grp-hdr1">
                                <h4 class="ot-cat-header">Functional cookies</h4>
                                <div class="ot-tgl-cntr">
                                    <div class="ot-always-active">Always Active</div>
                                </div>
                            </div>
                            <p class="ot-grp-desc ot-category-desc">Functional cookies enable our website to work
                                properly, so you can create your account, sign in, and manage your bookings. They also
                                remember your selected currency, language, past searches, and other preferences. These
                                technical cookies must be enabled in order to use our site and services.</p>
                            <div class="ot-hlst-cntr"><button class="ot-link-btn category-host-list-handler"
                                    aria-label="Cookie Details button opens Cookie List menu"
                                    data-parent-id="C0003">Cookies we use‎</button></div>
                        </div>
                        <div class="ot-desc-cntr ot-hide" role="tabpanel" tabindex="0" id="ot-desc-id-C0002">
                            <div class="ot-grp-hdr1">
                                <h4 class="ot-cat-header">Analytical cookies</h4>
                                <div class="ot-tgl"><input type="checkbox" name="ot-group-id-C0002"
                                        id="ot-group-id-C0002" aria-checked="true" role="switch"
                                        class="category-switch-handler" data-optanongroupid="C0002" checked=""
                                        aria-labelledby="ot-header-id-C0002"> <label class="ot-switch"
                                        for="ot-group-id-C0002"><span class="ot-switch-nob"></span> <span
                                            class="ot-label-txt">Analytical cookies</span></label> </div>
                                <div class="ot-tgl-cntr"></div>
                            </div>
                            <p class="ot-grp-desc ot-category-desc">Analytical cookies help us understand how
                                customers like you use FishingBooker. This means we can improve our website, apps, and
                                communications, and ensure we continue to be interesting and relevant.</p>
                            <div class="ot-hlst-cntr"><button class="ot-link-btn category-host-list-handler"
                                    aria-label="Cookie Details button opens Cookie List menu"
                                    data-parent-id="C0002">Cookies we use‎</button></div>
                        </div>
                        <div class="ot-desc-cntr ot-hide" role="tabpanel" tabindex="0" id="ot-desc-id-C0004">
                            <div class="ot-grp-hdr1">
                                <h4 class="ot-cat-header">Marketing cookies</h4>
                                <div class="ot-tgl"><input type="checkbox" name="ot-group-id-C0004"
                                        id="ot-group-id-C0004" aria-checked="true" role="switch"
                                        class="category-switch-handler" data-optanongroupid="C0004" checked=""
                                        aria-labelledby="ot-header-id-C0004"> <label class="ot-switch"
                                        for="ot-group-id-C0004"><span class="ot-switch-nob"></span> <span
                                            class="ot-label-txt">Marketing cookies</span></label> </div>
                                <div class="ot-tgl-cntr"></div>
                            </div>
                            <p class="ot-grp-desc ot-category-desc">FishingBooker and our trusted partners use
                                third-party cookies. These cookies are used to display personalized advertisements both
                                on FishingBooker and other websites. These adverts are based on your browsing such as
                                charter listings you have viewed. These cookies are also used to integrate social media
                                on our site, allowing you to like or share pages or products on social media.</p>
                            <div class="ot-hlst-cntr"><button class="ot-link-btn category-host-list-handler"
                                    aria-label="Cookie Details button opens Cookie List menu"
                                    data-parent-id="C0004">Cookies we use‎</button></div>
                        </div>
                    </div>
                </div>
            </div>
            <section id="ot-pc-lst" class="ot-hide ot-enbl-chr">
                <div class="ot-lst-cntr ot-pc-scrollbar">
                    <div id="ot-pc-hdr">
                        <div id="ot-lst-title"><button class="ot-link-btn back-btn-handler" aria-label="Back"><svg
                                    id="ot-back-arw" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 444.531 444.531" xml:space="preserve">
                                    <title>Back Button</title>
                                    <g>
                                        <path fill="#656565" d="M213.13,222.409L351.88,83.653c7.05-7.043,10.567-15.657,10.567-25.841c0-10.183-3.518-18.793-10.567-25.835
              l-21.409-21.416C323.432,3.521,314.817,0,304.637,0s-18.791,3.521-25.841,10.561L92.649,196.425
              c-7.044,7.043-10.566,15.656-10.566,25.841s3.521,18.791,10.566,25.837l186.146,185.864c7.05,7.043,15.66,10.564,25.841,10.564
              s18.795-3.521,25.834-10.564l21.409-21.412c7.05-7.039,10.567-15.604,10.567-25.697c0-10.085-3.518-18.746-10.567-25.978
              L213.13,222.409z"></path>
                                    </g>
                                </svg></button>
                            <h3>Back</h3>
                        </div>
                        <div class="ot-lst-subhdr">
                            <div id="ot-search-cntr">
                                <p role="status" class="ot-scrn-rdr"></p><label for="vendor-search-handler"
                                    class="ot-scrn-rdr"></label> <input id="vendor-search-handler" type="text"
                                    name="vendor-search-handler"> <svg xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 -30 110 110"
                                    aria-hidden="true">
                                    <path fill="#2e3644" d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23
          s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92
          c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17
          s-17-7.626-17-17S14.61,6,23.984,6z"></path>
                                </svg>
                            </div>
                            <div id="ot-fltr-cntr"><button id="filter-btn-handler" aria-label="Filter"
                                    aria-haspopup="true"><svg role="presentation" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 402.577 402.577" xml:space="preserve">
                                        <title>Filter Button</title>
                                        <g>
                                            <path fill="#2c3643" d="M400.858,11.427c-3.241-7.421-8.85-11.132-16.854-11.136H18.564c-7.993,0-13.61,3.715-16.846,11.136
                        c-3.234,7.801-1.903,14.467,3.999,19.985l140.757,140.753v138.755c0,4.955,1.809,9.232,5.424,12.854l73.085,73.083
                        c3.429,3.614,7.71,5.428,12.851,5.428c2.282,0,4.66-0.479,7.135-1.43c7.426-3.238,11.14-8.851,11.14-16.845V172.166L396.861,31.413
                        C402.765,25.895,404.093,19.231,400.858,11.427z"></path>
                                        </g>
                                    </svg></button></div>
                        </div>
                    </div>
                    <section id="ot-lst-cnt" class="ot-pc-scrollbar">
                        <div class="ot-sdk-row">
                            <div class="ot-sdk-column">
                                <div id="ot-sel-blk">
                                    <div class="ot-sel-all">
                                        <div class="ot-sel-all-hdr"><span class="ot-consent-hdr">Consent</span>
                                            <span class="ot-li-hdr">Leg.Interest</span>
                                        </div>
                                        <div class="ot-sel-all-chkbox">
                                            <div class="ot-chkbox" id="ot-selall-hostcntr"><input
                                                    id="select-all-hosts-groups-handler" type="checkbox"
                                                    aria-checked="false"> <label
                                                    for="select-all-hosts-groups-handler"><span
                                                        class="ot-label-txt">checkbox label</span></label> <span
                                                    class="ot-label-status">label</span></div>
                                            <div class="ot-chkbox" id="ot-selall-vencntr"><input
                                                    id="select-all-vendor-groups-handler" type="checkbox"
                                                    aria-checked="false"> <label
                                                    for="select-all-vendor-groups-handler"><span
                                                        class="ot-label-txt">checkbox label</span></label> <span
                                                    class="ot-label-status">label</span></div>
                                            <div class="ot-chkbox" id="ot-selall-licntr"><input
                                                    id="select-all-vendor-leg-handler" type="checkbox"
                                                    aria-checked="false"> <label
                                                    for="select-all-vendor-leg-handler"><span
                                                        class="ot-label-txt">checkbox label</span></label> <span
                                                    class="ot-label-status">label</span></div>
                                        </div>
                                    </div>
                                </div>
                                <ul id="ot-host-lst">
                                    <li class="ot-host-item"><button class="ot-host-box"
                                            aria-expanded="false"></button>
                                        <section class="ot-acc-hdr">
                                            <div class="ot-tgl-cntr">
                                                <div class="ot-host-hdr">
                                                    <h3 class="ot-host-name"></h3>
                                                    <h4 class="ot-host-desc"></h4>
                                                </div>
                                            </div>
                                            <div class="ot-host-notice"><button class="ot-link-btn ot-host-expand"
                                                    role="presentation" aria-hidden="true" tabindex="-1">View
                                                    Third Party Cookies</button></div>
                                        </section>
                                        <div class="ot-acc-txt">
                                            <div class="ot-host-opts">
                                                <ul class="ot-host-opt">
                                                    <li class="ot-host-info">
                                                        <div>
                                                            <div>Name</div>
                                                            <div>cookie name</div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
                <div id="ot-anchor"></div>
                <section id="ot-fltr-modal">
                    <div id="ot-fltr-cnt"><button id="clear-filters-handler">Clear</button>
                        <div class="ot-fltr-scrlcnt ot-pc-scrollbar">
                            <div class="ot-fltr-opts">
                                <div class="ot-fltr-opt">
                                    <div class="ot-chkbox"><input id="chkbox-id" type="checkbox"
                                            aria-checked="false" class="category-filter-handler"> <label
                                            for="chkbox-id"><span class="ot-label-txt">checkbox label</span></label>
                                        <span class="ot-label-status">label</span>
                                    </div>
                                </div>
                            </div>
                            <div class="ot-fltr-btns"><button id="filter-apply-handler">Apply</button> <button
                                    id="filter-cancel-handler">Cancel</button></div>
                        </div>
                    </div>
                </section>
            </section>
            <div class="ot-pc-footer">
                <div class="ot-btn-container"><button
                        class="save-preference-btn-handler onetrust-close-btn-handler">Confirm my choices</button>
                    <div class="ot-btn-subcntr"> <button id="accept-recommended-btn-handler">Allow all</button>
                    </div>
                </div>
                <div class="ot-pc-footer-logo"><a href="https://www.onetrust.com/products/cookie-consent/"
                        target="_blank" rel="noopener noreferrer"
                        style="background-image: url(&quot;https://cdn.cookielaw.org/logos/static/poweredBy_ot_logo.svg&quot;);"
                        aria-label="Powered by OneTrust Opens in a new Tab"></a></div>
            </div>
            class="ot-scrn-rdr" aria-atomic="true" aria-live="polite"></span><iframe class="ot-text-resize"
                title="onetrust-text-resize" style="position: absolute; top: -50000px; width: 100em;"
                aria-hidden="true"></iframe>
        </div>
    </div><iframe id="_hjSafeContext_99633044" title="_hjSafeContext" tabindex="-1" aria-hidden="true"
        src="about:blank"
        style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe>
    <script type="text/javascript" id="">
        (function() {
            var a = window.location.href;
            a = a.split("?")[0];
            var e = a.split("/")[3];
            a = a.split("/")[4];
            var b = e.concat("/", a ? a : "");
            (a = google_tag_manager["rm"]["642335"](2)) || (a = "blog" == e ? "blog" : b);
            e = ".fishingbooker.com";
            b = new Date;
            b.setTime(b.getTime() + 18E5);
            b = b.toUTCString();
            a: {
                var f = document.cookie,
                    g = "fbLandingPage\x3d",
                    c = f.indexOf("; " + g);
                if (-1 == c) {
                    if (c = f.indexOf(g), 0 != c) {
                        var d = null;
                        break a
                    }
                } else c += 2,
                d = document.cookie.indexOf(";", c),
                -1 == d && (d = f.length);d = decodeURI(f.substring(c + g.length, d))
            }
            null == d && (document.cookie =
                "fbLandingPage\x3d" + a + ";expires\x3d" + b + ";domain\x3d" + e + ";path\x3d/;")
        })();
    </script>
    <script type="text/javascript"
        src="https://dx.mountain.com/spx?dxver=4.0.0&amp;shaid=32883&amp;tdr=https%3A%2F%2Fwww.bing.com%2F&amp;plh=https%3A%2F%2Ffishingbooker.com%2F%3Fmsclkid%3D55d43ece2f3b132bdb9d5b7c7a9cc7b0%26utm_source%3Dbing%26utm_medium%3Dcpc%26utm_campaign%3DDO%2520-%2520%255BeCPC%255D%2520-%2520Brand%2520Name%2520-%2520Customers%2520-%2520Worldwide%2520-%2520Search%2520-%2520All%2520Devices%26utm_term%3Dfishingbooker%26utm_content%3DBrand%2520Name%2520-%2520Main&amp;cb=5422177264614758term=value">
    </script>
    <script type="text/javascript" id="">
        (function() {
            var c = "4.0.0",
                h = "32883",
                k = "term\x3dvalue";
            try {
                var f = "" !== top.document.referer ? encodeURIComponent(top.document.referrer.substring(0, 2048)) : ""
            } catch (g) {
                f = null !== document.referrer ? document.referrer.toString().substring(0, 2048) : ""
            }
            try {
                var a = window && window.top && document.location && window.top.location === document.location ?
                    document.location : window && window.top && window.top.location && "" !== window.top.location ?
                    window.top.location : document.location
            } catch (g) {
                a = document.location
            }
            try {
                var d = "" !== parent.location.href ?
                    encodeURIComponent(parent.location.href.toString().substring(0, 2048)) : ""
            } catch (g) {
                try {
                    d = null !== a ? encodeURIComponent(a.toString().substring(0, 2048)) : ""
                } catch (l) {
                    d = ""
                }
            }
            var e;
            a = document.createElement("script");
            var b = document.getElementsByTagName("script");
            b = Number(b.length) - 1;
            b = document.getElementsByTagName("script")[b];
            "undefined" === typeof e && (e = Math.floor(1E17 * Math.random()));
            c = "dx.mountain.com/spx?dxver\x3d" + c + "\x26shaid\x3d" + h + "\x26tdr\x3d" + f + "\x26plh\x3d" + d +
                "\x26cb\x3d" + e + k;
            a.type = "text/javascript";
            a.src = ("https:" === document.location.protocol ? "https://" : "http://") + c;
            b.parentNode.insertBefore(a, b)
        })();
    </script>
    <script type="text/javascript" id="" src="https://p.teads.tv/teads-fellow.js"></script>
    <script type="text/javascript" id="">
        var _comscore = _comscore || [];
        _comscore.push({
            c1: "7",
            c2: "38091237",
            c3: "20230402"
        });
        (function() {
            var a = document.createElement("script"),
                b = document.getElementsByTagName("script")[0];
            a.async = !0;
            a.src = "https://sb.scorecardresearch.com/cs/38091237/beacon.js";
            b.parentNode.insertBefore(a, b)
        })();
    </script>
    <noscript>
        <img src="https://sb.scorecardresearch.com/p?c1=7&amp;c2=38091237&amp;c3=20230402&amp;cv=3.6.0&amp;cj=1">
    </noscript>

    <script type="text/javascript" id="">
        var _comscore = _comscore || [];
        _comscore.push({
            c1: "7",
            c2: "38091237",
            c3: "20230401"
        });
        (function() {
            var a = document.createElement("script"),
                b = document.getElementsByTagName("script")[0];
            a.async = !0;
            a.src = "https://sb.scorecardresearch.com/cs/38091237/beacon.js";
            b.parentNode.insertBefore(a, b)
        })();
    </script>
    <noscript>
        <img src="https://sb.scorecardresearch.com/p?c1=7&amp;c2=38091237&amp;c3=20230401&amp;cv=3.6.0&amp;cj=1">
    </noscript>

    <script type="text/javascript" id="">
        (function(a, c, e, f, d, b) {
            a.hj = a.hj || function() {
                (a.hj.q = a.hj.q || []).push(arguments)
            };
            a._hjSettings = {
                hjid: 3282337,
                hjsv: 6
            };
            d = c.getElementsByTagName("head")[0];
            b = c.createElement("script");
            b.async = 1;
            b.src = e + a._hjSettings.hjid + f + a._hjSettings.hjsv;
            d.appendChild(b)
        })(window, document, "https://static.hotjar.com/c/hotjar-", ".js?sv\x3d");
        var userId = google_tag_manager["rm"]["642335"](9) || null;
        window.hj("identify", userId, {
            "Session ID": google_tag_manager["rm"]["642335"](10),
            "User type": google_tag_manager["rm"]["642335"](11),
            Experiments: google_tag_manager["rm"]["642335"](12)
        });
    </script>
    <div style="display: none; visibility: hidden;">
        <script>
            if (!document.getElementById("lunioScript")) {
                var lunioScript = document.createElement("script");
                lunioScript.id = "lunioScript";
                lunioScript.async = !0;
                lunioScript.src = "https://client.prod.mplat-ppcprotect.com/qPO22gJMCsYbZDJFRB3CNcfMLnx_qfKksPmYvFp4.js";
                document.head.appendChild(lunioScript)
            };
        </script>
    </div>
    <script type="text/javascript" id="">
        ! function(b, e, f, g, a, c, d) {
            b.fbq || (a = b.fbq = function() {
                    a.callMethod ? a.callMethod.apply(a, arguments) : a.queue.push(arguments)
                }, b._fbq || (b._fbq = a), a.push = a, a.loaded = !0, a.version = "2.0", a.queue = [], c = e
                .createElement(f), c.async = !0, c.src = g, d = e.getElementsByTagName(f)[0], d.parentNode.insertBefore(
                    c, d))
        }(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
        fbq("init", "1434682803439891", {
            em: google_tag_manager["rm"]["642335"](33),
            ph: google_tag_manager["rm"]["642335"](34),
            fn: google_tag_manager["rm"]["642335"](35),
            ln: google_tag_manager["rm"]["642335"](36)
        });
        fbq("track", "PageView", {
            userType: google_tag_manager["rm"]["642335"](37),
            publishedCharters: google_tag_manager["rm"]["642335"](38),
            captainApp: google_tag_manager["rm"]["642335"](39)
        });
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1434682803439891&amp;ev=PageView&amp;noscript=1"></noscript>


    <script type="text/javascript" id="" src="//static.criteo.net/js/ld/ld.js" class="optanon-category-C0004"></script>
    <script type="text/javascript" id="">
        (function() {
            var a = document.createElement("script");
            a.id = "cb4587b7-fd39-4b7b-ac9b-4ea23477d3d1";
            a.src = "https://seoab.io";
            a.async = !0;
            document.head.appendChild(a)
        })();
    </script><img
        src="https://data.adxcel-ec2.com/pixel/?ad_log=referer&amp;action=lead&amp;pixid=1407eadf-3f15-4e82-a1d6-8cf36df89de6"
        width="1" height="1" border="0">
    <script type="text/javascript" id="" src="//static.ads-twitter.com/oct.js"></script><img
        src="https://t.co/i/adsct?bci=3&amp;eci=2&amp;event_id=0fa66189-6e31-47e2-b095-cd260d108bf6&amp;events=%5B%5B%22pageview%22%2C%7B%7D%5D%5D&amp;integration=advertiser&amp;p_id=Twitter&amp;p_user_id=0&amp;pl_id=66ae9035-ec80-48fe-9538-a44c81f0928c&amp;tw_document_href=https%3A%2F%2Ffishingbooker.com%2F%3Fmsclkid%3D55d43ece2f3b132bdb9d5b7c7a9cc7b0%26utm_source%3Dbing%26utm_medium%3Dcpc%26utm_campaign%3DDO%2520-%2520%255BeCPC%255D%2520-%2520Brand%2520Name%2520-%2520Customers%2520-%2520Worldwide%2520-%2520Search%2520-%2520All%2520Devices%26utm_term%3Dfishingbooker%26utm_content%3DBrand%2520Name%2520-%2520Main&amp;tw_iframe_status=0&amp;tw_order_quantity=0&amp;tw_sale_amount=0&amp;txn_id=o8c90&amp;type=javascript&amp;version=2.3.29"
        height="1" width="1" style="display: none;"><img
        src="https://analytics.twitter.com/i/adsct?bci=3&amp;eci=2&amp;event_id=0fa66189-6e31-47e2-b095-cd260d108bf6&amp;events=%5B%5B%22pageview%22%2C%7B%7D%5D%5D&amp;integration=advertiser&amp;p_id=Twitter&amp;p_user_id=0&amp;pl_id=66ae9035-ec80-48fe-9538-a44c81f0928c&amp;tw_document_href=https%3A%2F%2Ffishingbooker.com%2F%3Fmsclkid%3D55d43ece2f3b132bdb9d5b7c7a9cc7b0%26utm_source%3Dbing%26utm_medium%3Dcpc%26utm_campaign%3DDO%2520-%2520%255BeCPC%255D%2520-%2520Brand%2520Name%2520-%2520Customers%2520-%2520Worldwide%2520-%2520Search%2520-%2520All%2520Devices%26utm_term%3Dfishingbooker%26utm_content%3DBrand%2520Name%2520-%2520Main&amp;tw_iframe_status=0&amp;tw_order_quantity=0&amp;tw_sale_amount=0&amp;txn_id=o8c90&amp;type=javascript&amp;version=2.3.29"
        height="1" width="1" class="optanon-category-C0004" style="display: none;">
    <div id="batBeacon736495480959" style="width: 0px; height: 0px; display: none; visibility: hidden;"><img
            id="batBeacon333832973839" width="0" height="0" alt=""
            src="https://bat.bing.com/action/0?ti=4063553&amp;tm=gtm002&amp;Ver=2&amp;mid=88bf2845-4984-4fab-8dbb-3466babec126&amp;sid=a0d0ddb0bb6911ee9fec8f8e795e8960&amp;vid=a0d126f0bb6911ee9d21b765028f49ca&amp;vids=0&amp;msclkid=55d43ece2f3b132bdb9d5b7c7a9cc7b0-1&amp;uach=pv%3D15.0.0&amp;pi=918639831&amp;lg=sk&amp;sw=1707&amp;sh=1067&amp;sc=24&amp;tl=FishingBooker%20-%20Find%20%26%20Book%20Fishing%20Charters%20Online&amp;kw=fishing%20charters,%20fishing%20charter,%20fishing%20boat,%20cheap,%20big%20game%20fishing,%20saltwater%20fishing,%20fishing%20trip,%20deep%20sea%20fishing,%20bottom%20fishing,%20fly%20fishing,%20light%20tackle,%20big%20game%20fishing,%20sport%20fishing&amp;p=https%3A%2F%2Ffishingbooker.com%2F%3Fmsclkid%3D55d43ece2f3b132bdb9d5b7c7a9cc7b0%26utm_source%3Dbing%26utm_medium%3Dcpc%26utm_campaign%3DDO%2520-%2520%255BeCPC%255D%2520-%2520Brand%2520Name%2520-%2520Customers%2520-%2520Worldwide%2520-%2520Search%2520-%2520All%2520Devices%26utm_term%3Dfishingbooker%26utm_content%3DBrand%2520Name%2520-%2520Main&amp;r=https%3A%2F%2Fwww.bing.com%2F&amp;lt=1546&amp;evt=pageLoad&amp;sv=1&amp;rn=343386"
            class="optanon-category-C0004" style="width: 0px; height: 0px; display: none; visibility: hidden;">
    </div>
    <script type="text/javascript" id="">
        window.teads_e = window.teads_e || [];
        window.teads_buyer_pixel_id = 7953;
    </script>
    <script type="text/javascript" id="">
        window.criteo_q = window.criteo_q || [];
        window.criteo_q.push({
            event: "setAccount",
            account: google_tag_manager["rm"]["642335"](48)
        }, {
            event: "setSiteType",
            type: google_tag_manager["rm"]["642335"](49)
        }, {
            event: "setEmail",
            email: ""
        }, {
            event: "viewHome"
        });
    </script>
    <img width="1" height="1" alt="" border="0"
        src="https://insight.adsrvr.org/track/evnt/?adv=d0a67x8&amp;ct=0:dungohu&amp;fmt=3"
        class="optanon-category-C0004" style="display: none;">
    <script type="text/javascript"
        src="https://px.mountain.com/st?ga_tracking_id=UA-41905914-1%3BG-GXS2QP38KB&amp;ga_client_id=1908328009.1706177280&amp;shpt=FishingBooker%20-%20Find%20%26%20Book%20Fishing%20Charters%20Online&amp;ga_info=%7B%22status%22%3A%22OK%22%2C%22ga_tracking_id%22%3A%22UA-41905914-1%3BG-GXS2QP38KB%22%2C%22ga_client_id%22%3A%221908328009.1706177280%22%2C%22shpt%22%3A%22FishingBooker%20-%20Find%20%26%20Book%20Fishing%20Charters%20Online%22%2C%22dcm_cid%22%3A%221706186125.3%22%2C%22dcm_gid%22%3A%22957722626.1706177280%22%2C%22ga_utm_campaign%22%3A%22DO%20-%20%5BeCPC%5D%20-%20Brand%20Name%20-%20Customers%20-%20Worldwide%20-%20Search%20-%20All%20Devices%22%2C%22ga_utm_source%22%3A%22bing%22%2C%22ga_utm_medium%22%3A%22cpc%22%2C%22mntnis%22%3A%22761zRY7eOzzCpc0%2FBQFN6rG95QYTAoyD%22%2C%22execution_workflow%22%3A%7B%22iteration%22%3A6%2C%22shpt%22%3A%22OK%22%2C%22dcm_cid%22%3A%22OK%22%2C%22dcm_gid%22%3A%22OK%22%2C%22ga_utm_campaign%22%3A%22OK%22%2C%22ga_utm_source%22%3A%22OK%22%2C%22ga_utm_medium%22%3A%22OK%22%7D%7D&amp;dcm_cid=1706186125.3&amp;dcm_gid=957722626.1706177280&amp;available_ga=%5B%7B%22id%22%3A%22UA-41905914-1%22%2C%22sess_id%22%3Anull%7D%5D&amp;hardcoded_ga=G-GXS2QP38KB%3BUA-41905914-1&amp;dxver=4.0.0&amp;shaid=32883&amp;tdr=https%3A%2F%2Fwww.bing.com%2F&amp;plh=https%3A%2F%2Ffishingbooker.com%2F%3Fmsclkid%3D55d43ece2f3b132bdb9d5b7c7a9cc7b0%26utm_source%3Dbing%26utm_medium%3Dcpc%26utm_campaign%3DDO%2520-%2520%255BeCPC%255D%2520-%2520Brand%2520Name%2520-%2520Customers%2520-%2520Worldwide%2520-%2520Search%2520-%2520All%2520Devices%26utm_term%3Dfishingbooker%26utm_content%3DBrand%2520Name%2520-%2520Main&amp;cb=5422177264614758term%3Dvalue&amp;shpc=&amp;shadditional=criteo%3Dtrue">
    </script>
    <script type="text/javascript">
        ! function() {
            var e =
                '(function(){try {window.mntn = {is_viewable_verified_visit:\'false\', is_cross_device:\'false\', creative_group_id:\'\', creative_group_name:\'\', impression_epoch_micros:\'\', visit_tracking:\'\'};} catch (e) {}})();',
                t = document.createElement('script');
            t.type = 'text/javascript', document.createElement('canvas').getContext ? t.innerText ? t.innerText = e : t
                .textContent = e : t.text = g, e = document.getElementsByTagName('script'), e = Number(e.length) - 1, (e =
                    document.getElementsByTagName('script')[e]).parentNode.insertBefore(t, e)
        }();
    </script>
    <script type="text/javascript">
        (function() {
            try {
                window.mntn = {
                    is_viewable_verified_visit: 'false',
                    is_cross_device: 'false',
                    creative_group_id: '',
                    creative_group_name: '',
                    impression_epoch_micros: '',
                    visit_tracking: ''
                };
            } catch (e) {}
        })();
    </script>
    <script type="text/javascript" id="">
        twttr.conversion.trackPid(google_tag_manager["rm"]["642335"](40), {
            tw_sale_amount: 0,
            tw_order_quantity: 0
        });
    </script>

    <noscript>
        <img height="1" width="1" style="display:none;" alt=""
            src="https://analytics.twitter.com/i/adsct?txn_id=o8c9f&amp;p_id=Twitter&amp;tw_sale_amount=0&amp;tw_order_quantity=0">
        <img height="1" width="1" style="display:none;" alt=""
            src="//t.co/i/adsct?txn_id=o8c9f&amp;p_id=Twitter&amp;tw_sale_amount=0&amp;tw_order_quantity=0">
    </noscript>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <img src="https://t.co/i/adsct?bci=3&amp;eci=1&amp;event_id=78c77d45-7e25-4485-9b3b-6aecb121ca6a&amp;integration=advertiser&amp;p_id=Twitter&amp;p_user_id=0&amp;pl_id=66ae9035-ec80-48fe-9538-a44c81f0928c&amp;tw_document_href=https%3A%2F%2Ffishingbooker.com%2F%3Fmsclkid%3D55d43ece2f3b132bdb9d5b7c7a9cc7b0%26utm_source%3Dbing%26utm_medium%3Dcpc%26utm_campaign%3DDO%2520-%2520%255BeCPC%255D%2520-%2520Brand%2520Name%2520-%2520Customers%2520-%2520Worldwide%2520-%2520Search%2520-%2520All%2520Devices%26utm_term%3Dfishingbooker%26utm_content%3DBrand%2520Name%2520-%2520Main&amp;tw_iframe_status=0&amp;tw_order_quantity=0&amp;tw_sale_amount=0&amp;txn_id=o8c90&amp;type=javascript&amp;version=2.3.29"
        height="1" width="1" style="display: none;"><img
        src="https://analytics.twitter.com/i/adsct?bci=3&amp;eci=1&amp;event_id=78c77d45-7e25-4485-9b3b-6aecb121ca6a&amp;integration=advertiser&amp;p_id=Twitter&amp;p_user_id=0&amp;pl_id=66ae9035-ec80-48fe-9538-a44c81f0928c&amp;tw_document_href=https%3A%2F%2Ffishingbooker.com%2F%3Fmsclkid%3D55d43ece2f3b132bdb9d5b7c7a9cc7b0%26utm_source%3Dbing%26utm_medium%3Dcpc%26utm_campaign%3DDO%2520-%2520%255BeCPC%255D%2520-%2520Brand%2520Name%2520-%2520Customers%2520-%2520Worldwide%2520-%2520Search%2520-%2520All%2520Devices%26utm_term%3Dfishingbooker%26utm_content%3DBrand%2520Name%2520-%2520Main&amp;tw_iframe_status=0&amp;tw_order_quantity=0&amp;tw_sale_amount=0&amp;txn_id=o8c90&amp;type=javascript&amp;version=2.3.29"
        height="1" width="1" class="optanon-category-C0004" style="display: none;">
    <div id="criteo-tags-div" style="display: none;"></div><iframe height="0" width="0"
        title="Criteo DIS iframe" style="display: none;"></iframe>
@endsection
