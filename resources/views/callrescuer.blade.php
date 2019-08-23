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
    <link rel="stylesheet" href="css/callrescuer.css">
    @include('partials.manifest')
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
                                @csrf
                                <!-- Select Constituency -->
                                <div class="form-group">
                                    <label class="form-control-label" for="constituency">Enter the constituency</label>
                                    <select name="constituency" id="constituency" class="form-control" id="exampleFormControlSelect1">
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
                                </div>


                            </form>

                                <!-- submit button -->
                                <div class=" d-flex justify-content-center">
                                    <button id="click-btn" type="submit" class="btn btn-green">Search For Rescuer</button>
                                </div>


                          </div>

                        </div>


                        <div id="result-card" class=" pt-3 row">

                        </div>


                    </div>
                  </div>


    </main>

    @include('partials/bottom-navbar')
</body>

    @include('partials/jsfile')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $('#click-btn').click(function(e){
            e.preventDefault();
            $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
            var constituency = $('#constituency').val();
            console.log(constituency);
            $.ajax({
                type:'GET',
                url:"{{ url('/search-rescuers') }}",
                data:{'constituency': constituency },
                success:function(json){
                    var jsonData = JSON.parse(json);
                    $('#result-card').empty();
                    $.each(jsonData,function(){
                       var cardhtml = '<div class="col-md-12 mt-3">' +
                                      '<div class="card login-card pt-3">' +
                                      '<div class="py-3 pl-3 d-flex  flex-column align-items-left">' +
                                      '<div class="circle-img mb-3" style="background: #333;"></div>' +
                                      '<p class="rescuer-p"><span class="rescuer-label pr-2">Name :</span>'+this.name+'</p>' +
                                      '<p class="rescuer-p"><span class="rescuer-label pr-2">Constituency :</span>'+this.constituency+'</p>'+
                                      ' <p class="rescuer-p">'+
                                      '<span class="pr-2"><span class="rescuer-label pr-2">Blood Group :</span><ion-icon style="color:#e74c3c;" name="water"></ion-icon></span>'+this.blood_group+'</p>'+
                                      '<p class="rescuer-p phone-area">'+
                                      '<span class="rescuer-label pr-2 phone-label">Phone Numbers :</span>'+
                                      '<span class="pr-4 phone-btn">'+
                                      '<a  href="tel:'+this.phone1+'" class="phone-num"><ion-icon class="pr-2" style="font-weight: 700;" name="call"></ion-icon>'+this.phone1+'</a>'+
                                      '</span>'+
                                      '<span>'+
                                      '<a  href="tel:'+this.phone2+'" class="phone-num"><ion-icon class="pr-2" style="font-weight: 700;" name="call"></ion-icon>'+this.phone2+'</a>'+
                                      '</span>'+
                                      '</p>'+
                                      '</div>'+
                                      '</div>'+
                                      '</div>'
                                    $('#result-card').append(cardhtml);
                    });
                }
            });
        })
    </script>

</html>
