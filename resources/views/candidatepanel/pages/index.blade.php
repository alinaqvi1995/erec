@extends('candidatepanel.layout.app') @section('page_title', 'E-Rec')

@section('content')

{{-- <div class="col-xl-4 col-md-6 d-flex mb-5">
    <div class="card dashboard-card bg-one">
        <div class="card-body d-flex align-items-center">
            <div class="first text-center align-self-center">
                <i class="material-icons visibility-icon">visibility</i>
            </div>
            <div class="second">
                <h5 class="card-title">200</h5>
                <p class="card-text">Applicants</p>
            </div>
        </div>
    </div>
</div> --}}
<div class="col-xl-4 col-md-6 mb-md-5 mb-3">
    <div class="dashboard-card bg-one">
        <div class=" d-flex align-items-center">
            <div class="first text-center align-self-center">
                <i class="material-icons visibility-icon">visibility</i>
            </div>
            <div class="second">
                <h5 class="card-title">200</h5>
                <p class="card-text">Applicants</p>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 col-md-6 mb-md-5 mb-3">
    <div class="dashboard-card bg-two">
        <div class=" d-flex align-items-center">
            <div class="first text-center align-self-center">
                <i class="material-icons">edit</i>
            </div>
            <div class="second">
                <h5 class="card-title">05</h5>
                <p class="card-text">Recruiters</p>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 col-md-6 mb-md-5 mb-3">
    <div class="dashboard-card bg-three">
        <div class=" d-flex align-items-center">
            <div class="first text-center align-self-center">
                <i class="material-icons">star</i>
            </div>
            <div class="second">
                <h5 class="card-title">10</h5>
                <p class="card-text">Posted Jobs</p>
            </div>
        </div>
    </div>
</div>
<div class="mb-5 col-md-12">
    <div class="table-header-panel">
        <div class="d-lg-flex d-block">
            <div class="first">
                <h3 class="text-uppercase title-1 mb-2">wayzerr</h3>
                <h2 class="text-uppercase title-2">recent jobs</h2>
            </div>
            <div class="align-self-center text-right second">
                <a href="" class="btn btn-primary" style="color:#FFF;" href=""> View All</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table border">
            <thead>
                <tr>
                    <th></th>
                    <th>Position</th>
                    <th>Location</th>
                    <th>Date</th>
                    <th>Company</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        <p>Autumn 2017 Graduate Opportunities</p>
                        <p class="color-primary">Expo Soft Company</p>
                    </td>
                    <td>UAE</td>
                    <td>20 jan 2022</td>
                    <td>
                        company logo
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <p>Autumn 2017 Graduate Opportunities</p>
                        <p class="color-primary">Expo Soft Company</p>
                    </td>
                    <td>UAE</td>
                    <td>20 jan 2022</td>
                    <td>
                        company logo
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <p>Autumn 2017 Graduate Opportunities</p>
                        <p class="color-primary">Expo Soft Company</p>
                    </td>
                    <td>UAE</td>
                    <td>20 jan 2022</td>
                    <td>
                        company logo
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <p>Autumn 2017 Graduate Opportunities</p>
                        <p class="color-primary">Expo Soft Company</p>
                    </td>
                    <td>UAE</td>
                    <td>20 jan 2022</td>
                    <td>
                        company logo
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <p>Autumn 2017 Graduate Opportunities</p>
                        <p class="color-primary">Expo Soft Company</p>
                    </td>
                    <td>UAE</td>
                    <td>20 jan 2022</td>
                    <td>
                        company logo
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>



@endsection
@section('bottom_script')
@endsection
