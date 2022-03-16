<style>
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: #2196F3;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }

</style>
<aside class="main-sidebar col-12 col-md-4 col-lg-3 px-0">
    <!-- <div class="main-navbar">
   <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
       <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
       <div class="d-table m-auto">
           <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="{{ asset('adminpanel/images/shards-dashboards-logo.svg') }}" alt="Shards Dashboard">
           <span class="d-none d-md-inline ml-1">Admin Dashboard</span>
       </div>
       </a>
       <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
       <i class="material-icons">&#xE5C4;</i>
       </a>
   </nav>
   </div> -->
    <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
        <div class="input-group input-group-seamless ml-3">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-search"></i>
                </div>
            </div>
            <input class="navbar-search form-control" type="text" placeholder="Search for something..."
                aria-label="Search">
        </div>
    </form>
    <div class="nav-wrapper">
        <div class="admin-panel-round-img text-center py-4">
            <img class="avatar shadow" src="{{ asset('storage/' . auth()->user()->avatar) }}" alt="">
        </div>
        <!-- <span class="d-none d-md-inline ml-1">Admin Dashboard</span> -->
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="material-icons" id="changeVisibility" style="color: #2196F3"> visibility</i>
                    <span>My Profile Visibility
                        <label class="switch">
                            <input type="checkbox" @if (auth()->user()->candidate->status == 1) checked @endif
                                value="{{ auth()->user()->candidate->status }}"
                                onchange="status({{ auth()->user()->candidate->status }})">
                            <span class="slider"></span>
                        </label>
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('candidate.dashboard') }}"
                    @if (Route::is('candidate.dashboard')) class="nav-link active " @else class="nav-link" @endif>
                    <i class="material-icons">dashboard</i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('candidates.details.view') }}"
                    @if (Route::is('candidates.details.view')) class="nav-link active " @else class="nav-link" @endif>
                    <i class="material-icons">person</i>
                    <span>My Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('candidates.education.view') }}"
                    @if (Route::is('candidates.education.view')) class="nav-link active " @else class="nav-link" @endif>
                    <i class="material-icons">person</i>
                    <span>My Educational Details</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('candidates.profession.view') }}"
                    @if (Route::is('candidates.profession.view')) class="nav-link active " @else class="nav-link" @endif>
                    <i class="material-icons">person</i>
                    <span>My Professional Details</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('candidates.cvList') }}"
                    @if (Route::is('candidates.cvList')) class="nav-link active " @else class="nav-link" @endif>
                    <i class="material-icons">edit</i>
                    <span>My CV</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('candidates.job.visibility') }}"
                    @if (Route::is('candidates.job.visibility')) class="nav-link active " @else class="nav-link" @endif>
                    <i class="material-icons">visibility</i>
                    <span>My visibility</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('candidates.job.index') }}"
                    @if (Route::is('candidates.job.index')) class="nav-link active" @else class="nav-link" @endif>
                    <i class="material-icons">apps</i>
                    <span>My application</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" @if (Route::is('candidates.job.index')) class="nav-link active " @else class="nav-link" @endif>
                    <i class="material-icons">search</i>
                    <span>Job Search</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" @if (Route::is('candidates.job.index')) class="nav-link active " @else class="nav-link" @endif>
                    <i class="material-icons">campaign</i>
                    <span>Promote Me</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" @if (Route::is('candidates.job.index')) class="nav-link active " @else class="nav-link" @endif>
                    <i class="material-icons">edit</i>
                    <span>Highlight Me</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" @if (Route::is('candidates.job.index')) class="nav-link active " @else class="nav-link" @endif>
                    <i class="material-icons">edit</i>
                    <span>Cv Services</span>
                </a>
            </li>

        </ul>
    </div>
</aside>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    function status(value) {
        var url = 0;
        if (value == 1) {
            url = "{{ route('change.status', 0) }}";
        } else {
            url = "{{ route('change.status', 1) }}";
        }
        $.ajax({
            type: 'GET',
            url: url,
            crossDomain: true,
            success: function(data) {
                console.log(data);
            }
        });
    }
</script>
<!-- End Main Sidebar -->
