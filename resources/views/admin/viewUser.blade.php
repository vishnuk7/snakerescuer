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
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone No.</th>
                                        <th scope="col">No. of snake rescued</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $sno = 1;
                                    @endphp
                                    @foreach ($users as $user)
                                    <tr class="open-modal"
                                        data-image='{{ asset("upload/users/$user->image") }}'
                                        data-name="{{$user->name}}" data-aadhar="{{$user->aadhar}}"
                                        data-email="{{$user->email}}" data-bloodgroup="{{$user->bloodgroup}}"
                                        data-phone1="{{$user->phone1}}" data-phone2="{{$user->phone2}}" data-count="{{ $user->count }}"
                                        data-dob="{{$user->dob}}" data-constituency="{{$user->constituency}}" data-address="{{$user->address}}">

                                        <th scope="row" data-toggle="modal" data-target="#snakeModal">{{ $sno }}</th>
                                        <td data-toggle="modal" data-target="#snakeModal">{{ $user->name }}</td>
                                        <td data-toggle="modal" data-target="#snakeModal">{{ $user->email }}</td>
                                        <td data-toggle="modal" data-target="#snakeModal">{{ $user->phone1 }}</td>
                                        <td data-toggle="modal" data-target="#snakeModal">{{ $user->count }}</td>
                                        <td>
                                            <a data-toggle="modal" class="text-danger open-deleteModal" href="#deleteModal" data-delete_id={{ $user->id }} data-delete_image={{ $user->image }} style="font-size: 1.35rem;"><ion-icon name="trash"></ion-icon></a>
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
                        <h5 class="modal-title" id="exampleModalLabel">Rescuer details</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex justify-content-center" >
                            <img id="userImage" src="" alt="Profile Image" style="border-radius: 50%;">
                        </div>
                        <table class="table table-borderless">
                            <tbody>


                                {{-- <tr>
                                    <th>#</th>
                                    <td id="snakeId"></td>
                                </tr> --}}
                                <tr>
                                    <th>No. of snakes rescued</th>
                                    <td id="snakesCount"></td>
                                </tr>

                                <tr>
                                    <th>Name</th>
                                    <td id="userName"></td>
                                </tr>

                                <tr>
                                    <th>Email</th>
                                    <td id="userEmail"></td>
                                </tr>

                                <tr>
                                    <th>Aadhar</th>
                                    <td id="userAadhar"></td>
                                </tr>

                                <tr>
                                    <th>Blood Group</th>
                                    <td id="userBloodGroup"></td>
                                </tr>

                                <tr>
                                    <th>Date of Birth</th>
                                    <td id="userDob"></td>
                                </tr>

                                <tr>
                                    <th>First Phone No. </th>
                                    <td id="userPhone1"></td>
                                </tr>

                                <tr>
                                    <th>Second Phone No.</th>
                                    <td id="userPhone2"></td>
                                </tr>

                                <tr>
                                    <th>Constituency</th>
                                    <th id="userConstituency"></th>
                                </tr>

                                <tr>
                                    <th>Address</th>
                                    <th id="userAddress" style="word-wrap: anywhere"></th>
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

        {{-- Delete Model --}}
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <h5>Are you sure want to delete</h5>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a id="deleteLink" class="btn btn-danger" href="">Delete</a>
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

        <script src="{{ asset('js/viewUser.js') }}"></script>

        {{-- datatables cdn --}}
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</body>

</html>
