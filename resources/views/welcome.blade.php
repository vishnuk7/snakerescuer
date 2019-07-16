<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/home.css">
    </head>
    <body>
       <header class="bg-image">
       <nav class="navbar navbar-expand-lg navbar-light nav-bg">
  <a class="navbar-brand" href="#"><img class="logo" src="vector/snake.svg" ></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <ion-icon name="menu" class="menu"></ion-icon>
  </button>

  <div class="collapse navbar-collapse nav-center" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item pr-3">
        <a class="nav-link nav-link-custom" href="#">Home</a>
      </li>
      <li class="nav-item pr-3">
        <a class="nav-link nav-link-custom" href="#">Upload</a>
      </li>
      <li class="nav-item pr-3">
        <a class="nav-link nav-link-custom" href="#">Blog</a>
      </li>
      <li class="nav-item pr-3">
        <a class="nav-link nav-link-custom" href="#">About</a>
      </li>
      <li>
      <a class="nav-link nav-link-login" href="#">Login</a>
      </li>
    </ul>
    
  </div>
</nav>
        <div class="intro-section pl-4">
            <div class="intro-data">
                <h4>Indian Snake Rescuers</h4>
                <p>For Snakes and People of Snakes </p>
                <p>We save and protect snakes from people
                also people from snakes</p>
                <p><a href="" class="call-us">Call Us</a></p>
            </div>
        </div>
       </header>
        <section class="section blog">
        <div class="container">
      <h3 class="section-heading"><span class="circle mr-2"></span>Blog</h3>    

            <div class="row">
                <div class="col-md-6 d-flex justify-content-center mb-4">
                    <div class="card card-blog" style="width: 90%;">
                        <img src="upload/1.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title card-title-blog">Opheodrys vernalis</h5>
                                <p class="card-text des-blog mb-4">found inside house</p>
                                <p class="date-time mb-3">
                                    <span>
                                    <svg viewBox="0 0 100 100" class="icon icon-calendar">
                                        <use xlink:href="/vector/svg-defs.svg#icon-calendar"></use>
                                    </svg>
                                    <span class="pl-2">10/07/2019</span>
                                    </span>
                                    <span>
                                    <svg viewBox="0 0 100 100" class="icon icon-clock">
                                        <use xlink:href="/vector/svg-defs.svg#icon-clock"></use>
                                    </svg>
                                    <span class="pl-2">9:00 AM</span>
                                    </span>
                                </p>

                                <p class="mb-4">
                                    <svg viewBox="0 0 100 100" class="icon icon-placeholder">
                                        <use xlink:href="/vector/svg-defs.svg#icon-placeholder"></use>
                                    </svg>
                                    <span class="pl-2">Manasgangotri 2.3019° N, 76.6490° E</span>
                                </p>

                                <p class="recuer-data">
                                    <span class="recuer-img mr-3"></span>
                                    Recuer Name
                                </p>
                            </div>
                        </div>
                </div>

                <div class="col-md-6 d-flex justify-content-center mb-4">
                    <div class="card card-blog" style="width: 90%;">
                        <img src="upload/1.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title card-title-blog">Opheodrys vernalis</h5>
                                <p class="card-text des-blog mb-4">found inside house</p>
                                <p class="date-time mb-3">
                                    <span>
                                    <svg viewBox="0 0 100 100" class="icon icon-calendar">
                                        <use xlink:href="/vector/svg-defs.svg#icon-calendar"></use>
                                    </svg>
                                    <span class="pl-2">10/07/2019</span>
                                    </span>
                                    <span>
                                    <svg viewBox="0 0 100 100" class="icon icon-clock">
                                        <use xlink:href="/vector/svg-defs.svg#icon-clock"></use>
                                    </svg>
                                    <span class="pl-2">9:00 AM</span>
                                    </span>
                                </p>

                                <p class="mb-4">
                                    <svg viewBox="0 0 100 100" class="icon icon-placeholder">
                                        <use xlink:href="/vector/svg-defs.svg#icon-placeholder"></use>
                                    </svg>
                                    <span class="pl-2">Manasgangotri 2.3019° N, 76.6490° E</span>
                                </p>

                                <p class="recuer-data">
                                    <span class="recuer-img mr-3"></span>
                                    Recuer Name
                                </p>

                                
                            </div>
                        </div>
                </div>
            </div>

            <p class="pt-4">
                <a href="#" class="arrow-link">See more
                     <span class="pl-2">
                        <svg viewBox="0 0 100 100" class="icon icon-arrow">
                             <use xlink:href="/vector/svg-defs.svg#icon-arrow"></use>
                         </svg>
                      </span>
                                    
                 </a>
            </p>
        </div>
        </section>

        <!-- Do’s and Don’ts section -->

        <section class="section dos">
            <div class="container">
                <h3 class="section-heading"><span class="circle mr-2"></span>Do’s and Don’ts section</h3>
                <div class="dos-card mb-4">
                    <h5 class="pt-4 pl-3">
                        <svg viewBox="0 0 100 100" class="icon icon-right-arrow">
                             <use xlink:href="/vector/svg-defs.svg#icon-right-arrow"></use>
                         </svg>
                        <span>For People(incase of a snake bite)</span>
                    </h5>

                   
                    <div class="row">
                        <div class="col-md-6 border-right-c py-4">
                        <div class="d-flex justify-content-center">
                            <div class="poly-box mb-3">Do’s</div>
                        </div>

                        <p class="d-flex align-items-baseline">
                        <span class="circle mr-2" style="width:2%;"></span><span>
                                If you are wearing any jewellery or tight fitted clothes, try to remove them before your body swells up.</span>
                        </p>

                        <p class="d-flex align-items-baseline">
                        <span class="circle mr-2" style="width:2%;"></span><span>
                            Clean the wound with an antiseptic lotion. Do not use water to wash off the wound.
                        </span>
                        </p>

                        <p class="d-flex align-items-baseline">
                        <span class="circle mr-2"></span><span>
                        If you can identify the snake do so.
                        </span>
                        </p>
                    </div>
                    
                    <div class="col-md-6 py-4">
                            <div class="d-flex justify-content-center">
                                    <div class="poly-box mb-3">Don’ts</div>
                                </div>

                            <p class="d-flex align-items-baseline">
                            <span class="circle mr-2" style="width:2%;"></span><span>
                                Do not move too much as the venom is at the risk of spreading at the faster pace.
                            </span>
                            </p>

                            <p class="d-flex align-items-baseline">
                            <span class="circle mr-2" style="width:2%;"></span><span>
                                Don’t try to capture the snake. this is unnecessary and can lead to a more dangerous situation.
                            </span>
                            </p>

                            <p class="d-flex align-items-baseline">
                            <span class="circle mr-2" ></span><span>
                                Do not cut off circulation.
                            </span>
                            </p>
                    </div>

                    </div>

                    <div class="d-flex justify-content-center mt-4">
                        <a href="" class="read-more">
                            Read More
                            <span class="pl-2">
                                <svg viewBox="0 0 100 100" class="icon icon-right-arrow">
                                     <use xlink:href="/vector/svg-defs.svg#icon-right-arrow"></use>
                            </svg>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="dos-card">
                    <h5 class="pt-4 pl-3">
                        <svg viewBox="0 0 100 100" class="icon icon-right-arrow">
                             <use xlink:href="/vector/svg-defs.svg#icon-right-arrow"></use>
                         </svg>
                        <span>For Snake Rescuers(incase of a rescuing a snake)</span>
                    </h5>

                   
                    <div class="row">
                        <div class="col-md-6 py-4 border-right-c">
                        <div class="d-flex justify-content-center">
                            <div class="poly-box mb-3">Do’s</div>
                        </div>

                        <p class="d-flex align-items-baseline">
                        <span class="circle mr-2" ></span><span>
                            Instruct all the people present to clear the area. 
                        </span>
                        </p>

                        <p class="d-flex align-items-baseline">
                        <span class="circle mr-2" style="width:2%;"></span><span>
                            Necessary equipment like (hooks, tubes and pipes) are essential for
                            safe handling. 
                        </span>
                        </p>

                        <p class="d-flex align-items-baseline">
                        <span class="circle mr-2" style="width:2%;"></span><span>
                            If the snake is fit for release then do it without delay,  under the guidance of the Forest Department. 
                        </span>
                        </p>
                    </div>
                    
                    <div class="col-md-6 py-4">
                            <div class="d-flex justify-content-center">
                                <div class="poly-box mb-3">Don’ts</div>
                            </div>

                            <p class="d-flex align-items-baseline">
                            <span class="circle mr-2" style="width:1%;"></span><span>
                                Do not attend any rescue calls under the influence of drugs or alcohol. 
                            </span>
                            </p>

                            <p class="d-flex align-items-baseline">
                            <span class="circle mr-2" style="width:3%;"></span><span>
                                Do not unnecessarily handle rescued snakes. Handling puts snakes under more stress and can lead to diseases and in extreme cases death of the reptile. 
                            </span>
                            </p>
                    </div>

                    </div>

                    <div class="d-flex justify-content-center mt-4">
                        <a href="" class="read-more">
                            Read More
                            <span class="pl-2">
                                <svg viewBox="0 0 100 100" class="icon icon-right-arrow">
                                     <use xlink:href="/vector/svg-defs.svg#icon-right-arrow"></use>
                            </svg>
                            </span>
                        </a>
                    </div>
                </div>
            
        </section>
    </body>
    <script src="https://unpkg.com/ionicons@4.2.2/dist/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
