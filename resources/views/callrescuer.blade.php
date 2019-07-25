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
    <link rel="stylesheet" href="css/callrescuer.css">
</head>

<body>
    @include('partials/top-navbar')

    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card login-card">


                        <div class="card-body">
                            <div class="py-3 d-flex justify-content-center flex-column align-items-center">
                                <img src="vector/snake.svg" class="logo-height" alt="">
                                <p style="font-weight:700;">Find Snake Rescuers Near You</p>
                                <p class="login-p"> Please select your Respective Constituency</p>
                            </div>

                            <form id="search" class="uploader">




                                <!-- Select Constituency -->
                                <div class="form-group">
                                    <select name="constituency" class="form-control" id="exampleFormControlSelect1">
                                        <option value="">Select the Constituency</option>
                                        <option value="1">Madikeri</option>
                                        <option value="2">Chamaraja</option>
                                        <option value="3">Krishnaraja</option>
                                        <option value="4">Narasimharaja</option>
                                        <option value="5">Hunsur</option>
                                        <option value="6">Chamundeshwari</option>
                                        <option value="7">Virajpet</option>
                                        <option value="8">Periyapatna</option>

                                    </select>
                                </div>






                            </form>

                                <!-- submit button -->
                                <div class=" d-flex justify-content-center">
                                    <button type="submit" class="btn btn-green">Search For Rescuer</button>
                                </div>


                          </div>

                        </div>



                        <div class=" pt-3 column">
                            <div class="card login-card pt-3">
                                <div class="py-3 pl-3 d-flex  flex-column align-items-left">

                                    <div class="circle-img mb-3" style="background: #333;">
                                    </div>
                                    {{-- uncomment below line when you fetching the image and remove the above line 😂 --}}
                                    {{-- <img src="" class="circle-img"> --}}

                                    <p class="rescuer-p"><span class="rescuer-label pr-2">Name :</span>Mohammed Umar</p>
                                    <p class="rescuer-p"><span class="rescuer-label pr-2">Constituency :</span>Chamaraja</p>
                                    <p class="rescuer-p">
                                        <span class="pr-2"><span class="rescuer-label pr-2">Blood Group :</span><ion-icon style="color:#e74c3c;" name="water"></ion-icon></span>B+
                                    </p>
                                    <p class="rescuer-p">
                                        <span class="rescuer-label pr-2">Phone Numbers :</span>
                                        <span class="pr-4">
                                            <a  href="tel:5551234567" class="phone-num"><ion-icon class="pr-2" style="font-weight: 700;" name="call"></ion-icon> (555)123-4567</a>
                                        </span>
                                        <span>
                                                <a href="tel:5551234567" class= "phone-num"><ion-icon class="pr-2" style="font-weight: 700;Rescuer" name="call"></ion-icon> (555)123-4567</a>
                                        </span>
                                    </p>

                                </div>
                        </div>

                      </div>


                    </div>
                  </div>


    </main>

    @include('partials/bottom-navbar')
</body>

    @include('partials/jsfile')

</html>
