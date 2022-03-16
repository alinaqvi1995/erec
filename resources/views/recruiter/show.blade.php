@extends('layouts.app')

@section('content')

<main>
    <section>
        <div class="container">
            <div class="row justify-content-center  py-lg-5 py-3 mt-5">
                <div class="col-lg-8">
                    <div class="row pb-lg-5 pb-3">
                        <div class="col-lg-2">
                            @if(isset($rec->avatar))
                                <img src="{{ asset('storage/'.$rec->avatar) }}" alt="profile-img" class="img-fluid" width="128" height="128">
                            @else
                                <img src="{{ asset('images/profile-img.svg') }}" alt="profile-img" class="img-fluid" width="128" height="128">
                            @endif
                            {{-- <img src="{{ asset('images/company.svg') }}" alt="company" class="img-fluid"> --}}
                        </div>
                        <div class="col-lg-9 details">
                            <span class="title text-theme-primary fw-bold">{{ $rec->name }}</span>
                            <p class="fs-14 mb-0 pt-1">IT , Customer Service / Call Center , Sales , Accounts, Telecommunications</p>
                            <div class="rate">
                                <div class="rating">
                                    <a href="#" class="ps-2 text-decoration-underline fs-12">4 Reviews</a>
                                    <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                                    <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                                    <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                                    <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                                    <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                                    <span class="fs-17 fw-600 pe-2">4.0</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h4 class="fs-18 fw-600 pb-lg-4 pb-3">About</h4>
                    <p class="fs-14 text-secondary pb-3">{{ $rec->description }}</p>

                    <h4 class="fs-18 fw-600 pb-lg-4 pb-3">Services We Deal-In</h4>

                    <div class="row row-cols-1 row-cols-lg-3 services">
                        @foreach ($rec->features as $skill)
                        <div class="col">
                            <div class="card shadow">
                                <div class="card-body ps-lg-5 py-4 ">
                                    {{ $skill->name }}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <h3 class="mb-0 fs-3 fw-bold px-2 py-5 text-theme-primary ">Jobs at Accounts ABC</h3>
                    <div class="card horizontal-view py-3 mb-3">
                        <div class="card-body row align-items-center">
                            <div class="col-lg-2">
                                <img src="{{ asset('images/bag.svg') }}" alt="profile-img" class="img-fluid" width="128" height="128">
                            </div>
                            <div class="col-lg-7">
                                <div class="details">
                                    <span class="title fw-bold text-theme-primary">Accountant</span>
                                    <ul>
                                        <li class="d-lg-flex pt-3">
                                            <div>Name </div>
                                            <div class="">Laiza Actub</div>
                                        </li>
                                        <li class="d-lg-flex">
                                            <div>Job Type </div>
                                            <div class="">Full Time</div>
                                        </li>
                                        <li class="d-lg-flex">
                                            <div>Skills </div>
                                            <div class="">
                                                <span id="pointer-alt">HTML</span>
                                                <span id="pointer-alt">CSS</span>
                                                <span id="pointer-alt">JS</span>
                                            </div>
                                        </li>
                                        <li class="d-lg-flex">
                                            <div>Experience </div>
                                            <div class="">3 Year</div>
                                        </li>
                                        <li class="d-lg-flex">
                                            <div>Location </div>
                                            <div class="">Lorem ipsum dolor sit amet, consetetur </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="btns d-flex flex-column">
                                    <button class="btn default-btn mb-3">Hire Now</button>
                                    <button class="btn default-btn-2">View Resume</button>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#"><img src="{{ asset('images/share.svg') }}" alt="" class="img-fluid"></a>
                                        <a href="#"><img src="{{ asset('images/mail.svg') }}" alt="" class="img-fluid"></a>
                                        <a href="#"><img src="{{ asset('images/wishlist.svg') }}" alt="" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card horizontal-view py-3 mb-3">
                        <div class="card-body row align-items-center">
                            <div class="col-lg-2">
                                <img src="{{ asset('images/bag.svg') }}" alt="profile-img" class="img-fluid" width="128" height="128">
                            </div>
                            <div class="col-lg-7">
                                <div class="details">
                                    <span class="title fw-bold text-theme-primary">Accountant</span>
                                    <ul>
                                        <li class="d-lg-flex">
                                            <div>Name </div>
                                            <div class="">Laiza Actub</div>
                                        </li>
                                        <li class="d-lg-flex">
                                            <div>Job Type </div>
                                            <div class="">Full Time</div>
                                        </li>
                                        <li class="d-lg-flex">
                                            <div>Skills </div>
                                            <div class="">
                                                <span id="pointer-alt">HTML</span>
                                                <span id="pointer-alt">CSS</span>
                                                <span id="pointer-alt">JS</span>
                                            </div>
                                        </li>
                                        <li class="d-lg-flex">
                                            <div>Experience </div>
                                            <div class="">3 Year</div>
                                        </li>
                                        <li class="d-lg-flex">
                                            <div>Location </div>
                                            <div class="">Lorem ipsum dolor sit amet, consetetur </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="btns d-flex flex-column">
                                    <button class="btn default-btn mb-3">Hire Now</button>
                                    <button class="btn default-btn-2">View Resume</button>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#"><img src="{{ asset('images/share.svg') }}" alt="" class="img-fluid"></a>
                                        <a href="#"><img src="{{ asset('images/mail.svg') }}" alt="" class="img-fluid"></a>
                                        <a href="#"><img src="{{ asset('images/wishlist.svg') }}" alt="" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-center mb-0 py-4">
                        <a href="#" class="btn default-btn ">View All</a>
                    </p>

                </div>
                <div class="col-lg-4">
                    <button class="btn default-btn w-100 mb-3">Follow</button>

                    <div class="search-area mb-3 p-4 mb-3">
                        <h2 class="fs-5 text-dark fw-bold pb-3">Recruiters In Similar Industries</h2>
                        <ul>
                            <li class="d-flex justify-content-between align-items-center pb-4">
                                <img src="{{ asset('images/bag.svg') }}" alt="bag" class="img-fluid">
                                <div class="text-center">
                                    <p class="mb-0 fw-bold"> RTC1 Services</p>
                                    <p class=" mb-0 text-theme-primary fs-14 "> Software Industry</p>
                                </div>
                                <button class="btn default-btn ">Follow</button>
                            </li>
                            <li class="d-flex justify-content-between align-items-center pt-2 pb-4">
                                <img src="{{ asset('images/bag.svg') }}" alt="bag" class="img-fluid">
                                <div class="text-center">
                                    <p class="mb-0 fw-bold"> RTC1 Services</p>
                                    <p class=" mb-0 text-theme-primary fs-14 "> Software Industry</p>
                                </div>
                                <button class="btn default-btn ">Follow</button>
                            </li>
                            <li class="d-flex justify-content-between align-items-center pt-2 pb-4">
                                <img src="{{ asset('images/bag.svg') }}" alt="bag" class="img-fluid">
                                <div class="text-center">
                                    <p class="mb-0 fw-bold"> RTC1 Services</p>
                                    <p class=" mb-0 text-theme-primary fs-14 "> Software Industry</p>
                                </div>
                                <button class="btn default-btn ">Follow</button>
                            </li>
                            <li class="d-flex justify-content-between align-items-center pt-2 pb-4">
                                <img src="{{ asset('images/bag.svg') }}" alt="bag" class="img-fluid">
                                <div class="text-center">
                                    <p class="mb-0 fw-bold"> RTC1 Services</p>
                                    <p class=" mb-0 text-theme-primary fs-14 "> Software Industry</p>
                                </div>
                                <button class="btn default-btn ">Follow</button>
                            </li>
                            <li class="d-flex justify-content-between align-items-center pt-2 pb-4">
                                <img src="{{ asset('images/bag.svg') }}" alt="bag" class="img-fluid">
                                <div class="text-center">
                                    <p class="mb-0 fw-bold"> RTC1 Services</p>
                                    <p class=" mb-0 text-theme-primary fs-14 "> Software Industry</p>
                                </div>
                                <button class="btn default-btn ">Follow</button>
                            </li>
                            <li class="d-flex justify-content-between align-items-center pt-2 pb-4">
                                <img src="{{ asset('images/bag.svg') }}" alt="bag" class="img-fluid">
                                <div class="text-center">
                                    <p class="mb-0 fw-bold"> RTC1 Services</p>
                                    <p class=" mb-0 text-theme-primary fs-14 "> Software Industry</p>
                                </div>
                                <button class="btn default-btn ">Follow</button>
                            </li>
                            <li class="d-flex justify-content-between align-items-center pt-2 pb-4">
                                <img src="{{ asset('images/bag.svg') }}" alt="bag" class="img-fluid">
                                <div class="text-center">
                                    <p class="mb-0 fw-bold"> RTC1 Services</p>
                                    <p class=" mb-0 text-theme-primary fs-14 "> Software Industry</p>
                                </div>
                                <button class="btn default-btn ">Follow</button>
                            </li>
                            <li class="d-flex justify-content-between align-items-center pt-2 pb-4">
                                <img src="{{ asset('images/bag.svg') }}" alt="bag" class="img-fluid">
                                <div class="text-center">
                                    <p class="mb-0 fw-bold"> RTC1 Services</p>
                                    <p class=" mb-0 text-theme-primary fs-14 "> Software Industry</p>
                                </div>
                                <button class="btn default-btn ">Follow</button>
                            </li>
                            <li class="d-flex justify-content-between align-items-center">
                                <a href="#" class="fs-6 text-grey">Show more similar companies <img src="{{ asset('images/down-arrow.svg') }}" class="img-fluid" alt="down-arrow"></a>
                            </li>
                        </ul>
                    </div>

                    <div class="search-area mb-3 p-4 mb-3">
                        <h2 class="fs-5 text-dark fw-bold pb-3">People Also Viewed</h2>
                        <ul>
                            <li class="d-flex justify-content-between align-items-center pb-4">
                                <img src="{{ asset('images/bag.svg') }}" alt="bag" class="img-fluid">
                                <div class="text-center">
                                    <p class="mb-0 fw-bold"> RTC1 Services</p>
                                    <p class=" mb-0 text-theme-primary fs-14 "> Software Industry</p>
                                </div>
                                <button class="btn default-btn ">Follow</button>
                            </li>
                            <li class="d-flex justify-content-between align-items-center pt-2 pb-4">
                                <img src="{{ asset('images/bag.svg') }}" alt="bag" class="img-fluid">
                                <div class="text-center">
                                    <p class="mb-0 fw-bold"> RTC1 Services</p>
                                    <p class=" mb-0 text-theme-primary fs-14 "> Software Industry</p>
                                </div>
                                <button class="btn default-btn ">Follow</button>
                            </li>
                            <li class="d-flex justify-content-between align-items-center pt-2 pb-4">
                                <img src="{{ asset('images/bag.svg') }}" alt="bag" class="img-fluid">
                                <div class="text-center">
                                    <p class="mb-0 fw-bold"> RTC1 Services</p>
                                    <p class=" mb-0 text-theme-primary fs-14 "> Software Industry</p>
                                </div>
                                <button class="btn default-btn ">Follow</button>
                            </li>
                            <li class="d-flex justify-content-between align-items-center pt-2 pb-4">
                                <img src="{{ asset('images/bag.svg') }}" alt="bag" class="img-fluid">
                                <div class="text-center">
                                    <p class="mb-0 fw-bold"> RTC1 Services</p>
                                    <p class=" mb-0 text-theme-primary fs-14 "> Software Industry</p>
                                </div>
                                <button class="btn default-btn ">Follow</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

@endsection
