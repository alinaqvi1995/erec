@extends('candidatepanel.layout.app')

@section('page_title', 'E-Rec')

@section('head_style')
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection

    @section('content')
    {{-- @if (session($key ?? 'status'))
    <div class="alert alert-success" role="alert">
        {!! session($key ?? 'status') !!}
    </div>
    @endif --}}
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <h3>My Educational Details</h3><br>
            </div>
            <div class="col-sm-3">
                <a class="btn btn-primary text-white" href="{{ route('candidates.education.new') }}"> Add New Education </a>
            </div>
        </div>
    <hr class="style14">

    @foreach ($user->candidateEdu as $key => $edu)
    <div class="container">
            {{-- {{ dd($edu->id) }} --}}
        <form method="post" action="{{ route('candidates.education.update') }}" enctype="multipart/form-data">
            @csrf
            @method('post')
            <input type="hidden" name="edu_id" value="{{ $edu->id }}">
            <div class="row">
            <div class="col-sm-10">
                <div class="form-group">
                    <label for="name" class="form-label fs-14 text-theme-primary fw-bold">Education</label>
                    <select id="role" class="form-select fs-14  h-50px" name="education">
                        <option selected>Choose</option>
                        <option value="PHD" @if($edu->education == "PHD") selected @endif>PHD</option>
                        <option value="Masters" @if($edu->education == "Masters") selected @endif>Masters</option>
                        <option value="Bachelors" @if($edu->education == "Bachelors") selected @endif>Bachelors</option>
                        <option value="Undergrad" @if($edu->education == "Undergrad") selected @endif>Undergrad</option>
                    </select>
                </div>
            {{-- </div>
            <div class="col-md-6"> --}}
                <div class="form-group">
                    <label for="name" class="form-label fs-14 text-theme-primary fw-bold">Course</label>
                    <select id="role" class="form-select fs-14  h-50px" name="course">
                        <option selected>Choose</option>
                        <option value="Computer Science" @if($edu->course == "Computer Science") selected @endif>Computer Science</option>
                        <option value="Biology" @if($edu->course == "Biology") selected @endif>Biology</option>
                        <option value="Mathematics" @if($edu->course == "Mathematics") selected @endif>Mathematics</option>
                    </select>
                </div>
            {{-- </div>
            <div class="col-md-6"> --}}
                <div class="form-group">
                    <label for="name" class="form-label fs-14 text-theme-primary fw-bold">Institute</label>
                    <input type="text" class="form-control fs-14 h-50px" name="name" value="{{ $edu->institute }}" required>
                </div>
            {{-- </div>
            <div class="col-md-6"> --}}
                <div class="form-group">
                    <label for="name" class="form-label fs-14 text-theme-primary fw-bold">Institute Location</label>
                    <input type="text" class="form-control fs-14 h-50px" name="name" value="{{ $edu->institute_loc }}" required>
                </div>
            {{-- </div>
            <div class="col-md-6"> --}}
                <div class="form-group">
                    <label for="name" class="form-label fs-14 text-theme-primary fw-bold">Passing Year</label>
                    <input type="text" class="form-control fs-14 h-50px" name="name" value="{{ $edu->passing_year }}" required>
                </div>
            {{-- </div>
            <div class="col-md-6"> --}}
            </div>
            <div class="col-sm-2">
                {{-- <button type="submit" class="btn btn-primary"> Update </button> --}}
                {{-- <hr class="style14"> --}}
                <a href="{{ route('candidates.education.delete', $edu->id) }}" onclick="return confirm('Are you sure you want to delete?');"> <i class="fa fa-times-circle-o" style="font-size:48px; color:red"></i> </a>
            </div>
        </div>
        <div class="col-sm-11 text-center">
            <button type="submit" class="btn btn-primary"> Update </button>
            {{-- <hr class="style14">
            <a href="" type="submit" class="btn btn-danger"> Delete </a> --}}
        </div>
        {{-- <div class="form-group"> --}}
            {{-- </div> --}}
            <hr class="style14">
        </form>
    </div>
