<nav class="bottom-navbar">
    <ul>
        <li>
            <a href="{{ route('welcome')  }}" class="bottom-nav-bar-link">
                <div class="bottom-nav-item">
                    <span class="pb-1">
                        <img src="{{ asset('vector/home.svg') }}" class="icon">
                        <!-- <svg viewBox="0 0 100 100" class="icon icon-right-arrow">
                                     <use xlink:href="/vector/svg-defs.svg#icon-right-arrow"></use>
                            </svg> -->
                    </span>
                    <span>Home</span>
                </div>
            </a>
        </li>

        @if(Auth::user())
        <li>
            <a href="{{ route('rescued') }}" class="bottom-nav-bar-link">
                <div class="bottom-nav-item">
                    <span class="pb-1">
                        <img src="vector/upload.svg" class="icon">
                        <!-- <svg viewBox="0 0 100 100" class="icon icon-right-arrow">
                                     <use xlink:href="/vector/svg-defs.svg#icon-right-arrow"></use>
                            </svg> -->
                    </span>
                    <span>Upload</span>
                </div>
            </a>
        </li>
        @endif

        <li>
            <a href="{{ route('call-rescuers') }}" class="bottom-nav-bar-link">
                <div class="bottom-nav-item">
                    <span class="pb-1">
                        <img src="vector/call.svg" class="icon">
                        <!-- <svg viewBox="0 0 100 100" class="icon icon-right-arrow">
                                     <use xlink:href="/vector/svg-defs.svg#icon-right-arrow"></use>
                            </svg> -->
                    </span>
                    <span>Call</span>
                </div>
            </a>
        </li>

        <li>
            <div id="myNav" class="overlay" style="width:0%;">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><ion-icon name="close"></ion-icon></a>
                <div class="overlay-content">
                    <a href="{{ route('blog') }}">Blog</a>
                    @if(Auth::user())
                        <a href="{{ route('individualRescue') }}">Your rescues</a>
                        <a href="#">Update password</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                    @endif
                        <a href="#">About</a>
                    @if(Auth::user())
                        <a href="{{ url('/logout') }}">Logout</a>
                    @endif

                </div>
            </div>
            <a href="#" class="bottom-nav-bar-link" onclick="openNav()">
                <div class="bottom-nav-item">
                    <span class="pb-1">
                        <img src="vector/more.svg" class="icon">
                        <!-- <svg viewBox="0 0 100 100" class="icon icon-right-arrow">
                                    <use xlink:href="/vector/svg-defs.svg#icon-right-arrow"></use>
                            </svg> -->
                    </span>
                    <span>More</span>
                </div>
            </a>
        </li>


    </ul>
</nav>
@include('sweetalert::alert')
