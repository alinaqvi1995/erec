@extends('candidatepanel.layout.app')

@section('page_title', 'E-Rec')

@section('head_style')
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection

    @section('content')
    <div class="container">
        <div class="heading">

            <h3>Add New Job Application</h3>
            @if (session($key ?? 'error'))
                <div class="alert alert-danger" role="alert">
                    {!! session($key ?? 'error') !!}
                </div>
            @endif
        </div>
        <form method="post" action="{{ route('candidates.job.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title" class="form-label fs-14 text-theme-primary fw-bold">Title</label>
                    <input type="text" class="form-control fs-14 h-50px" name="title" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name" class="form-label fs-14 text-theme-primary fw-bold">Job Type</label>
                    <select class="form-control fs-14 h-50px" name="job_type" required>
                        <option value="Full Time">Full Time</option>
                        <option value="Part Time">Part Time</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="experience" class="form-label fs-14 text-theme-primary fw-bold">Experience</label>
                    <input type="text" class="form-control fs-14 h-50px" name="experience" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="location" class="form-label fs-14 text-theme-primary fw-bold">Location</label>
                    <textarea class="form-control fs-14 h-50px" name="location" required></textarea>
                </div>
            </div>
            {{-- <div class="col-md-6">
                <div class="form-group">
                    <label for="banner" class="form-label fs-14 text-theme-primary fw-bold">Location</label>
                    <input type="text" class="form-control fs-14 h-50px" name="location" required>
                </div>
            </div> --}}
            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="form-label fs-14 text-theme-primary fw-bold">Assign Resume For this Application</label>
                    <select name="resume_id" id="resume_id" class="select2-multiple form-control fs-14  h-50px" required>
                        <option disabled selected>Choose</option>
                        @foreach ($user->resume as $row)
                            <option value="{{ $row->id }}">{{ $row->document }}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <button type="submit" class="w-25 btn btn-primary"> Update </button>
                </div>
            </div>
        </form>
    </div>
    @endsection

@section('bottom_script')
@endsection
