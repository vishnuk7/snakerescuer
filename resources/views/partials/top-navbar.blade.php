<nav class="navbar navbar-expand-lg navbar-light nav-bg">
  <a class="navbar-brand" href="{{ route('welcome') }}"><img class="logo" src="{{ asset('vector/snake.svg') }}" ></a>
  <button class="navbar-toggler nav-hide" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <ion-icon name="menu" class="menu"></ion-icon>
  </button>

  <div class="collapse navbar-collapse nav-center nav-hide" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item pr-3">
      <a class="nav-link nav-link-custom" href="{{ route('welcome') }}">Home</a>
      </li>
      @if (Auth::user())
        <li class="nav-item pr-3">
            <a class="nav-link nav-link-custom" href="{{ route('rescued') }}">Upload</a>
        </li>
      @endif
      <li class="nav-item pr-3">
        <a class="nav-link nav-link-custom" href="{{ route('blog') }}">Blog</a>
      </li>
      <li class="nav-item pr-3">
        <a class="nav-link nav-link-custom" href="#">About</a>
      </li>
      @if(Auth::guest())
      <li>
      <a class="nav-link nav-link-login" href="{{ route('login') }}">Login</a>
      </li>
      @else
      <li class="dropdown">
            <a href="#" class="nav-link nav-link-custom dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
             {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="{{ url('/logout') }}">Logout</a></li>
                <li><a href="{{ route('individualRescue') }}">Your rescues</a></li>
            </ul>
      </li>
      @endif
    </ul>

  </div>
</nav>
@include('sweetalert::alert')
