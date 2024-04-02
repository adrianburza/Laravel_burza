<style>
    .jFmeMZ {
        color: rgb(60, 118, 61);
        padding-right: 10px;
        font-size: 24px;
        height: 20px;
    }

    .finish {
        color: white;
        font-weight: bold;
    }

    .finish:hover {
        text-decoration: none;
    }

    .gCVSLC {
        padding: 12px;
        background-color: rgb(204, 204, 204);
        color: rgb(119, 119, 119);
        text-align: center;
    }

    .gCVSLC.active {
        background-color: #2185C5;
    }
    </style>

<div class="listing__sc-1hb8fjx-0 jjbGOH">

    <a class="listing__sc-139m3p9-0 kYsThk" style="text-decoration: none;" href="{{ route('basicInfo', $listing->id) }}">
        <div data-testid="listing-details">


            <svg @if ($basicInfo == false) style="visibility: hidden;" @endif aria-hidden="true" focusable="false"
                data-prefix="fas" data-icon="check" class="svg-inline--fa fa-check fa-w-16 listing__sc-139m3p9-4 jFmeMZ"
                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor"
                    d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                </path>
            </svg>



            <div class="listing__sc-139m3p9-2 kiBmPC">Basic Info</div>
        </div>
    </a>



    <a class="listing__sc-139m3p9-0 kYsThk" style="text-decoration: none;"
        href="{{ route('photosVideos', $listing->id) }}">
        <div data-testid="listing-photos">

            <svg @if ($photosVideos == false) style="visibility: hidden;" @endif aria-hidden="true"
                focusable="false" data-prefix="fas" data-icon="check"
                class="svg-inline--fa fa-check fa-w-16 listing__sc-139m3p9-4 jFmeMZ" role="img"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor"
                    d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                </path>
            </svg>

            <div class="listing__sc-139m3p9-2 kiBmPC">Photos &amp; Videos</div>
        </div>
    </a>



    <a class="listing__sc-139m3p9-0 kYsThk" style="text-decoration: none;" href="{{ route('fishing', $listing->id) }}">
        <div data-testid="listing-fishing">

            <svg @if ($fishing == false) style="visibility: hidden;" @endif aria-hidden="true"
                focusable="false" data-prefix="fas" data-icon="check"
                class="svg-inline--fa fa-check fa-w-16 listing__sc-139m3p9-4 jFmeMZ" role="img"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor"
                    d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                </path>
            </svg>

            <div class="listing__sc-139m3p9-2 kiBmPC">Fishing</div>
        </div>
    </a>




    <a class="listing__sc-139m3p9-0 kYsThk" style="text-decoration: none;"
        href="{{ route('meetingPoint', $listing->id) }}">
        <div data-testid="listing-location">

            <svg @if ($meetingPoint == false) style="visibility: hidden;" @endif aria-hidden="true"
                focusable="false" data-prefix="fas" data-icon="check"
                class="svg-inline--fa fa-check fa-w-16 listing__sc-139m3p9-4 jFmeMZ" role="img"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor"
                    d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                </path>
            </svg>

            <div class="listing__sc-139m3p9-2 kiBmPC">Meeting point</div>
        </div>
    </a>




    <a class="listing__sc-139m3p9-0 kYsThk" style="text-decoration: none;"
        href="{{ route('description', $listing->id) }}">
        <div data-testid="listing-description">

            <svg @if ($description == false) style="visibility: hidden;" @endif aria-hidden="true"
                focusable="false" data-prefix="fas" data-icon="check"
                class="svg-inline--fa fa-check fa-w-16 listing__sc-139m3p9-4 jFmeMZ" role="img"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor"
                    d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                </path>
            </svg>

            <div class="listing__sc-139m3p9-2 kiBmPC">Description</div>
        </div>
    </a>




    <a class="listing__sc-139m3p9-0 kYsThk" style="text-decoration: none;"
        href="{{ route('availability', $listing->id) }}">
        <div data-testid="listing-availability">

            <svg @if ($availability == false) style="visibility: hidden;" @endif aria-hidden="true"
                focusable="false" data-prefix="fas" data-icon="check"
                class="svg-inline--fa fa-check fa-w-16 listing__sc-139m3p9-4 jFmeMZ" role="img"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor"
                    d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                </path>
            </svg>

            <div class="listing__sc-139m3p9-2 kiBmPC">Availability</div>
        </div>
    </a>




    <a class="listing__sc-139m3p9-0 kYsThk" style="text-decoration: none;" href="{{ route('trips', $listing->id) }}">
        <div data-testid="listing-trips">

            <svg @if ($trips == false) style="visibility: hidden;" @endif aria-hidden="true"
                focusable="false" data-prefix="fas" data-icon="check"
                class="svg-inline--fa fa-check fa-w-16 listing__sc-139m3p9-4 jFmeMZ" role="img"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor"
                    d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                </path>
            </svg>

            <div class="listing__sc-139m3p9-2 kiBmPC">Trips</div>
        </div>
    </a>




    
            <?php
    $menuItems = [$basicInfo, $photosVideos, $trips, $fishing, $meetingPoint, $description, $availability];
    $counter = 7;
    foreach ($menuItems as $item) {
        if ($item) {
            $counter--;
        }
    }
    ?>

<div class="listing__sc-1hb8fjx-1 cNBVRu">
    <div class="listing__sc-1hb8fjx-2 gCVSLC <?php if ($counter == 0) echo 'active'; ?>">
        <?php
        if ($counter == 0) {
            echo "<a class='finish' href=\"" . route('listings') . "\">Finish</a>";
        } else {
            echo $counter . ' steps to finish';
        }
        ?>
    </div>
</div>

</div>
