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

    {{-- data tables custom styling --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Nunito:400,700,800&display=swap');

        body {
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

                    <div class="row ">
                        <div class="col-md-12 table-responsive">
                            <table class="table table-striped table-hover" id="pagination">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Species</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $sno = 1;
                                    @endphp
                                    @foreach ($snakes as $snake)
                                    <tr class="open-modal"
                                        data-image='<?php echo asset("upload/snakes/$snake->image") ?>'
                                        data-species="{{$snake->species}}"
                                        data-date="{{$snake->date}}" data-time="{{$snake->time}}"
                                        data-location="{{$snake->location}}" data-description="{{$snake->description}}">

                                        <th scope="row"  data-toggle="modal" data-target="#snakeModal">{{ $sno }}</th>
                                        <td  data-toggle="modal" data-target="#snakeModal">{{ $snake->species }}</td>
                                        <td  data-toggle="modal" data-target="#snakeModal">{{ $snake->date }}</td>
                                        <td  data-toggle="modal" data-target="#snakeModal">{{ $snake->time }}</td>
                                        <td>
                                            <a class="text-danger" href="{{ route('snakes.delete' ,['id' => $snake->id,'image' => $snake->image, 'userId'=> $snake->user_id]) }}" style="font-size: 1.35rem;"><ion-icon name="trash"></ion-icon></a>
                                        </td>
                                    </tr>
                                    @php
                                    $sno++;
                                    @endphp
                                    @endforeach
                                </tbody>
                            </table>
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


        <!-- Snake details Modal-->
        <div class="modal fade" id="snakeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Snake details</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex justify-content-center">
                            <img id="snakeImage" src="" alt="Snake Image">
                        </div>
                        <table class="table table-borderless">
                            <tbody>

                                <tr>
                                    <th>Name</th>
                                    <td id="snakeSpecies"></td>
                                </tr>

                                <tr>
                                    <th>Date and Time</th>
                                    <td id="snakeDateTime"></td>
                                </tr>

                                <tr>
                                    <th>Location</th>
                                    <td id="snakeLocation"></td>
                                </tr>

                                <tr>
                                    <th>Description</th>
                                    <td id="snakeDescription" style="word-wrap: anywhere"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="button" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        {{-- logout and scroll to top modal --}}
        @include('admin/partials/logoutModal')

        {{-- all cdn --}}
        @include('partials/jsfile')

        <!-- Custom scripts for this pages-->
        <script src="{{ asset('js/adminLayout.min.js') }}"></script>

        <script src="{{ asset('js/viewSnakes.js') }}"></script>

        {{-- datatables cdn --}}
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

</body>

</html>
