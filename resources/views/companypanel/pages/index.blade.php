@extends('companypanel.layout.app') @section('page_title', 'E-Rec') @section('head_style')
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> @endsection @section('content')
<style>
    /* a {
        text-decoration: none;
    }
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

    .dashboard-card {
        padding:30px;
        border-radius: 8px;
    }

    .dashboard-card .card-title {
        font-weight: 500;
        margin-bottom: 0;
        font-size: 36px;
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
        font-size: 24px;
        line-height: 1.4;
        margin-bottom: 0;
        color: #fff;
    }

    .dashboard-card i {
        font-size: 40px;
        color: #fff;
    }

    .dashboard-card  .first {
        flex: 0 0 auto;
        width: 30%;
    }

    .dashboard-card  .second {
        flex: 0 0 auto;
        width: 70%;
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
  } */
</style>


<div class="col-xl-4 col-md-6 mb-5">
    <div class="dashboard-card bg-one">
        <div class=" d-flex align-items-center">
            <div class="first text-center align-self-center">
                <i class="material-icons visibility-icon">visibility</i>
            </div>
            {{-- <section> --}}
                {{-- @include('layouts.includes.messages') --}}
            {{-- </section> --}}
            <div class="second">
                <h5 class="card-title">200</h5>
                <p class="card-text">Applicants</p>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 col-md-6 mb-5">
    <div class=" dashboard-card bg-two">
        <div class=" d-flex align-items-center">
            <div class="first text-center align-self-center">
                <i class="material-icons visibility-icon">edit</i>
            </div>
            <div class="second">
                <h5 class="card-title">05</h5>
                <p class="card-text">Recruiters</p>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 col-md-6 mb-5">
    <div class="dashboard-card bg-three">
        <div class=" d-flex align-items-center">
            <div class="first text-center align-self-center">
                <i class="material-icons visibility-icon">star</i>
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
                <a class="btn btn-primary" style="color:#FFF;" href="{{ route('company.jobs') }}"> View All</a>
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
{{-- <div class="mb-5 col-md-12">
    <div class="table-responsive">
        <div class="table-header-panel">
            <div class="d-flex">
                <div class="first">
                    <h3 class="text-uppercase title-1 mb-2">wayzerr</h3>
                    <h2 class="text-uppercase title-2">recent jobs</h2>
                </div>
                <div class="align-self-center text-right second">
                    <a href="" class="view-all-table">View All</a>
                </div>
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
</div> --}}



@endsection @section('bottom_script') @endsection
