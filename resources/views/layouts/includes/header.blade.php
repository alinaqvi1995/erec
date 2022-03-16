<header class="custom-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{ route('index') }}"><img class="img-fluid" src="{{ asset('images/logo.svg') }}"alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse my-auto" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active">
                        <a href="{{ route('index') }}" @if(Route::is('index')) class="nav-link active" @else class="nav-link" @endif>Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('services') }}" @if(Route::is('services')) class="nav-link active" @else class="nav-link" @endif>Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('about') }}" @if(Route::is('about')) class="nav-link active" @else class="nav-link" @endif>About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('job.browse') }}" @if(Route::is('job.browse')) class="nav-link active" @else class="nav-link" @endif>Browse Jobs</a>
                    </li>
                    {{--<li class="nav-item">
                        <a href="{{ route('employer.list') }}" @if(Route::is('employer.list')) class="nav-link active" @else class="nav-link" @endif>Company</a>
                    </li>--}}
                </ul>
                @if(Auth::check())
                <a class="notification position-relative" href="#"> <img src="{{ asset('images/bell.svg') }}" alt="bell" class="img-fluid"> <span class="position-absolute"></span></a>
                <div class="ps-3 dropdown ">
                    <a class="dropdown-toggle fs-14" href="javascript:void(0)" id="user-setting" data-bs-toggle="dropdown" aria-expanded="false"><img src="{{ asset('images/profile-img.svg') }}" width="30" height="30" alt=""> {{ auth()->user()->name }}</a>
                    <ul class="dropdown-menu user-setting dropdown-menu-end" aria-labelledby="user-setting">
                        <li class="d-flex justify-content-between border-bottom align-items-center p-2 mx-3">
                            <a class="dropdown-item fs-14 p-0"
                            @if(auth()->user()->role == "admin") href="{{ route('admin.dashboard') }}"@endif
                            @if(auth()->user()->role == "user") href="{{ route('candidate.dashboard') }}"@endif
                            @if(auth()->user()->role == "company") href="{{ route('company.dashboard') }}"@endif
                            @if(auth()->user()->role == "rec") href="{{ route('dashboard') }}"@endif
                            >My Profile</a>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20.531" height="20.53" viewBox="0 0 20.531 20.53">
                                <g id="profile-user" transform="translate(0 -0.001)" opacity="0.72">
                                  <path id="Path_3227" data-name="Path 3227" d="M10.265,0A10.265,10.265,0,1,0,20.531,10.266,10.266,10.266,0,0,0,10.265,0Zm0,3.069a3.4,3.4,0,1,1-3.395,3.4A3.4,3.4,0,0,1,10.265,3.07Zm0,14.777a7.534,7.534,0,0,1-4.906-1.809,1.447,1.447,0,0,1-.508-1.1A3.424,3.424,0,0,1,8.29,11.515h3.951a3.419,3.419,0,0,1,3.436,3.423,1.443,1.443,0,0,1-.507,1.1A7.531,7.531,0,0,1,10.263,17.847Z" fill="#888"/>
                                </g>
                            </svg>
                        </li>
                        <li class="d-flex justify-content-between border-bottom align-items-center p-2 mx-3">
                            <a class="dropdown-item fs-14 p-0" href="#">Account Setting</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center p-2 mx-3">
                            <a class="dropdown-item fs-14 p-0" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                            <svg xmlns="http://www.w3.org/2000/svg" width="21.088" height="21.242" viewBox="0 0 21.088 21.242">
                                <g id="on-off-button" transform="translate(-0.089)" opacity="0.72">
                                  <path id="Path_3228" data-name="Path 3228" d="M8.987,9.875V1.646a1.646,1.646,0,0,1,3.292,0V9.875a1.646,1.646,0,0,1-3.292,0Zm8.17-7.462a1.234,1.234,0,0,0-1.529,1.939,8.075,8.075,0,1,1-9.992,0,1.235,1.235,0,1,0-1.53-1.939,10.544,10.544,0,1,0,13.051,0Z" transform="translate(0)" fill="#888"/>
                                </g>
                            </svg>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                @else
                <a class="login-btn default-btn btn" href="{{ route('register') }}"> REGISTER</a>
                <a class="login-btn default-btn btn" href="{{ route('login') }}"> LOGIN</a>
                @endif
            </div>
        </nav>
    </div>
</header>
