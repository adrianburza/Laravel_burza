<div class="modal fade" id="listingModal" tabindex="-1" aria-labelledby="listingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sv modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="sc-lbxAil lfkIGt">
                    <div class="sc-iNWwEs jBiRTY">New listing</div>
                </h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="sc-cxabCf kXNFld sc-ezWOiH enyWzm" elevation="3">
                <div class="sc-jdAMXn eDbSMH">
                    <div class="sc-gsnTZi bkQdno" style="display: flex; justify-content: space-between;">
                        <div class="sc-dkzDqf hEfnWF">
                            <div style="margin-top: 8px;">
                                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="globe-americas"
                                    class="svg-inline--fa fa-globe-americas captain-dashboards__sc-1sek7qk-0 kpnrbJ"
                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                                    <path fill="currentColor"
                                        d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm-32 50.8v11.3c0 11.9-12.5 19.6-23.2 14.3l-24-12c14.9-6.4 30.7-10.9 47.2-13.6zm32 369.8V456c-110.3 0-200-89.7-200-200 0-29.1 6.4-56.7 17.6-81.7 9.9 14.7 25.2 37.4 34.6 51.1 5.2 7.6 11.2 14.6 18.1 20.7l.8.7c9.5 8.6 20.2 16 31.6 21.8 14 7 34.4 18.2 48.8 26.1 10.2 5.6 16.5 16.3 16.5 28v32c0 8.5 3.4 16.6 9.4 22.6 15 15.1 24.3 38.7 22.6 51.3zm42.7 22.7l17.4-46.9c2-5.5 3.3-11.2 4.8-16.9 1.1-4 3.2-7.7 6.2-10.7l11.3-11.3c8.8-8.7 13.7-20.6 13.7-33 0-8.1-3.2-15.9-8.9-21.6l-13.7-13.7c-6-6-14.1-9.4-22.6-9.4H232c-9.4-4.7-21.5-32-32-32s-20.9-2.5-30.3-7.2l-11.1-5.5c-4-2-6.6-6.2-6.6-10.7 0-5.1 3.3-9.7 8.2-11.3l31.2-10.4c5.4-1.8 11.3-.6 15.5 3.1l9.3 8.1c1.5 1.3 3.3 2 5.2 2h5.6c6 0 9.8-6.3 7.2-11.6l-15.6-31.2c-1.6-3.1-.9-6.9 1.6-9.3l9.9-9.6c1.5-1.5 3.5-2.3 5.6-2.3h9c2.1 0 4.2-.8 5.7-2.3l8-8c3.1-3.1 3.1-8.2 0-11.3l-4.7-4.7c-3.1-3.1-3.1-8.2 0-11.3L264 112l4.7-4.7c6.2-6.2 6.2-16.4 0-22.6l-28.3-28.3c2.5-.1 5-.4 7.6-.4 78.2 0 145.8 45.2 178.7 110.7l-13 6.5c-3.7 1.9-6.9 4.7-9.2 8.1l-19.6 29.4c-5.4 8.1-5.4 18.6 0 26.6l18 27c3.3 5 8.4 8.5 14.1 10l29.2 7.3c-10.8 84-73.9 151.9-155.5 169.7z">
                                    </path>
                                </svg>
                            </div>
                        </div>

                        <div class="sc-dkzDqf bWIXxf">
                            <form action="{{ route("create_listing")}}" method="POST">
                                @csrf
                                <div style="margin-top: 24px; margin-bottom: 8px;">
                                    <strong>Listing location</strong>
                                </div>
                                <div class="captain-dashboards__sc-1sx7830-0 bXOHWa">
                                    <div class="sc-grVGCS sc-dkSuNL iGOIid JYNTt">
                                        <input type="text" name="city" role="combobox" aria-autocomplete="list" aria-expanded="false"
                                            placeholder="Miami, Cabo San Lucas, Cairns, etc."
                                            class="sc-iJkHyd captain-dashboards__sc-1sx7830-3 eQAPRL goeUnx city-input" value="">
                                        <span class="sc-kngDgl exsPiw"></span>
                                    </div>
                                    <div class="captain-dashboards__sc-1sx7830-1 gnNjKp city-list-container">
                                        <ul class="city-list"></ul>
                                    </div>
                                </div>
                        </div>
                        
                        <style>
                            .city-list-container {
                                max-height: 200px; 
                                overflow-y: auto; 
                                border: 1px solid #ccc; 
                                border-radius: 4px; 
                            }
                        
                            .city-list {
                                list-style-type: none;
                                padding-left: 0;
                                margin: 0;
                            }
                        
                            .city-list li {
                                padding: 8px;
                                cursor: pointer;
                            }
                        
                            .city-list li:hover {
                                background-color: #f0f0f0;
                            }
                        
                            .city-input {
                                width: 100%;
                                padding: 8px;
                                border: 1px solid #ccc;
                                border-radius: 4px;
                                box-sizing: border-box;
                            }
                        
                        </style>
                        
                        <script>
                            const cities = [
                                "Zagreb", "Split", "Rijeka", "Osijek", "Zadar", "Slavonski Brod", "Pula", "Sesvete", "Karlovac", "Varaždin",
                                "Šibenik", "Sisak", "Velika Gorica", "Vinkovci", "Vukovar", "Dubrovnik", "Bjelovar", "Koprivnica", "Požega",
                                "Samobor", "Zaprešić", "Solin", "Kaštela", "Virovitica", "Ivanec", "Petrinja", "Đakovo", "Crikvenica", "Knin",
                                "Slatina", "Trogir", "Poreč", "Daruvar", "Valpovo", "Opatija", "Belišće", "Nova Gradiška", "Krk", "Pazin",
                                "Labin", "Metković", "Omiš", "Đurđevac", "Pakrac", "Biograd na Moru", "Pleternica", "Hvar", "Makarska",
                                "Vrbovec", "Grubišno Polje", "Vis", "Kutina", "Ilok", "Prelog", "Buzet", "Otok", "Vodice", "Ogulin", "Vodnjan",
                                "Senj", "Rovinj", "Novigrad", "Novska", "Krapina", "Donja Stubica", "Otočac", "Ivanić-Grad", "Umag", "Gospić",
                                "Orahovica", "Popovača", "Novi Marof", "Sveta Nedelja", "Lepoglava", "Omišalj", "Županja", "Jastrebarsko",
                                "Našice", "Sveti Ivan Zelina", "Križevci", "Kastav", "Nin", "Slunj", "Ludbreg", "Cres", "Vrbovsko", "Ploče",
                                "Kutjevo", "Krapinske Toplice", "Beli Manastir", "Novi Vinodolski", "Obrovac", "Donji Miholjac", "Kraljevica",
                                "Buje"
                            ];
                        
                            const cityInput = document.querySelector('.city-input');
                            const cityList = document.querySelector('.city-list');
                        
                            cityInput.addEventListener('input', function() {
                                const searchTerm = this.value.trim().toLowerCase();
                                const filteredCities = cities.filter(city => city.toLowerCase().includes(searchTerm));
                        
                                renderCities(filteredCities);
                            });
                        
                            function renderCities(cities) {
                                cityList.innerHTML = '';
                                cities.forEach(city => {
                                    const li = document.createElement('li');
                                    li.textContent = city;
                                    li.addEventListener('click', function() {
                                        cityInput.value = city;
                                        cityList.innerHTML = '';
                                    });
                                    cityList.appendChild(li);
                                });
                            }
                        
                            document.addEventListener('click', function(e) {
                                if (!e.target.classList.contains('city-input')) {
                                    cityList.innerHTML = '';
                                }
                            });
                        
                        </script>                        
                    </div>
                </div>

                <div class="sc-ciZhAO cxtMOk">
                    <div class="sc-gsnTZi etvNyP">
                        <div class="sc-dkzDqf hZkVxy" style="padding-right: 0px;"><button type="button"
                                data-bs-dismiss="modal" class="sc-hKMtZM sc-jqUVSM dlQJAV caBWeH">Close</button></div>
                        <div class="sc-dkzDqf hZkVxy" style="padding-left: 0px;">
                            <button type="submit"
                                class="sc-hKMtZM sc-eCYdqJ dlQJAV eGPOQh">Create new
                                listing</button></div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
