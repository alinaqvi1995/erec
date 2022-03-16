@extends('recruterpanel.layout.app')

@section('page_title', 'E-Rec')

@section('head_style')
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection

    @section('content')
    <div class="container">
        <div class="heading">

            <h3>Add New Job</h3>
            @if (session($key ?? 'error'))
                <div class="alert alert-danger" role="alert">
                    {!! session($key ?? 'error') !!}
                </div>
            @endif
        </div>
        <form method="post" action="{{ route('recruiter.jobs.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="col-md-8">
                <div class="form-group">
                    <label for="name" class="form-label fs-14 text-theme-primary fw-bold">Title</label>
                    <input type="text" class="form-control fs-14 h-50px" name="post" required>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="name" class="form-label fs-14 text-theme-primary fw-bold">Job Type</label>
                    <select class="form-control fs-14 h-50px" name="job_type" required>
                        <option value="Full Time">Full Time</option>
                        <option value="Part Time">Part Time</option>
                    </select>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="experience" class="form-label fs-14 text-theme-primary fw-bold">Experience</label>
                    <input type="text" class="form-control fs-14 h-50px" name="experience" required>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="gender" class="form-label fs-14 text-theme-primary fw-bold">Gender</label>
                    <br>
                    <input type="radio" class="btn-check" name="gender" id="male" value="male" autocomplete="off" checked>
                    <label class="btn btn-outline-primary fs-14" for="male" >Male</label>

                    <input type="radio" class="btn-check" name="gender" id="female" value="female" autocomplete="off">
                    <label class="btn btn-outline-primary fs-14" for="female">Female</label>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="offer_salary" class="form-label fs-14 text-theme-primary fw-bold">Offer Salary</label>
                    <input type="text" class="form-control fs-14 h-50px" name="offer_salary" required>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="qualification" class="form-label fs-14 text-theme-primary fw-bold">Qualification</label>
                    <input type="text" class="form-control fs-14 h-50px" name="qualification" required>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="location" class="form-label fs-14 text-theme-primary fw-bold">Location</label>
                    <input type="text" class="form-control fs-14 h-50px" name="location" required>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="expiry_date" class="form-label fs-14 text-theme-primary fw-bold">Valid Till</label>
                    <input type="date" class="form-control fs-14 h-50px" name="expiry_date" required>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="key_responsibility" class="form-label fs-14 text-theme-primary fw-bold">Key Responsibility</label>
                    <textarea class="form-control fs-14 h-50px summernote" id="key_responsibility" name="key_responsibility" required></textarea>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="skill_exp" class="form-label fs-14 text-theme-primary fw-bold">Skill Experience</label>
                    <textarea class="form-control fs-14 h-50px summernote"  name="skill_exp" required></textarea>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="description" class="form-label fs-14 text-theme-primary fw-bold">Description</label>
                    <textarea class="form-control fs-14 h-50px summernote"  name="description" required></textarea>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="" class="form-label fs-14 text-theme-primary fw-bold">Skills</label>
                    <select name="skill[]" id="skill" class="select2-multiple form-control fs-14  h-50px" required multiple>
                    <option disabled>Choose</option>
                    @foreach ($skill as $row)
                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                    @endforeach
                  </select>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="banner" class="form-label fs-14 text-theme-primary fw-bold">Banner</label>
                    <input type="file" class="form-control fs-14 h-50px" name="banner" accept=".png, .jpg, .jpeg"  required>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="company" class="form-label fs-14 text-theme-primary fw-bold">Assign Company</label>
                    <select name="company" id="company" class="select2-multiple form-control fs-14  h-50px" required>
                    <option disabled>Choose</option>
                    @foreach ($recruiter as $row)
                        <option value="{{ $row->company->id }}">{{ $row->company->name }}</option>
                    @endforeach
                  </select>
                </div>
            </div>


            <div class="col-md-8">
                <div class="form-group">
                    <button type="submit" class="w-25 btn btn-primary"> Create </button>
                </div>
            </div>
        </form>
    </div>
    @endsection

@section('bottom_script')
@endsection
