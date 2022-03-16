@extends('adminpanel.layout.app')

@section('page_title', 'E-Rec')

@section('head_style')
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection

    @section('content')

        {{-- <section> --}}
            <div class="container">
                <div class="card" style="width: 100%">
                    <div class="card-header">
                        @if($can->user->avatar != NULL)
                            <div id="imagePreview" style="background-image: url({{ asset('storage/'.$can->user->avatar) }});">
                            </div>
                        @else
                            <div id="imagePreview" style="background-image: url({{ asset('images/profile-img.svg') }});">
                            </div>
                        @endif
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if($can->user->avatar != NULL)
                            <div id="imagePreview" style="background-image: url({{ asset('storage/'.$can->user->avatar) }});">
                            </div>
                            {{-- {{ dd($can->user->avatar); }} --}}
                        @else
                            <div id="imagePreview" style="background-image: url({{ asset('images/profile-img.svg') }});">
                            </div>
                        @endif
                        <h6 class="card-subtitle  text-muted">Name</h6>
                        <p class="ml-4 card-text">{{ $can->first_name }} {{ $can->last_name }}</p>
                        <h6 class="card-subtitle  text-muted">Gender</h6>
                        <p class="ml-4 card-text">{{ $can->gender }}</p>
                        <h6 class="card-subtitle  text-muted">Phone</h6>
                        <p class="ml-4 card-text">{{ $can->country_code }} {{ $can->number }}</p>
                        <h6 class="card-subtitle  text-muted">Email</h6>
                        <p class="ml-4 card-text">{{ $can->email }}</p>
                        <h6 class="card-subtitle  text-muted">Nationality</h6>
                        <p class="ml-4 card-text">{{ $can->nationality }}</p>
                        <h6 class="card-subtitle  text-muted">Date of Birth</h6>
                        <p class="ml-4 card-text">{{ $can->dob }}</p>
                        <h6 class="card-subtitle  text-muted">Religion</h6>
                        <p class="ml-4 card-text">{{ $can->religion }}</p>
                        <h6 class="card-subtitle  text-muted">Marital Status</h6>
                        <p class="ml-4 card-text">{{ $can->marital_status }}</p>
                        <h6 class="card-subtitle  text-muted">Driving License</h6>
                        <p class="ml-4 card-text">@if($can->driving_license == 1) Yes @else No @endif</p>
                        <h6 class="card-subtitle  text-muted">Languages</h6>
                        <p class="ml-4 card-text">{{ $can->marital_status }}</p>
                        <h6 class="card-subtitle  text-muted">Visa Status</h6>
                        <p class="ml-4 card-text">{{ $can->visa_status }}</p>
                    </div>
                  </div>
           </div>
        {{-- </section> --}}

    @endsection

@section('bottom_script')
@endsection
