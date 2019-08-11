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

    <style>
        @import url('https://fonts.googleapis.com/css?family=Nunito:400,700,800&display=swap');

        body{
            font-family: 'Nunito', sans-serif;
            font-size: 1rem;
        }
    </style>
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
                        <div class="col-md-12">
                            @foreach ($snakes as $snake)
                                {{$snake->id}}
                            @endforeach
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
