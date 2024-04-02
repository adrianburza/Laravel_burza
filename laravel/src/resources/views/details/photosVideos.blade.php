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


        /*Obsah stranky*/
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

        .component-margin-medium {
            margin: 0 0 10px 0;
        }

        .label-header-desktop {
            margin-bottom: 10px;
            font-size: 20px;
        }

        /*nahravanie obrazka*/

        .file-uploader .btn-file-upload-table-cell-container {
            display: table-cell;
            width: 100%;
            height: 165px;
            vertical-align: middle;
        }

        .file-uploader .btn-file-upload {
            min-height: 45px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            font-size: 16px;
            line-height: 30px;
            background-color: #2185c5;
        }

        .btn-primary {
            color: #fff;
            background-color: #2185C5;
            border-color: #1d76af;
        }

        .hMfVtS {
            padding-top: 5px;
            color: rgb(119, 119, 119);
        }


        .btn-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
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


        .jeHyJy {
            background-color: rgb(255, 255, 255);
            position: sticky !important;
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
            <section class="pages-container-desktop" data-testid="listing-photos-container">
                <div class="text-muted header-desktop">Photos &amp; Videos</div>
                <section>
                    <div class="component-margin-medium label-header-desktop"><strong>Add Photos &amp; Videos</strong></div>
                    <p class="text-muted"><span>
                            <div>
                                <div style="margin-bottom: 16px">
                                    <b>Upload at least 5 photos to publish your listing.</b> For an eye-catching
                                    gallery, we recommend:
                                </div>
                                <div style="margin-bottom: 16px">
                                    <ul>
                                        <li>A mix of boat photos, previous clients, and fish you catch</li>
                                        <li>Horizontal photos</li>
                                        <li>Avoiding screenshots of photos</li>
                                    </ul>
                                </div>
                                Video requirements:
                            </div>
                            <div style="margin-bottom: 16px">
                                <ul>
                                    <li>5 seconds minimum</li>
                                    <li>File size from 5MB to 1GB</li>
                                    <li>Portrait (720x1280px), landscape (1280x720px) or higher resolutions</li>
                                    <li>We can't accept slideshows</li>
                                    <li>Videos with contact information will be removed</li>
                                </ul>
                            </div>
                        </span></p>

                    <div class="error-message" id="error-message"></div><br>

                    <form action="{{ route('store_media', $listing->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="dropzone-margin">
                            <div>
                                <div style="margin-bottom: 16px; text-align: center;">
                                    <div role="button" tabindex="0">
                                        <label for="file-upload" class="file-upload-btn">
                                            <div class="btn btn-primary btn-file-upload">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="cloud-upload" class="svg-inline--fa fa-cloud-upload fa-w-20"
                                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                                    <path fill="currentColor"
                                                        d="M537.6 226.6c4.1-10.7 6.4-22.4 6.4-34.6 0-53-43-96-96-96-19.7 0-38.1 6-53.3 16.2C367 64.2 315.3 32 256 32c-88.4 0-160 71.6-160 160 0 2.7.1 5.4.2 8.1C40.2 219.8 0 273.2 0 336c0 79.5 64.5 144 144 144h368c70.7 0 128-57.3 128-128 0-61.9-44-113.6-102.4-125.4zm-139.9 63.7l-10.8 10.8c-9.6 9.6-25.2 9.3-34.5-.5L320 266.1V392c0 13.3-10.7 24-24 24h-16c-13.3 0-24-10.7-24-24V266.1l-32.4 34.5c-9.3 9.9-24.9 10.1-34.5.5l-10.8-10.8c-9.4-9.4-9.4-24.6 0-33.9l92.7-92.7c9.4-9.4 24.6-9.4 33.9 0l92.7 92.7c9.4 9.4 9.4 24.6.1 33.9z">
                                                    </path>
                                                </svg>&nbsp;Upload Photos &amp; Videos
                                            </div>
                                        </label>
                                        <input name="files[]" id="file-upload" accept="image/*, video/*" type="file"
                                            multiple style="display: none;">
                                    </div>
                                </div>

                                <div id="file-preview-container" style="display: flex; flex-wrap: wrap; ">

                                    @foreach ($media as $item)
                                        <div class="file-preview-item"><img src="{{ url('storage/' . $item->path) }}">
                                            <button class="remove-file-btn"><svg aria-hidden="true" focusable="false"
                                                    data-prefix="fas" data-icon="times"
                                                    class="svg-inline--fa fa-times fa-w-10" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                    <path fill="currentColor"
                                                        d="M207 256l103.5-103.5c4.7-4.7 4.7-12.3 0-17l-22.6-22.6c-4.7-4.7-12.3-4.7-17 0L168 216l-103.5-103.5c-4.7-4.7-12.3-4.7-17 0L24.7 137c-4.7 4.7-4.7 12.3 0 17L128 256l-103.5 103.5c-4.7 4.7-4.7 12.3 0 17l22.6 22.6c4.7 4.7 12.3 4.7 17 0L168 296l103.5 103.5c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17L207 256z">
                                                    </path>
                                                </svg></button>
                                        </div>
                                    @endforeach


                                </div>

                                <button type="submit" id="save-button" class="save_button">Save</button>
                                <form>
                                    <br><br>

                                    <style>
                                        #file-preview-container img,
                                        #file-preview-container video {
                                            max-width: 150px;
                                            max-height: 150px;
                                            margin: 10px;
                                        }

                                        .file-preview-item {
                                            position: relative;
                                        }

                                        .remove-file-btn {
                                            position: absolute;
                                            top: 0;
                                            right: 0;
                                            background-color: rgba(255, 255, 255, 0.7);
                                            border: none;
                                            border-radius: 50%;
                                            padding: 5px;
                                            cursor: pointer;
                                        }
                                    </style>

                                    <script>
                                        const fileInput = document.getElementById('file-upload');
                                        const filePreviewContainer = document.getElementById('file-preview-container');
                                        const errorMessage = document.getElementById('error-message');
                                        const uploadButton = document.getElementById('save-button'); 
                                        const maxFiles = 12;
                                        const minFiles = 5;

                                        fileInput.addEventListener('change', function() {
                                            const files = this.files;
                                            let numFilesUploaded = filePreviewContainer.children.length;

                                            if (numFilesUploaded + files.length > maxFiles) {
                                                document.getElementById("error-message").classList.add("visible");
                                                errorMessage.innerHTML = 'You have exceeded the limit of 12 pictures.';
                                                return;
                                            }

                                            errorMessage.classList.remove("visible");

                                            for (let i = 0; i < Math.min(files.length, maxFiles - numFilesUploaded); i++) {
                                                const file = files[i];
                                                const reader = new FileReader();

                                                reader.onload = function(e) {
                                                    const fileType = file.type.split('/')[0];
                                                    let mediaElement;
                                                    if (fileType === 'image') {
                                                        mediaElement = document.createElement('img');
                                                    } else if (fileType === 'video') {
                                                        mediaElement = document.createElement('video');
                                                        mediaElement.controls = true;
                                                    }
                                                    mediaElement.src = e.target.result;
                                                    const previewItem = document.createElement('div');
                                                    previewItem.classList.add('file-preview-item');
                                                    previewItem.appendChild(mediaElement);
                                                    const removeButton = document.createElement('button');
                                                    removeButton.classList.add('remove-file-btn');
                                                    removeButton.innerHTML =
                                                        '<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M207 256l103.5-103.5c4.7-4.7 4.7-12.3 0-17l-22.6-22.6c-4.7-4.7-12.3-4.7-17 0L168 216l-103.5-103.5c-4.7-4.7-12.3-4.7-17 0L24.7 137c-4.7 4.7-4.7 12.3 0 17L128 256l-103.5 103.5c-4.7 4.7-4.7 12.3 0 17l22.6 22.6c4.7 4.7 12.3 4.7 17 0L168 296l103.5 103.5c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17L207 256z"></path></svg>';
                                                    removeButton.addEventListener('click', function() {
                                                        previewItem.remove();
                                                    });
                                                    previewItem.appendChild(removeButton);
                                                    filePreviewContainer.appendChild(previewItem);
                                                };

                                                reader.readAsDataURL(file);
                                            }

                                            filePreviewContainer.style.display = 'flex';
                                        });

                                        uploadButton.addEventListener('click', function(event) {
                                            const numFilesUploaded = filePreviewContainer.children.length;
                                            if (numFilesUploaded > maxFiles || numFilesUploaded < minFiles) {
                                                document.getElementById("error-message").classList.add("visible");
                                                if (numFilesUploaded > maxFiles) {
                                                    errorMessage.innerHTML = 'You have exceeded the limit of 12 pictures.';
                                                } else {
                                                    errorMessage.innerHTML = `You need to upload at least ${minFiles} images.`;
                                                }
                                                event.preventDefault(); 
                                            }
                                        });
                                    </script>



                            </div>
                        </div>
                        <div>
                            <ul class="photo-list-container" data-testid="photo-list-container"></ul>
                            <div>
                                <ul class="photo-list-container" data-testid="video-list-container"></ul>
                            </div>
                        </div>
                </section>
            </section>
            <div class="listing__sc-qdm6vt-3 jeHyJy text-muted footer-container-desktop">
                <hr>
                <div data-testid="next-step-btn"
                    class="pull-right text-center next-desktop selectable next-button-available"
                    onclick="window.location.href = 'fishing'">Next</div>
            </div>
        </div>
    </div>
@endsection
