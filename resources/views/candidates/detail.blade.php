@extends('layouts.app')

@section('content')
    <main>
        <section>
            <div class="container">
                <div class="row justify-content-center align-items-center py-lg-5 py-3">
                    <div class="col">
                        <h1 class="mb-0 fs-48 text-center fw-bold text-uppercase mt-5 pt-5">CANDIDATE DETAILS
                        </h1>
                        {{-- @include('layouts.includes.messages') --}}
                        <form id="msform" method="POST" action="{{ route('store.candidate') }}">
                            @csrf
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active"></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <!-- fieldsets -->
                            <fieldset>
                                <div class="row row-cols-1">
                                    <div class="col">
                                        <h2 class="fs-4 text-theme-primary text-uppercase fw-bold pb-3">Personal Details</h2>
                                    </div>
                                    <div class="col">
                                        <label for="first_name" class="form-label fs-14 text-theme-primary fw-bold">Full
                                            Name</label>
                                        <input type="text" class="form-control fs-14 h-50px" name="first_name"
                                            value="{{ $first_name }}" required>
                                    </div>
                                    <div class="col">
                                        <label for="last_name" class="form-label fs-14 text-theme-primary fw-bold">Last
                                            Name</label>
                                        <input type="text" class="form-control fs-14 h-50px" name="last_name"
                                            value="{{ $last_name }}" required>
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label fs-14 text-theme-primary fw-bold">Gender</label>
                                        <br>
                                        <input type="radio" class="btn-check" name="gender" id="male" value="male"
                                            autocomplete="off" checked>
                                        <label class="btn btn-outline-primary fs-14" for="male"
                                            @if ($gender == 'male') selected @endif>Male</label>

                                        <input type="radio" class="btn-check" name="gender" id="female" value="female"
                                            autocomplete="off">
                                        <label class="btn btn-outline-primary fs-14" for="female"
                                            @if ($gender == 'female') selected @endif>Female</label>
                                    </div>
                                    <div class="col">
                                        <label for=""
                                            class="form-label fs-14 text-theme-primary fw-bold">Nationality</label>
                                        <select name="nationality" id="role" class="form-select fs-14  h-50px" required>
                                            <option selected>Choose</option>
                                            <option value="US" @if ($nationality == 'US') selected @endif>US</option>
                                            <option value="AUS" @if ($nationality == 'AUS') selected @endif>AUS
                                            </option>
                                            <option value="UK" @if ($nationality == 'UK') selected @endif>UK</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label fs-14 text-theme-primary fw-bold">Street
                                            Address</label>
                                        <input type="text" class="form-control fs-14 h-50px" id="" name="address"
                                            value="{{ $address }}" required>
                                    </div>

                                    <div class="col">
                                        <label for="" class="form-label fs-14 text-theme-primary fw-bold">Email
                                            Address</label>
                                        <input type="email" class="form-control fs-14 h-50px" name="email"
                                            value="{{ $email }}" required>
                                    </div>

                                    <div class="col">
                                        <label for="" class="form-label fs-14 text-theme-primary fw-bold">Phone Number
                                        </label>
                                        <div class="row">
                                            <div class="col-2">
                                                <input type="tel" class="form-control fs-14 h-50px w-60" maxlength="3"
                                                    value="{{ $country_code }}" name="country_code">
                                            </div>
                                            <div class="col-5">
                                                <input type="tel" class="form-control fs-14 h-50px" name="number"
                                                    value="{{ $number }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-check py-2 ">
                                            <input class="form-check-input rounded-0" name="terms" value="1" type="checkbox"
                                                id="gridCheck" @if ($terms == 1) checked @endif>
                                            <label class="form-check-label text-dark fs-14" for="gridCheck">
                                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut labore et dolore magna
                                            </label>
                                            <p class="fs-14 text-grey">
                                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                                voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
                                                clita kasd gubergren, no sea takimata
                                                sanctus est. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                                                sed diam voluptua. At vero eos et accusam et justo duo
                                                dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="row justify-content-center pt-5">
                                <div class="col-lg-5 text-center">
                                    <button class="next action-button default-btn"> Next <span
                                            class="ps-2">></span></button>
                                    <br />
                                    <br />
                                    <a href="{{ route('index') }}" class="fs-6 fw-normal">I will fill this later</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            var numb = 1;
            do {
                ClassicEditor
                    .create(document.querySelector('#body' + numb), {
                        removePlugins: ['insertImage', 'insertMedia', 'Link', 'blockQuote'],
                        toolbar: ['Heading', 'bold', 'italic', 'bulletedList', 'numberedList', ]
                    })
                    .catch(error => {
                        console.error(error);
                    })
                numb++;
            }
            while (numb < 6);
        });
    </script>
@endsection
