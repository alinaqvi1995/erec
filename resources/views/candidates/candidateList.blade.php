@extends('layouts.app')

@section('content')
<main>
    <section>
        <div class="container">
            <div class="row justify-content-center align-items-center py-lg-5 py-3">
                <div class="col">
                    <h1 class="mb-0 fs-48 text-center fw-bold text-uppercase mt-5 pt-5">Candidates </h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <form action="" class="row row-cols-1 search-area mb-3 py-4 px-3 position-relative">
                        <div class="col">
                            <input type="text" class="w-100 fs-14 bg-theme-secondary px-5 text-dark h-50px mb-3" placeholder="Search">
                            <img src="{{asset('images/icon-search.svg')}}" alt="icon-search" class="img-fluid position-absolute">
                        </div>
                        <div class="col">
                            <input type="text" class="w-100 fs-14 bg-theme-secondary px-5 text-dark h-50px" placeholder="All Locations">
                            <img src="{{asset('images/icon-location.svg')}}" alt="icon-location" class="img-fluid position-absolute">
                        </div>
                    </form>

                    <div class="search-area mb-3 py-lg-4 py-3 px-3 mb-3">
                        <div class="d-flex justify-content-between align-items-center px-3">
                            <h2 class="fs-5 text-theme-primary fw-bold">Designation</h2>
                            <a href="javascript:void(0)">
                                <img src="{{asset('images/plus-circle-black.svg')}}" alt="plus-circle-black" class="img-fluid" data-bs-toggle="collapse" href="#Designation" role="button" aria-expanded="false" aria-controls="Designation">
                            </a>
                        </div>
                        <div class="collapse" id="Designation">
                            <div class="card card-body border-0  rounded-0">
                                <ul>
                                    <li class="d-flex justify-content-between align-items-center border-top border-bottom-dash py-2">
                                        <div class="form-check">
                                            <input class="form-check-input rounded-pill" type="checkbox" name="flexRadioDefault" id="d1">
                                            <label class="form-check-label" for="d1">
                                              Option 1
                                            </label>
                                        </div>

                                        <span>
                                              124
                                          </span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center border-bottom-dash py-2">
                                        <div class="form-check">
                                            <input class="form-check-input rounded-pill" type="checkbox" name="flexRadioDefault" id="d2">
                                            <label class="form-check-label" for="d3">
                                                Option 2
                                            </label>
                                        </div>

                                        <span>
                                              124
                                          </span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center py-2">
                                        <div class="form-check">
                                            <input class="form-check-input rounded-pill" type="checkbox" name="flexRadioDefault" id="d4">
                                            <label class="form-check-label" for="d3">
                                                Option 3
                                            </label>
                                        </div>

                                        <span>
                                              124
                                          </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="search-area mb-3 py-lg-4 py-3 px-3 mb-3">
                        <div class="d-flex justify-content-between align-items-center px-3 ">
                            <h2 class="fs-5 text-theme-primary fw-bold">Job Type</h2>
                            <a href="javascript:void(0)">
                                <img src="{{asset('images/plus-circle-black.svg')}}" alt="plus-circle-black" class="img-fluid" data-bs-toggle="collapse" href="#JobType" role="button" aria-expanded="false" aria-controls="JobType">
                            </a>
                        </div>
                        <div class="collapse" id="JobType">
                            <div class="card card-body border-0  rounded-0">
                                <ul>
                                    <li class="d-flex justify-content-between align-items-center border-top border-bottom-dash py-2">
                                        <div class="form-check">
                                            <input class="form-check-input rounded-pill" type="checkbox" name="flexRadioDefault" id="jt1">
                                            <label class="form-check-label" for="jt1">
                                              Option 1
                                            </label>
                                        </div>

                                        <span>
                                              124
                                          </span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center border-bottom-dash py-2">
                                        <div class="form-check">
                                            <input class="form-check-input rounded-pill" type="checkbox" name="flexRadioDefault" id="jt2">
                                            <label class="form-check-label" for="jt2">
                                                Option 2
                                            </label>
                                        </div>

                                        <span>
                                              124
                                          </span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center py-2">
                                        <div class="form-check">
                                            <input class="form-check-input rounded-pill" type="checkbox" name="flexRadioDefault" id="jt3">
                                            <label class="form-check-label" for="jt3">
                                                Option 3
                                            </label>
                                        </div>

                                        <span>
                                              124
                                          </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="search-area mb-3 py-lg-4 py-3 px-3 mb-3">
                        <div class="d-flex justify-content-between align-items-center px-3">
                            <h2 class="fs-5 text-theme-primary fw-bold">Experience Level</h2>
                            <a href="javascript:void(0)">
                                <img src="{{asset('images/plus-circle-black.svg')}}" alt="plus-circle-black" class="img-fluid" data-bs-toggle="collapse" href="#Experience" role="button" aria-expanded="false" aria-controls="Experience">
                            </a>
                        </div>
                        <div class="collapse" id="Experience">
                            <div class="card card-body border-0  rounded-0">
                                <ul>
                                    <li class="d-flex justify-content-between align-items-center border-top border-bottom-dash py-2">
                                        <div class="form-check">
                                            <input class="form-check-input rounded-pill" type="checkbox" name="flexRadioDefault" id="e1">
                                            <label class="form-check-label" for="e1">
                                              Option 1
                                            </label>
                                        </div>

                                        <span>
                                              124
                                          </span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center border-bottom-dash py-2">
                                        <div class="form-check">
                                            <input class="form-check-input rounded-pill" type="checkbox" name="flexRadioDefault" id="e2">
                                            <label class="form-check-label" for="e2">
                                                Option 2
                                            </label>
                                        </div>

                                        <span>
                                              124
                                          </span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center py-2">
                                        <div class="form-check">
                                            <input class="form-check-input rounded-pill" type="checkbox" name="flexRadioDefault" id="e3">
                                            <label class="form-check-label" for="e3">
                                                Option 3
                                            </label>
                                        </div>

                                        <span>
                                              124
                                          </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="d-lg-flex justify-content-between align-items-center py-2 mb-3 px-2">
                        <h3 class="mb-0 fs-5 fw-bold">Showing 1-{{ $cand->total() }} Of {{ $count }} Candidates</h3>
                        <form action="" class="row">
                            <div class="col">
                                <div class="row row-cols-1 row-cols-lg-3">
                                    <div class="col">
                                        <label for="" class="fs-5 fw-bold">Sort By</label>
                                    </div>
                                    <div class="col px-lg-0">
                                        <select id="role" class="form-select fs-14 mb-lg-0 mb-2 h-50px bg-theme-secondary">
                                            <option selected="">Most Recent</option>
                                            <option>...</option>
                                          </select>
                                    </div>
                                    <div class="col pe-lg-0">
                                        <select id="role" class="form-select fs-14  h-50px bg-theme-secondary">
                                            <option selected="">10 Per Page</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    @foreach($cand as $row)
                    <div class="card horizontal-view py-3 mb-3">
                        <div class="card-body row align-items-center">
                            <div class="col-lg-2 text-center">
                                @if(isset($row->user->avatar))
                                    <img src="{{ asset('storage/'.$row->user->avatar) }}" alt="profile-img" class="img-fluid" width="128" height="128">
                                @else
                                    <img src="{{ asset('images/profile-img.svg') }}" alt="profile-img" class="img-fluid" width="128" height="128">
                                @endif
                                {{-- <img src="{{asset('images/profile-img.svg')}}" alt="profile-img" class="img-fluid" width="128" height="128"> --}}
                            </div>
                            <div class="col-lg-7">
                                <div class="details">
                                    <span class="title fw-bold text-theme-primary">{{ $row->first_name }} {{ $row->last_name }}</span>
                                    <p>{{ $row->head_line }}</p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="btns d-flex flex-column">
                                    <a href="{{ route('candidate.detail', $row->id) }}" class="btn default-btn mb-3">View profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="card horizontal-view py-3 mb-3">
                        <div class="card-body row align-items-center">
                            <div class="col-lg-2 text-center">
                                <img src="{{asset('images/profile-img.svg')}}" alt="profile-img" class="img-fluid" width="128" height="128">
                            </div>
                            <div class="col-lg-7">
                                <div class="details">
                                    <span class="title fw-bold text-theme-primary">Candidate</span>
                                    <p>
                                        5 years experience
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="btns d-flex flex-column">
                                    <button class="btn default-btn mb-3">View profile</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card horizontal-view py-3 mb-3">
                        <div class="card-body row align-items-center">
                            <div class="col-lg-2 text-center">
                                <img src="{{asset('images/profile-img.svg')}}" alt="profile-img" class="img-fluid" width="128" height="128">
                            </div>
                            <div class="col-lg-7">
                                <div class="details">
                                    <span class="title fw-bold text-theme-primary">Candidate</span>
                                    <p>
                                        10 years experience
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="btns d-flex flex-column">
                                    <button class="btn default-btn mb-3">View profile</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card horizontal-view py-3 mb-3">
                        <div class="card-body row align-items-center">
                            <div class="col-lg-2 text-center">
                                <img src="{{asset('images/profile-img.svg')}}" alt="profile-img" class="img-fluid" width="128" height="128">
                            </div>
                            <div class="col-lg-7">
                                <div class="details">
                                    <span class="title fw-bold text-theme-primary">Candidate</span>
                                    <p>
                                        5 years experience
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="btns d-flex flex-column">
                                    <button class="btn default-btn mb-3">View profile</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card horizontal-view py-3 mb-3">
                        <div class="card-body row align-items-center">
                            <div class="col-lg-2 text-center">
                                <img src="{{asset('images/profile-img.svg')}}" alt="profile-img" class="img-fluid" width="128" height="128">
                            </div>
                            <div class="col-lg-7">
                                <div class="details">
                                    <span class="title fw-bold text-theme-primary">Candidate</span>
                                    <p>
                                        2 years experience
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="btns d-flex flex-column">
                                    <button class="btn default-btn mb-3">View profile</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card horizontal-view py-3 mb-3">
                        <div class="card-body row align-items-center">
                            <div class="col-lg-2 text-center">
                                <img src="{{asset('images/profile-img.svg')}}" alt="profile-img" class="img-fluid" width="128" height="128">
                            </div>
                            <div class="col-lg-7">
                                <div class="details">
                                    <span class="title fw-bold text-theme-primary">Candidate</span>
                                    <p>
                                        5 years experience
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="btns d-flex flex-column">
                                    <button class="btn default-btn mb-3">View profile</button>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <nav aria-label="Page navigation example" class="pt-5">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </section>

</main>
@endsection
