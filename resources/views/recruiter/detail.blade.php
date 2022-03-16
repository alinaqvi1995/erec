@extends('layouts.app')

@section('content')

    <main>
        <section>
            <div class="container">
                <div class="col">
                    @include('layouts.includes.messages')
                <div class="row justify-content-center align-items-center py-lg-5 py-3">
                        <h1 class="mb-0 fs-48 text-center fw-bold text-uppercase mt-5 pt-5">RECRUITER DETAILS
                        </h1>
                            @csrf
                            <!-- progressbar -->
                            {{-- <ul id="progressbar">
                                <li class="active"></li>
                                <li></li>
                                <li></li>
                            </ul> --}}
                            <!-- fieldsets logo -->
                            {{-- @foreach() --}}
                        <form id="msform" method="POST" action="{{ route('recruiter.store') }}" name="change_logo" enctype="multipart/form-data">
                            @csrf
                            <fieldset class="mb-5">
                                {{-- <input type="hidden" class="form-control fs-14 h-50px" name="comp_id" value="$comp->id"> --}}
                                <div class="row align-items-center row-cols-lg-2">
                                    <div class="col-lg-2">
                                        <div class="avatar-upload">
                                                <div class="avatar-edit">
                                                    <input type='file' id="imageUpload" onchange="form_submit()" name="avatar" accept=".png, .jpg, .jpeg" />
                                                    <label for="imageUpload"></label>
                                                </div>
                                                <div class="avatar-preview">
                                                    @if($avatar != NULL)
                                                    <div id="imagePreview" style="background-image: url({{ asset('storage/'.$avatar) }});">
                                                    </div>
                                                    @else
                                                    <div id="imagePreview" style="background-image: url({{ asset('images/profile-img.svg') }});">
                                                    </div>
                                                    @endif
                                                    {{-- <img src="{{ storage_path().'/'.$avatar }}">--}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h2 class="fs-4 text-theme-primary text-uppercase fw-bold">Upload Avatar</h2>
                                            <small class="fs-14">Supported file format png, jpg, jpeg, gif | upto 3 MB</small>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                        <!-- fieldsets -->
                        <form id="msform" method="POST" action="{{ route('recruiter.store') }}">
                            @csrf
                            <fieldset>
                                {{-- <input type="hidden" class="form-control fs-14 h-50px" name="comp_id" value="$comp->id"> --}}
                                <div class="row row-cols-1">
                                    <div class="col">
                                        <h2 class="fs-4 text-theme-primary text-uppercase fw-bold pb-3">Recruiter Details</h2>
                                    </div>
                                    <div class="col">
                                        <label for="name" class="form-label fs-14 text-theme-primary fw-bold">Name</label>
                                        <input type="text" class="form-control fs-14 h-50px" name="name" value="{{ $name }}" required>
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label fs-14 text-theme-primary fw-bold">Phone Number </label>
                                        <div class="row">
                                            <div class="col-2">
                                                <input type="text" class="form-control fs-14 h-50px w-60" maxlength="3" value="{{ $country_code }}" name="country_code" >
                                            </div>
                                            <div class="col-5">
                                                <input type="text" class="form-control fs-14 h-50px" name="phone" value="{{ $phone }}">
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="col">
                                        <label for="phone" class="form-label fs-14 text-theme-primary fw-bold">Phone</label>
                                        <input type="tel" class="form-control fs-14 h-50px" name="phone" value="{{ $phone }}" required>
                                    </div> --}}
                                    <div class="col">
                                        <label for="abn" class="form-label fs-14 text-theme-primary fw-bold">ABN/ ACN</label>
                                        <input type="text" class="form-control fs-14 h-50px" name="abn" value="{{ $abn }}" required>
                                    </div>
                                    <div class="col">
                                        <label for="description" class="form-label fs-14 text-theme-primary fw-bold">Description</label>
                                        <textarea class="form-control fs-14 h-50px" name="description" required>{{ $description }}</textarea>
                                        {{-- <input type="text" class="form-control fs-14 h-50px" name="description" value="{{ $description }}" required> --}}
                                    </div>
                                    {{-- <div class="col">
                                        <label for="" class="form-label fs-14 text-theme-primary fw-bold">Gender</label>
                                        <br>
                                        <input type="radio" class="btn-check" name="gender" id="male" value="male" autocomplete="off" checked>
                                        <label class="btn btn-outline-primary fs-14" for="male" @if($gender == "male") selected @endif>Male</label>

                                        <input type="radio" class="btn-check" name="gender" id="female" value="female" autocomplete="off">
                                        <label class="btn btn-outline-primary fs-14" for="female" @if($gender == "female") selected @endif>Female</label>
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label fs-14 text-theme-primary fw-bold">Nationality</label>
                                        <select name="nationality" id="role" class="form-select fs-14  h-50px" required>
                                        <option selected>Choose</option>
                                        <option value="US" @if($nationality == "US") selected @endif>US</option>
                                        <option value="AUS" @if($nationality == "AUS") selected @endif>AUS</option>
                                        <option value="UK" @if($nationality == "UK") selected @endif>UK</option>
                                      </select>
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label fs-14 text-theme-primary fw-bold">Street Address</label>
                                        <input type="text" class="form-control fs-14 h-50px" id="" name="address" value="{{ $address }}" required>
                                    </div>

                                    <div class="col">
                                        <label for="" class="form-label fs-14 text-theme-primary fw-bold">Email Address</label>
                                        <input type="email" class="form-control fs-14 h-50px" name="email" value="{{ $email }}" required>
                                    </div>

                                    <div class="col">
                                        <label for="" class="form-label fs-14 text-theme-primary fw-bold">Phone Number </label>
                                        <div class="row">
                                            <div class="col-2">
                                                <input type="tel" class="form-control fs-14 h-50px w-60" maxlength="3" name="country_code" >
                                            </div>
                                            <div class="col-5">
                                                <input type="tel" class="form-control fs-14 h-50px" name="number" value="{{ $mobile }}" required>
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="col">
                                        <div class="form-check py-2 ">
                                            <input class="form-check-input rounded-0" name="terms" value="1" type="checkbox" id="gridCheck" @if($terms == 1) checked @endif>
                                            <label class="form-check-label text-dark fs-14" for="gridCheck">
                                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                    </label>
                                            <p class="fs-14 text-grey">
                                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                                sanctus est. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                                                dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="row justify-content-center pt-5">
                                <div class="col-lg-5 text-center">
                                    <button class="w-25 next action-button default-btn"> Save </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <script>
        function form_submit()
        {
        const collection = document.getElementsByName("change_logo");
            for (let i = 0; i < collection.length; i++) {
                collection[i].submit();
            }
        }
    </script>
@endsection
