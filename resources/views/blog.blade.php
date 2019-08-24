<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#01C25F">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/blog.css">
</head>
<body>
    @include('partials/top-navbar')
    <div class="container pt-4">
            <h3 class="section-heading"><span class="circle mr-2"></span>Blog</h3>

            <div class="row">
                @foreach($snakes as $snake)
                <div class="col-md-6 d-flex justify-content-center mb-5">
                        <div class="card card-blog" style="width: 90%;">
                            @php
                                $image_path = "upload/snakes/".$snake->image;
                            @endphp
                            <img src="{{ asset($image_path) }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title card-title-blog">{{ $snake->species }}</h5>
                                    <p class="card-text des-blog mb-4">{{ $snake->description }}</p>
                                    <p class="date-time mb-3">
                                        <span>
                                        <svg viewBox="0 0 100 100" class="icon icon-calendar">
                                            <use xlink:href="/vector/svg-defs.svg#icon-calendar"></use>
                                        </svg>
                                        <span class="pl-2">{{ $snake->date }}</span>
                                        </span>
                                        <span>
                                        <svg viewBox="0 0 100 100" class="icon icon-clock">
                                            <use xlink:href="/vector/svg-defs.svg#icon-clock"></use>
                                        </svg>
                                        <span class="pl-2">{{ $snake->time }}</span>
                                        </span>
                                    </p>

                                    <p class="mb-4">
                                        <svg viewBox="0 0 100 100" class="icon icon-placeholder">
                                            <use xlink:href="/vector/svg-defs.svg#icon-placeholder"></use>
                                        </svg>
                                        <span class="pl-2">{{ $snake->location }}</span>
                                    </p>

                                    <p class="recuer-data">
                                        @php
                                            // Profile image
                                            $profile_image = "upload/users/".$snake->user->image;
                                        @endphp
                                        <img class="recuer-img mr-3" src="{{ asset($profile_image) }}" alt="profile image">
                                        {{ $snake->user->name }}
                                    </p>
                                </div>
                            </div>
                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center">
                {{ $snakes->links() }}
            </div>
    </div>
</body>
