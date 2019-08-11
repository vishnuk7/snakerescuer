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

                    <div class="row  ">
                        <div class="col-md-12 table-responsive">
                            <table class="table table-striped table-hover" id="pagination">
                                <thead class="thead-dark">
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Species</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($snakes as $snake)
                                        <tr>
                                            <th scope="row">{{ $snake->id }}</th>
                                            <td>{{ $snake->species }}</td>
                                            <td>{{ $snake->date }}</td>
                                            <td>{{ $snake->time }}</td>
                                        </tr>
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

        {{-- logout and scroll to top modal --}}
        @include('admin/partials/logoutModal')

        {{-- all cdn --}}
        @include('partials/jsfile')

        <!-- Custom scripts for this pages-->
        <script src="{{ asset('js/adminLayout.min.js') }}"></script>

        <script src="{{ asset('js/viewSnakes.js') }}" ></script>

        {{-- datatables cdn --}}
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" ></script>
</body>

</html>
