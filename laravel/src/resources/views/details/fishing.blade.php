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

        .kJqlRW {
            font-size: 18px;
            font-weight: 700;
            line-height: 28px;
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


        .component-margin-medium {
            margin: 0 0 10px 0;
        }

        .label-header-desktop {
            margin-bottom: 10px;
            font-size: 20px;
        }

        /*checkbox multi*/
        .iBfvwL {
            padding: 10px 0px;
            width: 100%;
        }

        .epfQkR {
            display: flex;
        }

        .jEMZuX {
            font-weight: normal;
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




        /**/


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

        button,
        input,
        select,
        textarea {
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
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

        .bhsxFa {
            white-space: nowrap;
            cursor: pointer;
            padding: 16px 24px;
            display: flex;
        }

        *,
        :after,
        :before {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
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

        .sc-jRwbcX {
            height: auto;
        }

        .cbCCGQ {
            cursor: pointer;
        }

        .hUwBEC {
            width: 20px;
            height: 20px;
            align-items: center;
            display: flex;
            cursor: pointer;
        }

        .error-message {
            margin-top: 10px;
            display: none;
            border: 2px solid #8B0000;
            background-color: #FFC0CB;
            color: #8B0000;
            padding: 10px;
            position: relative;
            border-radius: 10px;
        }


        .error-message.visible {
            display: block;
        }
    </style>

    <div class="captain-dashboards__sc-l574mi-0 cjvDjC webview-hidden"><a class="eqRKgt" href="/manage/listings"
            style="border-bottom-width: 2px;">Back to Listings</a>
    </div>

    @include('details.listing_menu')

    <div id="scrollable-content" class="scrollable-div">
        <div class="center-container">
            <section class="pages-container-desktop" data-testid="listing-fishing-container">
                <div class="text-muted header-desktop">Fishing</div>
                <div style="margin-bottom: 16px;">
                    <div class="listing__sc-9wibq3-0 kJqlRW">Targeted species</div>
                </div>


                <div style="margin-bottom: 24px;">
                    <div class="listing__sc-9wibq3-1 iTJPFh">Which fish species do you target and catch on trips? Add up to
                        12 fish species.</div>
                </div>


                <form action="{{ route('update_fishing', $listing->id) }}" method="POST">
                    @csrf
                    <div>
                        <div style="margin-bottom: 8px;">
                            <div class="listing__sc-9wibq3-2 dvpcpn">Add targeted species</div>
                            <div class="error-message" id="error-message"></div>
                        </div>
                    </div>
                    <div>
                        <input type="text" id="searchInput" class="sc-bWOGAC hyomwy" placeholder="Search fish species">
                        <select name="fish" id="fishSpeciesSelect" multiple size="5" style="display: none;">
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
                        <input type="hidden" name="fishNumber" id="fishNumber" value="0">
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
                                    if (selectedOptions.length >= 12) {
                                        alert("You can select a maximum of 12 fish species.");
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
                            document.getElementById("submitBtn").addEventListener("click", function(event) {
                                if (selectedOptions.length < 5) {
                                    event
                                        .preventDefault(); 
                                    const errorMessageDiv = document.getElementById("error-message");
                                    document.getElementById("error-message").classList.add("visible");
                                    errorMessageDiv.innerHTML =
                                        "<i class='fas fa-exclamation-triangle' style='font-size:24px;color:#8B0000;'></i> You must select a minimum of 5 fish.";
                                    const parentElement = document.getElementById("selectedFish").parentNode.parentNode;
                                    parentElement.scrollIntoView({
                                        behavior: "smooth",
                                        block: "start"
                                    });
                                } else {
                                    errorMessageDiv.textContent =
                                        ""; 
                                }
                            });
                        });
                    </script>





                    <br>
                    <hr>
                    <div class="">
                        <section data-testid="fishing-locations-container">
                            <div class="component-margin-medium label-header-desktop"><strong>Fishing Locations</strong>
                            </div>
                            <p class="text-muted">Where do you go on your fishing trips?</p>

                            <div class="error-message" id="error-message2"></div><br>

                            <div style="display: flex; align-items: center;">
                                <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                    <span class="sc-fXqpFg eiuMvt">
                                        <span class="sc-cZFQFd kmNniD">
                                            <span class="sc-dsHJmm jxZtQh"></span>
                                            <input @if (DB::table('fishing_locations')->where('name', 'river')->exists() and
                                                    DB::table('fishing_locations')->where('listing_id', $listing->id)->where('name', 'river')->count() >=
                                                        1) checked @endif type="checkbox"
                                                class="sc-jTjUTQ hUwBEC" name="fishing_locations[]" value="river">
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
                                            <input @if (DB::table('fishing_locations')->where('name', 'lake')->exists() and
                                                    DB::table('fishing_locations')->where('listing_id', $listing->id)->where('name', 'lake')->count() >=
                                                        1) checked @endif type="checkbox"
                                                class="sc-jTjUTQ hUwBEC" name="fishing_locations[]" value="lake">
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
                                            <input @if (DB::table('fishing_locations')->where('name', 'inshore')->exists() and
                                                    DB::table('fishing_locations')->where('listing_id', $listing->id)->where('name', 'inshore')->count() >=
                                                        1) checked @endif type="checkbox"
                                                class="sc-jTjUTQ hUwBEC" name="fishing_locations[]" value="inshore">
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
                                            <input @if (DB::table('fishing_locations')->where('name', 'nearshore')->exists() and
                                                    DB::table('fishing_locations')->where('listing_id', $listing->id)->where('name', 'nearshore')->count() >=
                                                        1) checked @endif type="checkbox"
                                                class="sc-jTjUTQ hUwBEC" name="fishing_locations[]" value="nearshore">
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
                                            <input @if (DB::table('fishing_locations')->where('name', 'offshore')->exists() and
                                                    DB::table('fishing_locations')->where('listing_id', $listing->id)->where('name', 'offshore')->count() >=
                                                        1) checked @endif type="checkbox"
                                                class="sc-jTjUTQ hUwBEC" name="fishing_locations[]" value="offshore">
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
                                            <input @if (DB::table('fishing_locations')->where('name', 'reef')->exists() and
                                                    DB::table('fishing_locations')->where('listing_id', $listing->id)->where('name', 'reef')->count() >=
                                                        1) checked @endif type="checkbox"
                                                class="sc-jTjUTQ hUwBEC" name="fishing_locations[]" value="reef">
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
                                            <input @if (DB::table('fishing_locations')->where('name', 'wreck')->exists() and
                                                    DB::table('fishing_locations')->where('listing_id', $listing->id)->where('name', 'wreck')->count() >=
                                                        1) checked @endif type="checkbox"
                                                class="sc-jTjUTQ hUwBEC" name="fishing_locations[]" value="wreck">
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
                                            <input @if (DB::table('fishing_locations')->where('name', 'flats')->exists() and
                                                    DB::table('fishing_locations')->where('listing_id', $listing->id)->where('name', 'flats')->count() >=
                                                        1) checked @endif type="checkbox"
                                                class="sc-jTjUTQ hUwBEC" name="fishing_locations[]" value="flats">
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
                                            <input @if (DB::table('fishing_locations')->where('name', 'backcountry')->exists() and
                                                    DB::table('fishing_locations')->where('listing_id', $listing->id)->where('name', 'backcountry')->count() >=
                                                        1) checked @endif type="checkbox"
                                                class="sc-jTjUTQ hUwBEC" name="fishing_locations[]" value="backcountry">
                                        </span>
                                    </span>
                                    <span style="margin-left: 7px; font-weight: normal;">Backcountry</span>
                                </label>
                            </div>
                            <script>
                                function checkFishingLocations() {
                                    var checkboxes = document.querySelectorAll('input[name="fishing_locations[]"]');
                                    var checkedOne = Array.prototype.slice.call(checkboxes).some(x => x.checked);
                                    if (!checkedOne) {
                                        const errorMessageDiv = document.getElementById("error-message2");
                                        errorMessageDiv.style.display = "block"; 
                                        errorMessageDiv.innerHTML =
                                            "<i class='fas fa-exclamation-triangle' style='font-size:24px;color:#8B0000;'></i> You must choose at least one fishing location.";

                                        document.getElementById('error-message2')
                                    .scrollIntoView(); 
                                        return false; 
                                    }
                                }
                            </script>

                        </section>
                    </div>


                    <hr>
                    <div class="">
                        <section data-testid="fishing-techniques-container">
                            <div class="component-margin-medium label-header-desktop"><strong>Fishing Techniques</strong>
                            </div>
                            <p class="text-muted">Which fishing techniques do you use?</p>

                            <div class="error-message" id="error-message3"></div><br>

                            <div style="display: flex; align-items: center;">
                                <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                    <span class="sc-fXqpFg eiuMvt">
                                        <span class="sc-cZFQFd kmNniD">
                                            <span class="sc-dsHJmm jxZtQh"></span>
                                            <input @if (DB::table('fishing_techniques')->where('name', 'light_tackle')->exists() and
                                                    DB::table('fishing_techniques')->where('listing_id', $listing->id)->where('name', 'light_tackle')->count() >=
                                                        1) checked @endif type="checkbox"
                                                class="sc-jTjUTQ hUwBEC" name="fishing_technique[]"value="light_tackle">
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
                                            <input @if (DB::table('fishing_techniques')->where('name', 'heavy_tackle')->exists() and
                                                    DB::table('fishing_techniques')->where('listing_id', $listing->id)->where('name', 'heavy_tackle')->count() >=
                                                        1) checked @endif type="checkbox"
                                                class="sc-jTjUTQ hUwBEC" name="fishing_technique[]" value="heavy_tackle">
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
                                            <input @if (DB::table('fishing_techniques')->where('name', 'bottom_fishing')->exists() and
                                                    DB::table('fishing_techniques')->where('listing_id', $listing->id)->where('name', 'bottom_fishing')->count() >=
                                                        1) checked @endif type="checkbox"
                                                class="sc-jTjUTQ hUwBEC" name="fishing_technique[]"
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
                                            <input @if (DB::table('fishing_techniques')->where('name', 'deep_sea_fishing')->exists() and
                                                    DB::table('fishing_techniques')->where('listing_id', $listing->id)->where('name', 'deep_sea_fishing')->count() >=
                                                        1) checked @endif type="checkbox"
                                                class="sc-jTjUTQ hUwBEC" name="fishing_technique[]"
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
                                            <input @if (DB::table('fishing_techniques')->where('name', 'trolling')->exists() and
                                                    DB::table('fishing_techniques')->where('listing_id', $listing->id)->where('name', 'trolling')->count() >=
                                                        1) checked @endif type="checkbox"
                                                class="sc-jTjUTQ hUwBEC" name="fishing_technique[]" value="trolling">
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
                                            <input @if (DB::table('fishing_techniques')->where('name', 'spinning')->exists() and
                                                    DB::table('fishing_techniques')->where('listing_id', $listing->id)->where('name', 'spinning')->count() >=
                                                        1) checked @endif type="checkbox"
                                                class="sc-jTjUTQ hUwBEC" name="fishing_technique[]" value="spinning">
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
                                            <input @if (DB::table('fishing_techniques')->where('name', 'jigging')->exists() and
                                                    DB::table('fishing_techniques')->where('listing_id', $listing->id)->where('name', 'jigging')->count() >=
                                                        1) checked @endif type="checkbox"
                                                class="sc-jTjUTQ hUwBEC" name="fishing_technique[]" value="jigging">
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
                                            <input @if (DB::table('fishing_techniques')->where('name', 'popping')->exists() and
                                                    DB::table('fishing_techniques')->where('listing_id', $listing->id)->where('name', 'popping')->count() >=
                                                        1) checked @endif type="checkbox"
                                                class="sc-jTjUTQ hUwBEC" name="fishing_technique[]" value="popping">
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
                                            <input @if (DB::table('fishing_techniques')->where('name', 'fly_fishing')->exists() and
                                                    DB::table('fishing_techniques')->where('listing_id', $listing->id)->where('name', 'fly_fishing')->count() >=
                                                        1) checked @endif type="checkbox"
                                                class="sc-jTjUTQ hUwBEC" name="fishing_technique[]" value="fly_fishing">
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
                                            <input @if (DB::table('fishing_techniques')->where('name', 'drift_fishing')->exists() and
                                                    DB::table('fishing_techniques')->where('listing_id', $listing->id)->where('name', 'drift_fishing')->count() >=
                                                        1) checked @endif type="checkbox"
                                                class="sc-jTjUTQ hUwBEC" name="fishing_technique[]"
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
                                            <input @if (DB::table('fishing_techniques')->where('name', 'kite_fishing')->exists() and
                                                    DB::table('fishing_techniques')->where('listing_id', $listing->id)->where('name', 'kite_fishing')->count() >=
                                                        1) checked @endif type="checkbox"
                                                class="sc-jTjUTQ hUwBEC" name="fishing_technique[]" value="kite_fishing">
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
                                            <input @if (DB::table('fishing_techniques')->where('name', 'bow_fishing')->exists() and
                                                    DB::table('fishing_techniques')->where('listing_id', $listing->id)->where('name', 'bow_fishing')->count() >=
                                                        1) checked @endif type="checkbox"
                                                class="sc-jTjUTQ hUwBEC" name="fishing_technique[]" value="bow_fishing">
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
                                            <input @if (DB::table('fishing_techniques')->where('name', 'handline')->exists() and
                                                    DB::table('fishing_techniques')->where('listing_id', $listing->id)->where('name', 'handline')->count() >=
                                                        1) checked @endif type="checkbox"
                                                class="sc-jTjUTQ hUwBEC" name="fishing_technique[]" value="handline">
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
                                            <input @if (DB::table('fishing_techniques')->where('name', 'spearfishing')->exists() and
                                                    DB::table('fishing_techniques')->where('listing_id', $listing->id)->where('name', 'spearfishing')->count() >=
                                                        1) checked @endif type="checkbox"
                                                class="sc-jTjUTQ hUwBEC" name="fishing_technique[]" value="spearfishing">
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
                                            <input @if (DB::table('fishing_techniques')->where('name', 'ice_fishing')->exists() and
                                                    DB::table('fishing_techniques')->where('listing_id', $listing->id)->where('name', 'ice_fishing')->count() >=
                                                        1) checked @endif type="checkbox"
                                                class="sc-jTjUTQ hUwBEC" name="fishing_technique[]" value="ice_fishing">
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
                                            <input @if (DB::table('fishing_techniques')->where('name', 'flounder_gigging')->exists() and
                                                    DB::table('fishing_techniques')->where('listing_id', $listing->id)->where('name', 'flounder_gigging')->count() >=
                                                        1) checked @endif type="checkbox"
                                                class="sc-jTjUTQ hUwBEC" name="fishing_technique[]"
                                                value="flounder_gigging">
                                        </span>
                                    </span>
                                    <span style="margin-left: 7px; font-weight: normal;">Flounder Gigging</span>
                                </label>
                            </div>
                            <script>
                                function checkFishingTechniques() {
                                    var checkboxes = document.querySelectorAll('input[name="fishing_technique[]"]');
                                    var checkedOne = Array.prototype.slice.call(checkboxes).some(x => x.checked);
                                    if (!checkedOne) {
                                        const errorMessageDiv = document.getElementById("error-message3");
                                        errorMessageDiv.style.display = "block"; 
                                        errorMessageDiv.innerHTML =
                                            "<i class='fas fa-exclamation-triangle' style='font-size:24px;color:#8B0000;'></i> You must choose at least one fishing technique.";

                                        document.getElementById('error-message3')
                                    .scrollIntoView(); 
                                        return false; 
                                    }
                                }
                            </script>
                        </section>




                    </div>
                    <hr>
                    <div class="">
                        <section data-testid="fishing-policy-container">
                            <div class="component-margin-medium label-header-desktop"><strong>Policies</strong></div>
                            <p class="text-muted">Which of these policies do you enforce?</p>

                            <div style="display: flex; align-items: center;">
                                <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                    <span class="sc-fXqpFg eiuMvt">
                                        <span class="sc-cZFQFd kmNniD">
                                            <span class="sc-dsHJmm jxZtQh"></span>
                                            <input @if (DB::table('policies')->where('name', 'children_allowed')->exists() and
                                                    DB::table('policies')->where('listing_id', $listing->id)->where('name', 'children_allowed')->count() >=
                                                        1) checked @endif type="checkbox"
                                                class="sc-jTjUTQ hUwBEC" value="children_allowed" name="policies[]">
                                        </span>
                                    </span>
                                    <span style="margin-left: 7px; font-weight: normal;">Children Allowed</span>
                                </label>
                            </div>

                            <div style="display: flex; align-items: center;">
                                <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                    <span class="sc-fXqpFg eiuMvt">
                                        <span class="sc-cZFQFd kmNniD">
                                            <span class="sc-dsHJmm jxZtQh"></span>
                                            <input @if (DB::table('policies')->where('name', 'no_smoking')->exists() and
                                                    DB::table('policies')->where('listing_id', $listing->id)->where('name', 'no_smoking')->count() >=
                                                        1) checked @endif type="checkbox"
                                                class="sc-jTjUTQ hUwBEC" value="no_smoking" name="policies[]">
                                        </span>
                                    </span>
                                    <span style="margin-left: 7px; font-weight: normal;">No Smoking</span>
                                </label>
                            </div>

                            <div style="display: flex; align-items: center;">
                                <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                    <span class="sc-fXqpFg eiuMvt">
                                        <span class="sc-cZFQFd kmNniD">
                                            <span class="sc-dsHJmm jxZtQh"></span>
                                            <input @if (DB::table('policies')->where('name', 'no_alcohol')->exists() and
                                                    DB::table('policies')->where('listing_id', $listing->id)->where('name', 'no_alcohol')->count() >=
                                                        1) checked @endif type="checkbox"
                                                class="sc-jTjUTQ hUwBEC" value="no_alcohol" name="policies[]">
                                        </span>
                                    </span>
                                    <span style="margin-left: 7px; font-weight: normal;">No Alcohol</span>
                                </label>
                            </div>

                            <div style="display: flex; align-items: center;">
                                <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                    <span class="sc-fXqpFg eiuMvt">
                                        <span class="sc-cZFQFd kmNniD">
                                            <span class="sc-dsHJmm jxZtQh"></span>
                                            <input @if (DB::table('policies')->where('name', 'clients_keep_catch')->exists() and
                                                    DB::table('policies')->where('listing_id', $listing->id)->where('name', 'clients_keep_catch')->count() >=
                                                        1) checked @endif type="checkbox"
                                                class="sc-jTjUTQ hUwBEC" value="clients_keep_catch" name="policies[]">
                                        </span>
                                    </span>
                                    <span style="margin-left: 7px; font-weight: normal;">Clients Keep Catch</span>
                                </label>
                            </div>

                        </section>




                    </div>
                    <hr>
                    <div class="">
                        <section data-testid="fishing-included-in-price-container">
                            <div class="component-margin-medium label-header-desktop"><strong>Included in Price</strong>
                            </div>
                            <p class="text-muted">What's included on your trips?</p>

                            <div style="display: flex; align-items: center;">
                                <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                    <span class="sc-cZFQFd kmNniD">
                                        <span class="sc-dsHJmm jxZtQh"></span>
                                        <input @if (DB::table('included_in_prices')->where('name', 'fly_fishing_equipment')->exists() and
                                                DB::table('included_in_prices')->where('listing_id', $listing->id)->where('name', 'fly_fishing_equipment')->count() >=
                                                    1) checked @endif type="checkbox"
                                            class="sc-jTjUTQ hUwBEC" value="fly_fishing_equipment"
                                            name="included_in_price[]">
                                    </span>
                                    </span>
                                    <span style="margin-left: 7px; font-weight: normal;">Fly Fishing Equipment</span>
                                </label>
                            </div>


                            <div style="display: flex; align-items: center;">
                                <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                    <span class="sc-cZFQFd kmNniD">
                                        <span class="sc-dsHJmm jxZtQh"></span>
                                        <input @if (DB::table('included_in_prices')->where('name', 'rods_reels_terminal_tackle')->exists() and
                                                DB::table('included_in_prices')->where('listing_id', $listing->id)->where('name', 'rods_reels_terminal_tackle')->count() >=
                                                    1) checked @endif type="checkbox"
                                            class="sc-jTjUTQ hUwBEC" value="rods_reels_terminal_tackle"
                                            name="included_in_price[]">
                                    </span>
                                    </span>
                                    <span style="margin-left: 7px; font-weight: normal;">Rods, Reels &amp; Terminal
                                        Tackle</span>
                                </label>
                            </div>


                            <div style="display: flex; align-items: center;">
                                <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                    <span class="sc-cZFQFd kmNniD">
                                        <span class="sc-dsHJmm jxZtQh"></span>
                                        <input @if (DB::table('included_in_prices')->where('name', 'live_bait')->exists() and
                                                DB::table('included_in_prices')->where('listing_id', $listing->id)->where('name', 'live_bait')->count() >=
                                                    1) checked @endif type="checkbox"
                                            class="sc-jTjUTQ hUwBEC" value="live_bait" name="included_in_price[]">
                                    </span>
                                    </span>
                                    <span style="margin-left: 7px; font-weight: normal;">Live Bait</span>
                                </label>
                            </div>

                            <div style="display: flex; align-items: center;">
                                <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                    <span class="sc-cZFQFd kmNniD">
                                        <span class="sc-dsHJmm jxZtQh"></span>
                                        <input @if (DB::table('included_in_prices')->where('name', 'lures')->exists() and
                                                DB::table('included_in_prices')->where('listing_id', $listing->id)->where('name', 'lures')->count() >=
                                                    1) checked @endif type="checkbox"
                                            class="sc-jTjUTQ hUwBEC" value="lures" name="included_in_price[]">
                                    </span>
                                    </span>
                                    <span style="margin-left: 7px; font-weight: normal;">Lures</span>
                                </label>
                            </div>


                            <div style="display: flex; align-items: center;">
                                <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                    <span class="sc-cZFQFd kmNniD">
                                        <span class="sc-dsHJmm jxZtQh"></span>
                                        <input @if (DB::table('included_in_prices')->where('name', 'catch_cleaning_filleting')->exists() and
                                                DB::table('included_in_prices')->where('listing_id', $listing->id)->where('name', 'catch_cleaning_filleting')->count() >=
                                                    1) checked @endif type="checkbox"
                                            class="sc-jTjUTQ hUwBEC" value="catch_cleaning_filleting"
                                            name="included_in_price[]">
                                    </span>
                                    </span>
                                    <span style="margin-left: 7px; font-weight: normal;">Catch Cleaning &amp;
                                        Filleting</span>
                                </label>
                            </div>


                            <div style="display: flex; align-items: center;">
                                <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                    <span class="sc-cZFQFd kmNniD">
                                        <span class="sc-dsHJmm jxZtQh"></span>
                                        <input @if (DB::table('included_in_prices')->where('name', 'snacks')->exists() and
                                                DB::table('included_in_prices')->where('listing_id', $listing->id)->where('name', 'snacks')->count() >=
                                                    1) checked @endif type="checkbox"
                                            class="sc-jTjUTQ hUwBEC" value="snacks" name="included_in_price[]">
                                    </span>
                                    </span>
                                    <span style="margin-left: 7px; font-weight: normal;">Snacks</span>
                                </label>
                            </div>


                            <div style="display: flex; align-items: center;">
                                <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                    <span class="sc-cZFQFd kmNniD">
                                        <span class="sc-dsHJmm jxZtQh"></span>
                                        <input @if (DB::table('included_in_prices')->where('name', 'drinks')->exists() and
                                                DB::table('included_in_prices')->where('listing_id', $listing->id)->where('name', 'drinks')->count() >=
                                                    1) checked @endif type="checkbox"
                                            class="sc-jTjUTQ hUwBEC" value="drinks" name="included_in_price[]">
                                    </span>
                                    </span>
                                    <span style="margin-left: 7px; font-weight: normal;">Drinks</span>
                                </label>
                            </div>


                            <div style="display: flex; align-items: center;">
                                <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                    <span class="sc-cZFQFd kmNniD">
                                        <span class="sc-dsHJmm jxZtQh"></span>
                                        <input @if (DB::table('included_in_prices')->where('name', 'lunch')->exists() and
                                                DB::table('included_in_prices')->where('listing_id', $listing->id)->where('name', 'lunch')->count() >=
                                                    1) checked @endif type="checkbox"
                                            class="sc-jTjUTQ hUwBEC" value="lunch" name="included_in_price[]">
                                    </span>
                                    </span>
                                    <span style="margin-left: 7px; font-weight: normal;">Lunch</span>
                                </label>
                            </div>

                            <div style="display: flex; align-items: center;">
                                <label class="sc-GhhNo cbCCGQ" style="display: flex; align-items: center;">
                                    <span class="sc-cZFQFd kmNniD">
                                        <span class="sc-dsHJmm jxZtQh"></span>
                                        <input @if (DB::table('included_in_prices')->where('name', 'fishing_license')->exists() and
                                                DB::table('included_in_prices')->where('listing_id', $listing->id)->where('name', 'fishing_license')->count() >=
                                                    1) checked @endif type="checkbox"
                                            class="sc-jTjUTQ hUwBEC" value="fishing_license" name="included_in_price[]">
                                    </span>
                                    </span>
                                    <span style="margin-left: 7px; font-weight: normal;">Fishing License</span>
                                </label>
                            </div>
                        </section>
                    </div>
            </section>



            <div class="listing__sc-qdm6vt-3 jeHyJy text-muted footer-container-desktop">
                <hr>
                <button id="submitBtn" type="submit" class="save_button"
                    onclick="return checkFishingLocations() && checkFishingTechniques()">Save</button>

                </form>
                <div data-testid="next-step-btn"
                    class="pull-right text-center next-desktop selectable next-button-available"
                    onclick="window.location.href = 'meetingPoint'">Next</div>
            </div>
        </div>
    </div>
@endsection
