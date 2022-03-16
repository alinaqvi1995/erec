 <!-- Main Navbar -->
 <style>
   p,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin: 0;
        padding: 0;
    }

    .table-header-panel .title-1 {
        font-size: 16px;
        line-height: 1;
        color: #999;
    }

    .table-header-panel .title-2 {
        font-size: 48px;
        color: #333;
    }

    .view-all-table {
        border-radius: 4px;
        background: #007ba7;
        color: #ffffff;
        padding: 10px 30px;
        margin-right: 10px;
        border: 1px solid transparent;
        cursor: pointer;
    }

    .table-header-panel  .first {
        flex: 0 0 auto;
        width: 75%;
    }

    .table-header-panel  .second {
        flex: 0 0 auto;
        width: 25%;
        margin-top: 26px;
    }

    .table-header-panel {
        border: 1px solid #dee2e6;
        padding: 24px;
        border-bottom: 0;
    }

    .table.border {
        border: 1px solid #dee2e6;
    }

    .color-primary {
        color: #3c7ba7;
    }

    .dashboard-card .card-title {
        font-weight: 500;
        margin-bottom: 0.75rem;
        font-size: 46px;
        color: #fff;
    }

    .dashboard-card.bg-one {
        background-color: #3c7ba7;
    }

    .dashboard-card.bg-two {
        background-color: #5fc2ba;
    }

    .dashboard-card.bg-three {
        background-color: #333;
    }

    .dashboard-card .card-text {
        font-size: 18px;
        line-height: 1.4;
        margin-bottom: 0;
        color: #fff;
    }

    .dashboard-card i {
        font-size: 40px;
        color: #fff;
    }

    .dashboard-card .d-flex .first {
        flex: 0 0 auto;
        width: 25%;
    }

    .dashboard-card .d-flex .second {
        flex: 0 0 auto;
        width: 75%;
    }
    .dashboard-card {
        padding: 30px 15px;
        border-radius: 8px;
    }
       .main-sidebar {
        position: relative;
        height: auto;
        box-shadow: none;
        border: 1px solid #dee2e6;
        margin-top: 99px;
    }
    .main-sidebar .nav .nav-item .nav-link.active, .main-sidebar .nav .nav-item .nav-link:hover, .main-sidebar .nav .nav-item.active, .main-sidebar .nav .nav-item:hover {
   box-shadow: inset 0.1875rem 0 0 #3c7ba7;
   background-color: #fbfbfb;
   color: #3c7ba7;
}

.admin-panel-round-img .avatar {
   width: 150px;
   height: 150px;
   border-radius: 50%;
}
.main-sidebar .nav-wrapper {
   overflow: visible;
}
.main-sidebar .nav-wrapper .admin-panel-round-img {
   margin-top: -99px;
}
.navbar-nav .dropdown-menu {
    position: absolute;
    min-width: 100%;
    z-index: 9999;
}
   @media (max-width: 991.98px) {
        .table-header-panel  .first {
            flex: 0 0 auto;
            width: 100%;
        }

        .table-header-panel  .second {
            flex: 0 0 auto;
            width: 100%;
            margin-top: 26px;
        }
    }
   @media (max-width: 767.98px) {
          .set-image-sm {
            width: 36px;
            height: 36px;
      }
      .main-content {
        margin-top: 7px;
      }
      .main-sidebar {
          position: fixed;
      }
      .main-sidebar .nav-wrapper .admin-panel-round-img {
          margin-top: 0;
      }
      .main-sidebar {
          margin-top: 56px;
      }
      .navbar {
          height: auto;
      }
      .main-sidebar .nav-wrapper {
          overflow: auto;
      }
      .navbar .navbar-nav .nav-link, .navbar .navbar-nav .nav-link img {
          height: auto;
      }
  }
  @media (max-width: 575.98px) {
      .table-header-panel .title-2 {
          font-size: 32px;
          color: #333;
      }
  }

 </style>
 <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
     <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <a class="navbar-brand" href="{{ route('index') }}"><img class="img-fluid" src="{{ asset('images/logo.svg') }}"alt=""></a>

                    <div class="collapse navbar-collapse my-auto col-md-7" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('index') }}">Home</a>
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
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('job') }}">Browse Jobs</a>
                            </li> --}}
                        </ul>

                    </div>
                </nav>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-6">
                        <form action="#" class="main-navbar__search d-none d-md-flex d-lg-flex"> <!-- removed Classes: w-100 -->
                            <div class="input-group input-group-seamless ml-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-search"></i>
                                    </div>
                                </div>
                                <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <ul class="navbar-nav border-left flex-row ">
                            {{--<li class="nav-item border-right dropdown notifications">
                                <a class="nav-link nav-link-icon text-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="nav-link-icon__wrapper">
                                    <i class="material-icons">&#xE7F4;</i>
                                    <span class="badge badge-pill badge-danger">2</span>
                                </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-small" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">
                                    <div class="notification__icon-wrapper">
                                    <div class="notification__icon">
                                        <i class="material-icons">&#xE6E1;</i>
                                    </div>
                                    </div>
                                    <div class="notification__content">
                                    <span class="notification__category">Analytics</span>
                                    <p>Your website’s active users count increased by
                                        <span class="text-success text-semibold">28%</span> in the last week. Great job!</p>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="notification__icon-wrapper">
                                    <div class="notification__icon">
                                        <i class="material-icons">&#xE8D1;</i>
                                    </div>
                                    </div>
                                    <div class="notification__content">
                                    <span class="notification__category">Sales</span>
                                    <p>Last week your store’s sales count decreased by
                                        <span class="text-danger text-semibold">5.52%</span>. It could have been worse!</p>
                                    </div>
                                </a>
                                <a class="dropdown-item notification__all text-center" href="#"> View all Notifications </a>
                                </div>
                            </li>--}}
                            <li class="nav-item dropdown" style="height: fit-content;">
                                <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <img class="user-avatar rounded-circle mr-2" src="{{ asset('storage/'.auth()->user()->avatar) }}" alt="User Avatar" height="50px" width="50px">
                                    <span class="d-none d-md-inline-block">{{Auth::user()->name}}</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-small">
                                    {{--<a class="dropdown-item" href="user-profile-lite.html">
                                        <i class="material-icons">&#xE7FD;</i> Profile</a>
                                    <a class="dropdown-item" href="components-blog-posts.html">
                                        <i class="material-icons">vertical_split</i> Blog Posts</a>
                                    <a class="dropdown-item" href="add-new-post.html">
                                        <i class="material-icons">note_add</i> Add New Post</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="#">
                                        <i class="material-icons text-danger">&#xE879;</i> Logout </a>--}}

                                    <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="material-icons text-danger">&#xE879;</i>Logout</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                </div>
                            </li>
                        </ul>
                        <nav class="nav">
                            <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                                <i class="material-icons">&#xE5D2;</i>
                            </a>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
     </div>
</nav>

          <!-- / .main-navbar -->
