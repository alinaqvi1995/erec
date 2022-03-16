@extends('layouts.app')

@section('content')

<main>

    <section class="banner bg-img-none pt-lg-5 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="{{ asset('imgs/service-banner-1.png') }}" class="w-100" alt="">
                </div>
                <div class="col-md-7">
                    <div class="banner-content">
                        <span class="text-captialize">About Us</span>
                        <h1 class="fs-48">Our Philosophy </h1>
                        <p class="fs-14 text-dark">
                            We believe in human connection, natural selection, developing and delivering quality experience in less time at a fraction of the price.
                        </p>
                        <p class="fs-14 text-dark">
                            E-REC is about fusing technology with the latest recruitment knowledge to help applicants, recruiters, and Employers engage with each other with ease.
                        </p>

                        <h2 class="fs-48 fw-bold">
                            Who We Are
                        </h2>
                        <p class="fs-14 text-dark">
                            E-REC is an online Engagement center created for every day people who are looking for employment that suits their skill set, for recruiters who need new employees within minutes instead of days, and for the Employers who are looking for the next Super
                            Star to join your Business. We provide REAL TIME ENGAGEMENT for all our users, to connect, find, link, recruit, apply, approve, communicate, analyse, and report without the headache of hours and hours of administration.
                            We help you make more money in less time. </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="second-banner">
        <div class="container">
            <div class="row row-cols-1 justify-content-center about align-items-center">
                <div class="col col-lg-5"><img src="{{ asset('imgs/about-img.png') }}" alt="author" class="w-100 authors"></div>
                <div class="col col-lg-1"></div>
                <div class="col col-lg-5">
                    <div class="card ">
                        <div class="card-body p-4">
                            <span>Founder</span>
                            <h3 class="fs-48 fw-bold position-relative">Michael Massoud</h3>
                            <p class="fs-5 text-dark fw-normal mb-0 pt-3">| Chief Executive Office & Chief Information Officer</p>
                            <p class="fs-14 ">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                sanctus est
                            </p>
                            <p class="fs-14">
                                Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita
                                kasd gubergren, no sea takimata sanctus est Lorem ipsum diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus es.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="images-icons">
                    <img src="{{ asset('imgs/Polygon.svg') }}" alt="Polygon" class="polygon position-absolute">
                    <img src="{{ asset('imgs/turn-right-arrow.svg') }}" alt="arrow" class="turn-right-arrow position-absolute">
                    <img src="{{ asset('imgs/dots-1.svg') }}" alt="dots" class="dots1 position-absolute">
                    <img src="{{ asset('imgs/dots-2.svg') }}" alt="dots" class="dots2 position-absolute">
                    <img src="{{ asset('imgs/system.svg') }}" alt="dots" class="system position-absolute">
                    <span class="position-absolute founder">The Founder</span>
                    <span class="position-absolute boss">The Boss</span>
                    <span class="position-absolute leader">The Leader</span>

                </div>
            </div>
        </div>
    </section>

    <section class="boxes py-5 boxed">
        <div class="container">
            <div class="row row-cols-lg-3 row-cols-1 justify-content-center">
                <div class="col-lg-12">
                    <p class="fs-48 text-center fw-bold">The Pioneers</p>
                </div>
                <div class="col">
                    <div class="box text-center pt-5 pb-3">
                        <img src="{{ asset('imgs/pioneer-img.png') }}" alt="pioneer-img" class="">
                        <p class="mb-3 fw-600 ">FIONA CRANE PENNY</p>
                        <p class="fs-14">
                            Projects & Operations <br> Director
                        </p>
                        <p class="pt-lg-5 pt-3">
                            <a href="#" target="_blank">
                                <img src="{{ asset('imgs/linkedin-simple.svg') }}" alt="linkedin-simple">
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="box text-center pt-5 pb-3">
                        <img src="{{ asset('imgs/pioneer-img.png') }}" alt="pioneer-img" class="">
                        <p class="mb-3 fw-600 ">FIONA CRANE PENNY</p>
                        <p class="fs-14">
                            Projects & Operations <br> Director
                        </p>
                        <p class="pt-lg-5 pt-3">
                            <a href="#" target="_blank">
                                <img src="{{ asset('imgs/linkedin-simple.svg') }}" alt="linkedin-simple">
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="box text-center pt-5 pb-3">
                        <img src="{{ asset('imgs/pioneer-img.png') }}" alt="pioneer-img" class="">
                        <p class="mb-3 fw-600 ">FIONA CRANE PENNY</p>
                        <p class="fs-14">
                            Projects & Operations <br> Director
                        </p>
                        <p class="pt-lg-5 pt-3">
                            <a href="#" target="_blank">
                                <img src="{{ asset('imgs/linkedin-simple.svg') }}" alt="linkedin-simple">
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <hr class="custom-hr">
                </div>
            </div>
        </div>
    </section>

    <section class="py-lg-5 py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('imgs/values.png') }}" class="img-fluid" alt="values">
                </div>
                <div class="col-lg-6">
                    <h5 class="fs-48 fw-bold">Our Core Values</h5>
                    <p class="fs-14 mb-2">
                        "We believe in real change, because that is where we truly make a difference in our magnificent world."
                    </p>

                    <span class="fs-24 fw-bold">
                            INTEGRAL
                    </span>
                    <p class="fs-14">
                        We pride ourselves in the quality of honesty we operate with on a day to day basis. We believe in having strong moral principles and lead our Business on solid foundation of truth and openness.
                    </p>


                    <span class="fs-24 fw-bold">
                            ETHICAL
                    </span>
                    <p class="fs-14">
                        We are a technology company which means we operate in one of the largest deregulated ever evolving industries in the world. "Just because you can do it, doesn't mean you should". We operate on the ethical grounds where technology meets 'the right decision'
                    </p>


                    <span class="fs-24 fw-bold">
                            ENGAGING
                    </span>
                    <p class="fs-14">
                        Our leadership is build on engagement, happiness, warmth, nature, and humanity. Our community love to engage with us because "having fun" is one of our only rigid rules in our company. When you're happy, we are happy. </p>



                    <span class="fs-24 fw-bold">
                            TRANSPARENT
                    </span>
                    <p class="fs-14">
                        Transparency is our Core Belief because we display openness, honesty, and straightforwardness to our customers, clients, staff, and community. We believe in leading with an egalitarian mindset.
                </div>
            </div>
        </div>
    </section>


    <section class="daily-progress">
        <div class="container">
            <div class="row py-5">
                <div class="col-12 text-center">
                    <h2>Daily Progress</h2>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-4 g-0 bg-custom">
                <div class="col=">
                    <div class="progress-box text-center">
                        <span>Registering</span>
                        <h2>2134</h2>
                        <p>DAILY</p>
                    </div>
                </div>
                <div class="col=">
                    <div class="progress-box text-center">
                        <span>Jobs</span>
                        <h2>21547</h2>
                        <p>ADVERTISED</p>
                    </div>
                </div>
                <div class="col=">
                    <div class="progress-box text-center">
                        <span>Number OF</span>
                        <h2>21346</h2>
                        <p>APPLICANTS</p>
                    </div>
                </div>
                <div class="col=">
                    <div class="progress-box text-center">
                        <span>Number OF</span>
                        <h2>42</h2>
                        <p>COMPANIES</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="blue-box"></div>
    </section>

</main>

@endsection