</div>
    @endforeach

    {{-- <form id="msform" method="POST" action="{{ route('candidate.store') }}" name="change_logo" enctype="multipart/form-data">
        @csrf
        <fieldset class="mb-5">
            <input type="hidden" class="form-control fs-14 h-50px" name="comp_id" value="$comp->id">
            <div class="row align-items-center row-cols-lg-2">
                <div class="col-lg-2">
                    <div class="avatar-upload">
                            <div class="avatar-edit">
                                <input type='file' id="imageUpload" onchange="form_submit()" name="avatar" accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"></label>
                            </div>
                            <div class="avatar-preview">
                                @if($user->avatar != NULL)
                                <div id="imagePreview" style="background-image: url({{ asset('storage/'.$user->avatar) }});">
                                </div>
                                @else
                                <div id="imagePreview" style="background-image: url({{ asset('images/profile-img.svg') }});">
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <h2 class="fs-4 text-theme-primary text-uppercase fw-bold">Upload candidate avatar</h2>
                        <small class="fs-14">Supported file format png, jpg, jpeg, gif | upto 3 MB</small>
                    </div>
                </div>
            </div>
        </fieldset>
    </form>
    <form id="msform" method="POST" action="{{ route('candidate.store') }}">
        @csrf
        <fieldset>
            <input type="hidden" class="form-control fs-14 h-50px" name="comp_id" value="$comp->id">
            <div class="row row-cols-1">
                <div class="col">
                    <h2 class="fs-4 text-theme-primary text-uppercase fw-bold pb-3">candidate Details</h2>
                </div>
                <div class="col">
                    <label for="name" class="form-label fs-14 text-theme-primary fw-bold">recruiter Name</label>
                    <input type="text" class="form-control fs-14 h-50px" name="name" value="{{ $user->recruiter->name }}" required>
                </div>
                <div class="col">
                    <label for="" class="form-label fs-14 text-theme-primary fw-bold">Category</label>
                    <select name="category[]" id="role" class="select2-multiple form-control fs-14  h-50px" required multiple>
                    <option disabled>Choose</option>
                    @foreach ($cat as $ca)
                        <option value="{{ $ca->id }}"
                            @if($comp != null)
                                @foreach ($comp->features as $row)
                                    @if($row->id == $ca->id)
                                        Selected
                                    @endif
                                @endforeach
                            @endif>{{ $ca->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col">
                    <label for="description" class="form-label fs-14 text-theme-primary fw-bold">Description</label>
                    <input type="text" class="form-control fs-14 h-50px" name="description" value="{{ $user->recruiter->description }}" required>
                </div>

                <div class="col">
                    <div class="form-check py-2 ">
                        <input class="form-check-input rounded-0" name="terms" value="1" type="checkbox" id="gridCheck" @if($user->recruiter->terms == 1) checked @endif>
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
                <div class="avatar-upload">
                    <div class="avatar-edit">
                        <input type='file' id="imageUpload" onchange="form_submit()" name="logo" accept=".png, .jpg, .jpeg" />
                        <label for="imageUpload"></label>
                    </div>
                    <div class="avatar-preview">
                        @if($user->avatar != NULL)
                        <div id="imagePreview" style="background-image: url({{ asset('storage/'.$user->avatar) }});">
                        </div>
                        @else
                        <div id="imagePreview" style="background-image: url({{ asset('images/profile-img.svg') }});">
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col">
                <h2 class="fs-4 text-theme-primary text-uppercase fw-bold">Upload recruiter avatar</h2>
                <small class="fs-14">Supported file format png, jpg, jpeg, gif | upto 3 MB</small>
            </div>
            </div>
        </fieldset>
        <div class="row justify-content-center pt-5">
            <div class="col-lg-5 text-center">
                <button class="w-25 next action-button default-btn"> Save </button>
            </div>
        </div>
    </form> --}}

    @endsection

@section('bottom_script')
@endsection