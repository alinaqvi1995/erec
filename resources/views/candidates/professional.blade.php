@extends('layouts.app')

@section('content')
    <main>
        <section>
            <div class="container">
                <div class="row justify-content-center align-items-center py-lg-5 py-3">
                    <div class="col">
                        <h1 class="mb-0 fs-48 text-center fw-bold text-uppercase mt-5 pt-5">Candidate Details</h1>
                        {{-- @include('layouts.includes.messages') --}}
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active"></li>
                            <li class="active"></li>
                            <li></li>
                        </ul>
                        @foreach ($month_exp as $key => $po)
                            <form id="msform" action="{{ route('store.candidateProfession') }}" method="POST">
                                @csrf
                                <input type="hidden" name="pro_id" value="{{ $pro_id[$key] }}">
                                <fieldset id="first-sec" class="mb-5">
                                    @if ($key == 0)
                                        <div class="row row-cols-1">
                                            <div class="col d-flex justify-content-between align-items-center">
                                                <h2 class="fs-4 text-theme-primary text-uppercase fw-bold pb-3">Professional
                                                    Details</h2>
                                                {{-- <a href="javascript:void(0)" id="add-sec"><img src="{{ asset('images/plus-circle.svg') }}" alt="plus-circle" class="img-fluid"></a> --}}
                                            </div>
                                        </div>
                                    @endif
                                    @if ($key == count($month_exp) - 1)
                                        <div class="row row-cols-1">
                                            <div class="col d-flex justify-content-between align-items-center">
                                                <h2 class="fs-4 text-theme-primary text-uppercase fw-bold pb-3"></h2>
                                                <a href="javascript:void(0)" id="add-sec"><img
                                                        src="{{ asset('images/plus-circle.svg') }}" alt="plus-circle"
                                                        class="img-fluid"></a>
                                            </div>
                                        </div>
                                    @endif
                                    {{-- <div class="row row-cols-1">
                                <div class="col d-flex justify-content-between align-items-center">
                                    <h2 class="fs-4 text-theme-primary text-uppercase fw-bold pb-3">Professional Details</h2>
                                    <a href="javascript:void(0)" id="add-sec"><img src="{{ asset('images/plus-circle.svg') }}" alt="plus-circle" class="img-fluid"></a>
                                </div>
                            </div> --}}
                                    <div class="row row-cols-1" id="">
                                        <div class="col">
                                            <label for="" class="form-label fs-14 text-theme-primary fw-bold">Total Work
                                                Experience</label>
                                            <div class="row row-cols-6">
                                                <div class="col d-flex align-items-center">
                                                    <input type="text" class="form-control fs-14 h-50px w-100"
                                                        placeholder="Eg 2" value="{{ $year_exp[$key] }}" id=""
                                                        name="year_exp"> <span class="fs-6 ps-2">Year</span>
                                                </div>
                                                <div class="col d-flex align-items-center">
                                                    <input type="text" class="form-control fs-14 h-50px w-100"
                                                        placeholder="Eg 2" value="{{ $month_exp[$key] }}" id=""
                                                        name="month_exp"> <span class="fs-6 ps-2">Month</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for=""
                                                class="form-label fs-14 text-theme-primary fw-bold">Designation</label>
                                            <input type="text" class="form-control fs-14 h-50px" id=""
                                                value="{{ $designation[$key] }}" name="designation">
                                        </div>
                                        <div class="col">
                                            <label for="" class="form-label fs-14 text-theme-primary fw-bold">Company
                                                Name</label>
                                            <input type="text" class="form-control fs-14 h-50px" id=""
                                                value="{{ $company_name[$key] }}" name="company_name">
                                        </div>

                                        <div class="col">
                                            <label for="" class="form-label fs-14 text-theme-primary fw-bold">Company
                                                Location</label>
                                            <select id="role" class="form-select fs-14  h-50px" name="comp_loc">
                                                <option selected disabled>Select Country</option>
                                                <option value="USA" @if ($comp_loc[$key] == 'USA') selected @endif>USA
                                                </option>
                                                <option value="AUS" @if ($comp_loc[$key] == 'AUS') selected @endif>AUS
                                                </option>
                                                <option value="UK" @if ($comp_loc[$key] == 'UK') selected @endif>UK
                                                </option>
                                            </select>
                                        </div>

                                        <div class="col">
                                            <label for="" class="form-label fs-14 text-theme-primary fw-bold">Monthly
                                                Salary</label>
                                            <div class="row row-cols-4">
                                                <div class="col">
                                                    <select id="role" class="form-select fs-14  h-50px" name="currency">
                                                        <option selected disabled>Select Currency</option>
                                                        <option value="CAD"
                                                            @if ($currency[$key] == 'CAD') selected @endif>CAD</option>
                                                        <option value="AUD"
                                                            @if ($currency[$key] == 'AUD') selected @endif>AUD</option>
                                                        <option value="USD"
                                                            @if ($currency[$key] == 'USD') selected @endif>USD</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <input type="text" class="form-control fs-14 h-50px"
                                                        value="{{ $salary[$key] }}" placeholder="Enter salary" id=""
                                                        name="salary">
                                                </div>
                                            </div>
                                            <div class="row justify-content-center pt-5">
                                                <div class="col-lg-5 text-center">
                                                    <button class="w-50 next action-button default-btn">Update</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </fieldset>
                                {{-- <div class="row justify-content-center pt-5">
                            <div class="col-lg-5 text-center">
                                <button class="w-25 next action-button default-btn">Update</button>
                            </div>
                        </div> --}}
                            </form>
                        @endforeach
                        <form id="msform" action="{{ route('store.candidateProfession') }}" method="POST">
                            @csrf
                            <!-- fieldsets -->
                            <fieldset id="first-sec" class="mb-5">
                                <div class="row row-cols-1">
                                    <div class="col d-flex justify-content-between align-items-center">
                                        <h2 class="fs-4 text-theme-primary text-uppercase fw-bold pb-3">Professional Details
                                        </h2>
                                        <a href="javascript:void(0)" id="add-sec"><img
                                                src="{{ asset('images/plus-circle.svg') }}" alt="plus-circle"
                                                class="img-fluid"></a>
                                    </div>
                                </div>
                                <div class="row row-cols-1" id="">
                                    <div class="col">
                                        <label for="" class="form-label fs-14 text-theme-primary fw-bold">Total Work
                                            Experience</label>
                                        <div class="row row-cols-6">
                                            <div class="col d-flex align-items-center">
                                                <input type="text" class="form-control fs-14 h-50px w-100"
                                                    placeholder="Eg 2" id="" name="year_exp[]"> <span
                                                    class="fs-6 ps-2">Year</span>
                                            </div>
                                            <div class="col d-flex align-items-center">
                                                <input type="text" class="form-control fs-14 h-50px w-100"
                                                    placeholder="Eg 2" id="" name="month_exp[]"> <span
                                                    class="fs-6 ps-2">Month</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for=""
                                            class="form-label fs-14 text-theme-primary fw-bold">Designation</label>
                                        <input type="text" class="form-control fs-14 h-50px" id="" name="designation[]">
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label fs-14 text-theme-primary fw-bold">Company
                                            Name</label>
                                        <input type="text" class="form-control fs-14 h-50px" id="" name="company_name[]">
                                    </div>

                                    <div class="col">
                                        <label for="" class="form-label fs-14 text-theme-primary fw-bold">Company
                                            Location</label>
                                        <select id="role" class="form-select fs-14  h-50px" name="comp_loc[]">
                                            <option selected value="null" disabled>Select Country</option>
                                            <option value="USA">USA</option>
                                            <option value="AUS">AUS</option>
                                            <option value="UK">UK</option>
                                        </select>
                                    </div>

                                    <div class="col">
                                        <label for="" class="form-label fs-14 text-theme-primary fw-bold">Monthly
                                            Salary</label>
                                        <div class="row row-cols-4">
                                            <div class="col">
                                                <select id="role" class="form-select fs-14  h-50px" name="currency[]">
                                                    <option selected value="null" disabled>Select Currency</option>
                                                    <option value="CAD">CAD</option>
                                                    <option value="AUD">AUD</option>
                                                    <option value="USD">USD</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control fs-14 h-50px"
                                                    placeholder="Enter salary" id="" name="salary[]">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center pt-5">
                                        <div class="col-lg-5 text-center">
                                            <button class="next action-button default-btn"> Create <span
                                                    class="ps-2">></span></button>
                                            <br />
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                        <form id="msform" action="{{ route('store.candidateSkill') }}" method="POST">
                            @csrf
                            <fieldset>
                                <div class="row row-cols-1">
                                    <div class="col">
                                        <h2 class="fs-4 text-theme-primary text-uppercase fw-bold pb-3">Key Skills</h2>
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label fs-14 text-theme-primary fw-bold">Talk about your
                                            professional strengths, skills you will apply to work</label>
                                        <select id="role" class="select2-multiple form-control fs-14 h-50px" name="skills[]"
                                            multiple>
                                            <option disabled>Select Skills</option>
                                            @foreach ($skill as $row)
                                                <option value="{{ $row->id }}"
                                                    @if ($candSkills != null) @foreach ($candSkills as $ca)
                                                            @if ($row->id == $ca->skill_id)
                                                                Selected @endif
                                                    @endforeach
                                            @endif>{{ $row->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row justify-content-center pt-5">
                                    <div class="col-lg-5 text-center">
                                        <button class="next action-button default-btn"> Next <span
                                                class="ps-2">></span></button>
                                        <br />
                                        <br />
                                        <a href="{{ route('index') }}" class="fs-6 fw-normal">I will fill this later</a>
                                    </div>
                                </div>
                            </fieldset>
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
