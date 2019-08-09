<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- admin layout styles --}}
    <link rel="stylesheet" href="{{ asset('css/adminLayout.min.css') }}">

    {{-- page content styles --}}
    <link rel="stylesheet" href="{{ asset('css/addrescuer.css') }}">

</head>

<body>

    <!-- Page Wrapper -->
    <div id="wrapper">

        {{-- side nav included --}}
        @include('admin/partials/sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                {{-- top nav included --}}
                @include('admin/partials/topbar')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card login-card">


                                <div class="card-body">
                                    <div class="py-3 d-flex justify-content-center flex-column align-items-center">
                                        <img src="{{ asset('vector/snake.svg') }}" class="logo-height" alt="">
                                        <p style="font-weight:700;">Add rescuer</p>
                                        <p class="login-p">Enter rescure's details below</p>
                                    </div>

                                    <form method="POST" action="/admin/rescuer" enctype="multipart/form-data">
                                        {{csrf_field()}}

                                        {{-- image --}}
                                        <div class="flex-column align-items-center d-flex">
                                            <div class="upload-image"
                                                onclick="document.getElementById('file-upload').click()">
                                                <span style="height:100%;"
                                                    class="d-flex justify-content-center flex-column align-items-center">
                                                    <ion-icon class=" upload-camera" name="camera"></ion-icon>
                                                    <p class="click-p">Click Here</p>
                                                </span>
                                            </div>
                                        </div>

                                        <input type="file" id="file-upload" name="file" style="display:none;">

                                        {{-- Name --}}
                                        <div class="form-group">
                                            <label class="form-control-label" for="name">Name</label>
                                            <input type="text" name="name" id="name" class="form-control"
                                                placeholder="Enter the name" value="{{ old('name') }}" required
                                                autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>


                                        {{-- Email --}}
                                        <div class="form-group">
                                            <label class="form-control-label" for="email">Email</label>
                                            <input type="email" name="email" id="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Enter the email id" value="{{ old('email') }}" required>



                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>


                                        {{-- Aadhar num --}}
                                        <div class="form-group">
                                            <label class="form-control-label" for="aadhar">Aadhar</label>
                                            <input type="text" name="aadhar" id="aadhar" class="form-control "
                                                placeholder="Enter the aadhar number" value="{{ old('aadhar') }}"
                                                required pattern="^[0-9]{10}$">

                                            @error('aadhar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>


                                        {{-- Blood Group --}}
                                        <div class="form-group">
                                            <label for="blood">Select the blood group</label>
                                            <select class="form-control" name="bloodgroup" id="blood">
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                            </select>
                                        </div>


                                        {{-- DOB --}}
                                        <div class="form-group">
                                            <label class="form-control-label" for="dob">Enter the date of birth</label>
                                            <input type="date" name="dob" id="dob" class="form-control "
                                                placeholder="Enter the date of birth" value="{{ old('dob') }}" required
                                                pattern="^[0-9]{10}$">


                                            @error('dob')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        {{-- Phone number one --}}
                                        <div class="form-group">
                                            <label class="form-control-label" for="phone1">Enter the first phone
                                                number</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text border-right-remove">+91</div>
                                                </div>
                                                <input type="text" id="phone1" name="phone1"
                                                    class="form-control border-left-remove "
                                                    placeholder="Enter the first phone number"
                                                    value="{{ old('phone1') }}" required pattern="^[0-9]{10}$">
                                            </div>



                                            @error('phone1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>

                                        <div class="form-group">
                                            <label class="form-control-label" for="phone2">Enter the second phone
                                                number</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text border-right-remove">+91</div>
                                                </div>
                                                <input type="text" id="phone2" name="phone2"
                                                    class="form-control border-left-remove "
                                                    placeholder="Enter the second phone number"
                                                    value="{{ old('phone2') }}" required pattern="^[0-9]{10}$">
                                            </div>



                                            @error('phone2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>

                                        {{-- constituency --}}
                                        <div class="form-group">
                                            <label class="form-control-label" for="constituency">Enter the
                                                constituency</label>
                                            <select name="constituency" id="constituency" class="form-control"
                                                id="exampleFormControlSelect1">
                                                <option value="">Select the Constituency</option>
                                                <option value="Madikeri">Madikeri</option>
                                                <option value="Chamaraja">Chamaraja</option>
                                                <option value="Krishnaraja">Krishnaraja</option>
                                                <option value="Narasimharaja">Narasimharaja</option>
                                                <option value="Hunsur">Hunsur</option>
                                                <option value="Chamundeshwari">Chamundeshwari</option>
                                                <option value="Virajpet">Virajpet</option>
                                                <option value="Periyapatna">Periyapatna</option>
                                            </select>

                                            @error('constituency')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>


                                        <div class="form-group">
                                            <label for="address">Enter the address</label>
                                            <textarea class="form-control" name="address" id="address" rows="3"
                                                placeholder="Enter the address"></textarea>

                                            @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>



                                        <div class="d-flex justify-content-center ">

                                            <button type="submit" class="btn btn-green">
                                                Submit
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- End of Main Content -->


                {{-- footer partial --}}
                @include('admin/partials/footer')


            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        {{-- logout and scroll to top modal --}}
        @include('admin/partials/logoutModal')

        {{-- all cdn --}}
        @include('partials/jsfile')

        <!-- Custom scripts for all pages-->
        <script src="{{ asset('js/adminLayout.min.js') }}"></script>

</body>

</html>
