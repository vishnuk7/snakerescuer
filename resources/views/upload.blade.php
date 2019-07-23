<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/upload.css">
</head>

<body onload="getLocation()">
    @include('partials/top-navbar')

    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card login-card">


                        <div class="card-body">
                            <div class="py-3 d-flex justify-content-center flex-column align-items-center">
                                <img src="vector/snake.svg" class="logo-height" alt="">
                                <p style="font-weight:700;">Rescued a snake</p>
                                <p class="login-p"> Add it to our database using the form below</p>
                            </div>

                            <form id="file-upload-form" class="uploader">

                                <!-- image upload -->
                                <input id="file-upload" type="file" name="fileUpload" accept="image/*" />

                                <label for="file-upload" id="file-drag">

                                    <img id="file-image" src="#" alt="Preview" class="hidden">
                                    <div id="start">
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                        <div class="d-flex flex-column align-items-center">
                                            <ion-icon class="camera" name="camera"></ion-icon>Add Image
                                        </div>
                                        <div id="notimage" class="hidden">Please select an image</div>
                                        <span id="file-upload-btn" class="btn btn-primary">Click Here</span>
                                    </div>
                                    <div id="response" class="hidden">
                                        <div id="messages"></div>
                                        <progress class="progress" id="file-progress" value="0">
                                            <span>0</span>%
                                        </progress>
                                    </div>
                                </label>


                                <!-- description -->
                                <div class="form-group">
                                    <textarea class="form-control" id="des" rows="3"
                                        placeholder="Enter the description..."></textarea>
                                </div>

                                <!-- specie name -->
                                <div class="form-group">
                                    <select name="species" class="form-control" id="exampleFormControlSelect1">
                                        <option value="">Select the specie name ...</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                </div>

                                <!-- date and time -->
                                <div class="d-flex justify-content-between">

                                    <div class="form-group">
                                        <label class="sr-only" for="date">Date</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text border-right-remove">
                                                    <ion-icon name="calendar"></ion-icon>
                                                </div>
                                            </div>
                                            <input type="text" id="date" name="date"
                                                class="form-control border-left-remove" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="sr-only" for="time">Time</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text border-right-remove">
                                                    <ion-icon name="time"></ion-icon>
                                                </div>
                                            </div>
                                            <input type="text" id="time" name="time"
                                                class="form-control border-left-remove" disabled>
                                        </div>

                                    </div>
                                </div>

                                <!-- location -->
                                <div class="form-group">
                                    <label class="sr-only" for="location">Loaction</label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text border-right-remove">
                                                <ion-icon name="pin"></ion-icon>
                                            </div>
                                        </div>
                                        <input type="text" id="location" name="location"
                                            class="form-control border-left-remove" disabled>
                                    </div>
                                  </div>

                                    <!-- submit button -->
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-green">Submit</button>
                                    </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


    </main>

    @include('partials/bottom-navbar')
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
@include('partials/jsfile')
<script src="{{ asset('js/upload.js') }}"></script>
<script>
    var loc = document.getElementById("location");

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }

        var d = document.getElementById("date");
        d.value = moment().format('L');

        updateTime();

    }

    function updateTime() {
        var t = document.getElementById("time");
        t.value = moment().format('LTS');
    }
    setInterval(updateTime, 1000);

    function showPosition(position) {
        loc.value = position.coords.latitude + ", " + position.coords.longitude;
    }

</script>

</html>
