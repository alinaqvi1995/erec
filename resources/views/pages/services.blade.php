@extends('layouts.app')

@section('content')

<main>

    <section class="banner bg-img-none pt-lg-5 pt-3">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col-md-5">
                    <img src="{{ asset('imgs/service-banner-1.png') }}" class="w-100" alt="">
                </div>
                <div class="col-md-7">
                    <div class="banner-content">
                        <span class="text-captialize">Services </span>
                        <h1 class="fs-48">Lorem ipsum dolor sit amet, consetetury </h1>
                        <p class="fs-14 text-dark">
                            We believe in human connection, natural selection, developing and delivering quality experience in less time at a fraction of the price.
                        </p>
                        <p class="fs-14 text-dark">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                            sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna liquyam erat, sed diam voluptua. At vero eos et accusam et
                            justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                        </p>
                        <a class="default-btn btn px-5 text-uppercase" href="" style="animation-play-state: running;">Search a job</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="provide py-4">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2">
                <div class="col-lg-5">
                    <div class="banner-content">
                        <span class="text-captialize">Services We Provide </span>
                        <h1 class="fs-48">Lorem ipsum dolor sit amet, consetetur </h1>
                        <span class="fw-bold fs-14 text-dark">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero</span>
                        <p class="fs-14 text-dark pt-3">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea </p>
                        <ul class="fs-14 pb-lg-5 pb-3">
                            <li>
                                Lorem ipsum dolor sit
                            </li>
                            <li>
                                Lorem ipsum dolor sit
                            </li>
                            <li>
                                Lorem ipsum dolor sit
                            </li>
                            <li>
                                Lorem ipsum dolor sit
                            </li>
                            <li>
                                Lorem ipsum dolor sit
                            </li>
                        </ul>
                        <a class="default-btn btn px-5 text-uppercase" href="" style="animation-play-state: running;">Search a job</a>
                    </div>
                </div>
                <div class="offset-1 col-lg-6">
                    <div class="row row-cols-1 row-cols-lg-2 g-0">
                        <div class="col">
                            <div class="card color-box">
                                <div class="card-body px-4 py-5">
                                    <p class="mb-0 pb-2"><img src="{{ asset('imgs/headhunter.svg') }}" alt="headhunter" class=""></p>
                                    <span class="fs-5 fw-bold text-white">Lorem ipsum </span>
                                    <p class="mb-0 fs-14 text-white pt-2">
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card white-box">
                                <div class="card-body px-4 py-5">
                                    <p class="mb-0 pb-2"> <img src="{{ asset('imgs/suitcase.svg') }}" alt="suitcase" class=""></p>
                                    <span class="fs-5 fw-bold">Lorem ipsum </span>
                                    <p class="mb-0 fs-14 pt-2">
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card white-box radius-10-0-10-10">
                                <div class="card-body px-4 py-5">
                                    <p class="mb-0 pb-2"> <img src="{{ asset('imgs/clock.svg') }}" alt="clock" class=""></p>
                                    <span class="fs-5 fw-bold">Lorem ipsum </span>
                                    <p class="mb-0 fs-14 pt-2">
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card color-box radius-0px-10-10-10px">
                                <div class="card-body px-4 py-5">
                                    <p class="mb-0 pb-2"><img src="{{ asset('imgs/profile.svg') }}" alt="profile" class=""></p>
                                    <span class="fs-5 fw-bold text-white">Lorem ipsum </span>
                                    <p class="mb-0 fs-14 text-white pt-2">
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 align-items-center">
                <div class="col">
                    <img src="{{ asset('imgs/last-service.png') }}" alt="last-service" class="w-100">
                </div>
                <div class="col">
                    <span class="fs-48 fw-bold">Lorem Ipsum</span>
                    <p class="fs-14">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                        sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
                        duo dolores et ea rebum. Stet
                    </p>

                    <span class="fs-48 fw-bold">Lorem Ipsum</span>
                    <p class="fs-14">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                        sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
                        duo dolores et ea rebum. Stet
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="daily-progress">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card quote">
                        <div class="card-body">
                            <p class="fs-40 fw-normal">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                            </p>
                            <span class="fs-12 text-theme-primary fw-normal">
                                THOM YORKE, MUSICIAN @ RADIOHEAD
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blue-box"></div>
    </section>

</main>

@endsection
