<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
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
                        <img src="{{ asset('vector/snake.svg') }}" class="logo-height" alt="">
                        <p style="font-weight:700;">Login</p>
                        <p class="login-p">Enter your credentials below</p>
                    </div>


                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        {{-- Name --}}
                            <div class="form-group">
                                <label class="form-control-label" for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter the name" value="{{ old('name') }}" required autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                        {{-- Email --}}
                            <div class="form-group">
                                <label class="form-control-label" for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter the email id" value="{{ old('email') }}" required>



                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                         {{-- Aadar num --}}
                            <div class="form-group">
                                <label class="form-control-label" for="aadar">Aadar</label>
                                <input type="text" name="aadar" id="aadar" class="form-control " placeholder="Enter the aadar number" value="{{ old('aadar') }}" required pattern="^[0-9]{10}$">

                                @error('aadar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                        {{-- Blood Group --}}
                            <div class="form-group">
                                <label  for="blood">Select the blood group</label>
                                <select class="form-control" name="blood"  id="blood">
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
                                <input type="date" name="dob" id="dob" class="form-control " placeholder="Enter the date of birth" value="{{ old('dob') }}" required pattern="^[0-9]{10}$">


                                @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{-- Phone number one --}}
                            <div class="form-group">
                                <label class="form-control-label" for="phone1">Enter the first phone number</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                    <div class="input-group-text border-right-remove">+91</div>
                                    </div>
                                    <input type="text" id="phone1" class="form-control border-left-remove " placeholder="Enter the first phone number" value="{{ old('phone1') }}" required pattern="^[0-9]{10}$">
                                </div>



                                @error('phone1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                </div>

                            {{-- constituency --}}
                            <div class="form-group">
                                <label class="form-control-label" for="constituency">Enter the constituency</label>
                                <input type="text" name="constituency" id="constituency" class="form-control " placeholder="Enter the constituency" value="{{ old('dob') }}" required pattern="^[0-9]{10}$">


                                @error('constituency')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror



                                @error('constituency')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>


                            <div class="form-group">
                                <label class="form-control-label" for="phone2">Enter the second phone number</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                    <div class="input-group-text border-right-remove">+91</div>
                                    </div>
                                    <input type="text" id="constituency" name="constituency" class="form-control border-left-remove " placeholder="Enter the first phone number" value="{{ old('constituency') }}" required pattern="^[0-9]{10}$">
                                </div>



                                @error('constituency')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                        <div class="form-group">
                            <label for="address">Enter the address</label>
                            <textarea class="form-control" name="address" id="address" rows="3" placeholder="Enter the address"></textarea>

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

        </main>

  @include('partials/bottom-navbar')
</body>
    @include('partials/jsfile')
</html>

