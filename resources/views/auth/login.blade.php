<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
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
                        <p class="py-3" style="font-weight:700;">Login</p>
                        <p class="login-p">Enter your credentials below</p>
                    </div>


                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="d-flex justify-content-center">
                            <div class="form-group">
                                <label class="sr-only" for="email">Email</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                    <div class="input-group-text border-right-remove"><ion-icon class="login-icon" name="mail"></ion-icon></div>
                                    </div>
                                    <input type="email" id="email" class="form-control border-left-remove @error('email') is-invalid @enderror" placeholder="ram@gmail.com" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                </div>
                        </div>
                          

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            

    
                        </div>

                        <div class="d-flex justify-content-center">
                            <div class="form-group">
                                <label class="sr-only" for="password">Password</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                    <div class="input-group-text border-right-remove"><ion-icon name="lock" class="login-icon"></ion-icon></div>
                                    </div>
                                    <input type="password" id="passsword" class="form-control border-left-remove @error('password') is-invalid @enderror" placeholder="*********" value="{{ old('password') }}" required autocomplete="current-password">
                                </div>
                        </div>
                          

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            

    
                        </div>


                        <div class="form-group d-flex justify-content-center">
                            <div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center ">
                            
                                <button type="submit" class="btn btn-green">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link green-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            
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

