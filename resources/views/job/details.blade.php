@extends('layouts.app')

@section('content')

<main>
    <section>
        <div class="container">
            <div class="row justify-content-center  py-lg-5 py-3 mt-5">
                <div class="col-lg-8">
                    <div class="row pb-lg-5 pb-3">
                        <div class="col-lg-2">
                            @if(isset($comp->logo))
                                <img src="{{ asset('storage/'.$comp->logo) }}" alt="profile-img" class="img-fluid" width="128" height="128">
                            @else
                                <img src="{{ asset('images/profile-img.svg') }}" alt="profile-img" class="img-fluid" width="128" height="128">
                            @endif
                        </div>
                        <div class="col-lg-9 details">
                            <span class="title text-theme-primary fw-bold">{{ $comp->name }}</span>
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

                    <h4 class="fs-18 fw-600 pb-lg-4 pb-3">About Company</h4>
                    <p class="fs-14 text-secondary pb-3">{!! $comp->description !!}</p>

                    @if($comp->whatWeDo != null)
                    <h4 class="fs-18 fw-600 pb-lg-4 pb-3">What We Do</h4>
                    <p class="fs-14 text-secondary pb-3">{!! $comp->whatWeDo !!}</p>
                    @endif

                    @if($comp->mission != null)
                    <h4 class="fs-18 fw-600 pb-lg-4 pb-3">Mission & Vision</h4>
                    <p class="fs-14 text-secondary">{!! $comp->mission !!}</p>
                    @endif

                    <h4 class="fs-18 fw-600 pb-lg-4 pb-3">Services We Provide</h4>

                    <div class="row row-cols-1 row-cols-lg-3 services">
                        @foreach ($comp->features as $skill)
                        <div class="col">
                            <div class="card shadow">
                                <div class="card-body ps-lg-5 py-4 ">
                                    {{ $skill->name }}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <ul class="pt-4 fs-18 ">
                        @if($comp->website != null)
                        <li class="row">
                            <div class="col-lg-4">
                                <p class="fw-600">Website</p>
                            </div>
                            <div class="col-lg-8">
                                <a href="#" class="text-theme-primary">{{ $comp->website }}</a>
                            </div>
                        </li>
                        @endif
                        @if($comp->industry != null)
                        <li class="row">
                            <div class="col-lg-4">
                                <p class=" fw-600">Industries</p>
                            </div>
                            <div class="col-lg-8">
                                <span>{{ $comp->industry }}</span>
                            </div>
                        </li>
                        @endif
                        @if($comp->cSizeFrom != null)
                        <li class="row">
                            <div class="col-lg-4">
                                <p class=" fw-600">Company size</p>
                            </div>
                            <div class="col-lg-8">
                                <span>{{ $comp->cSizeFrom }} - {{ $comp->cSizeTo }}</span>
                            </div>
                        </li>
                        @endif
                        @if($comp->headQuarter != null)
                        <li class="row">
                            <div class="col-lg-4">
                                <p class=" fw-600">Headquarters</p>
                            </div>
                            <div class="col-lg-8">
                                <span>{{ $comp->headQuarter }}</span>
                            </div>
                        </li>
                        @endif
                        @if($comp->type != null)
                        <li class="row">
                            <div class="col-lg-4">
                                <p class=" fw-600">Type</p>
                            </div>
                            <div class="col-lg-8">
                                <span>{{ $comp->type }}</span>
                            </div>
                        </li>
                        @endif
                        @if($comp->founded != null)
                        <li class="row">
                            <div class="col-lg-4">
                                <p class=" fw-600">Founded</p>
                            </div>
                            <div class="col-lg-8">
                                <span>{{ $comp->founded }}</span>
                            </div>
                        </li>
                        @endif
                        @if($comp->specialties != null)
                        <li class="row">
                            <div class="col-lg-4">
                                <p class=" fw-600">Specialties</p>
                            </div>
                            <div class="col-lg-8">
                                <p class="text-grey">{!! $comp->specialties !!}</p>
                            </div>
                        </li>
                        @endif
                    </ul>

                    @if($comp->linkedIn != null || $comp->twitter != null || $comp->facebook != null)
                    <ul class="social-share py-5 d-lg-flex align-items-center">
                        <span class="fs-18 fw-600 pe-3">Social</span>
                        @if($comp->linkedIn != null)
                        <li>
                            <a href="{{ $comp->linkedIn }}" target="_blank" class="lnkd"> <img src="{{ asset('images/social-linkedin.svg') }}" alt="social-linkedin" class="img-fluid"> linkedin</a>
                        </li>
                        @endif
                        @if($comp->twitter != null)
                        <li>
                            <a href="{{ $comp->twitter }}" target="_blank" class="twt"><img src="{{ asset('images/socical-twitter.svg') }}" alt="socical-twitter" class="img-fluid"> Twitter</a>
                        </li>
                        @endif
                        @if($comp->facebook != null)
                        <li>
                            <a href="{{ $comp->facebook }}" target="_blank" class="fb"><img src="{{ asset('images/social-facebook.svg') }}" alt="social-facebook" class="img-fluid"> Facebook</a>
                        </li>
                        @endif
                    </ul>
                    @endif
                </div>
                <div class="col-lg-4">
                    <button class="btn default-btn w-100 mb-3">Follow</button>

                    <div class="search-area mb-3 p-4 mb-3">
                        <h2 class="fs-5 text-dark fw-bold pb-3">Companies In Similar Industries</h2>
                        <ul>
                            @foreach ($data['similar'] as $row)
                                @if($row->com_id != $comp->id)
                                    <li class="d-flex justify-content-between align-items-center pb-4">
                                        {{-- <img src="{{ asset('images/bag.svg') }}" alt="bag" class="img-fluid"> --}}
                                        @if(isset($row->company->logo))
                                            <img src="{{ asset('storage/'.$row->company->logo) }}" alt="profile-img" class="img-fluid" width="128" height="128">
                                        @else
                                            <img src="{{ asset('images/profile-img.svg') }}" alt="profile-img" class="img-fluid" width="128" height="128">
                                        @endif
                                        <div class="text-center">
                                            <p class="mb-0 fw-bold"> {{ $row->company->name }}</p>
                                            <p class=" mb-0 text-theme-primary fs-14 "> {{ $row->company->industry }}</p>
                                        </div>
                                        <button class="btn default-btn ">Follow</button>
                                    </li>
                                @endif
                            @endforeach

                            <li class="d-flex justify-content-between align-items-center">
                                <a href="#" class="fs-6 text-grey">Show more similar companies <img src="{{ asset('images/down-arrow.svg') }}" class="img-fluid" alt="down-arrow"></a>
                            </li>
                        </ul>
                    </div>

                    {{-- <div class="search-area mb-3 p-4 mb-3">
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
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

</main>

@endsection
