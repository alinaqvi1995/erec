@extends('layouts.app')
@section('content')
    <main>
        <section>
            <div class="container">
                <div class="row justify-content-center align-items-center py-lg-5 py-3">
                    <div class="col">
                        <h1 class="mb-0 fs-48 text-center fw-bold text-uppercase mt-5 pt-5">Candidate Details</h1>
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active"></li>
                            <li class="active"></li>
                            <li class="active"></li>
                        </ul>
                        <!-- fieldsets -->
                        <form id="msform" method="post" action="{{ route('store.candidateEducation') }}"
                            name="change_avatar" enctype="multipart/form-data">
                            @csrf
                            <fieldset class="mb-5">
                                {{-- <input type="hidden" class="form-control fs-14 h-50px" name="comp_id" value="$comp->id"> --}}
                                <div class="row align-items-center row-cols-lg-2">
                                    <div class="col-lg-2">
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                                <input type='file' id="imageUpload" onchange="form_submit()" name="avatar"
                                                    accept=".png, .jpg, .jpeg" />
                                                <label for="imageUpload"></label>
                                            </div>
                                            <div class="avatar-preview">
                                                @if ($avatar != null)
                                                    <div id="imagePreview"
                                                        style="background-image: url({{ asset('storage/' . $avatar) }});">
                                                    </div>
                                                @else
                                                    <div id="imagePreview"
                                                        style="background-image: url({{ asset('images/profile-img.svg') }});">
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <h2 class="fs-4 text-theme-primary text-uppercase fw-bold">Upload Company Logo</h2>
                                        <small class="fs-14">Supported file format png, jpg, jpeg, gif | upto 3
                                            MB</small>
                                    </div>
                                </div>
                    </div>
                    </fieldset>
                    </form>
                    {{-- <form id="msform" method="POST" action="{{ route('store.candidateEducation') }}" name="change_avatar" enctype="multipart/form-data">
                            @csrf
                            </fieldset>
                            <fieldset class="mb-5">
                                <div class="row row-cols-1">
                                    <div class="col">
                                        <h2 class="fs-4 text-theme-primary text-uppercase fw-bold pb-3">Headline</h2>
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label fs-14 text-theme-primary fw-bold">
                                            Give a one line description to your profile
                                        </label>
                                        <input type="text" class="form-control fs-14 h-50px" id="">
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="mb-5">
                                <div class="row row-cols-1">
                                    <div class="col d-flex justify-content-between align-items-center">
                                        <h2 class="fs-4 text-theme-primary text-uppercase fw-bold pb-3">Education Details</h2>
                                        <a href="javascript:void(0)" id="add-sec"><img src="{{ asset('images/plus-circle.svg') }}" alt="plus-circle" class="img-fluid"></a>
                                    </div>
                                </div>
                                <div class="row row-cols-1">

                                    <div class="col">
                                        <label for="" class="form-label fs-14 text-theme-primary fw-bold">Add value to your profile by talking your educational qualification</label>
                                        <select id="role" class="form-select fs-14  h-50px">
                                            <option selected>Choose</option>
                                            <option>...</option>
                                          </select> </div>
                                    <div class="col">
                                        <label for="" class="form-label fs-14 text-theme-primary fw-bold">Course</label>
                                        <select id="role" class="form-select fs-14  h-50px">
                                            <option selected>Choose</option>
                                            <option>...</option>
                                          </select> </div>

                                    <div class="col">
                                        <label for="" class="form-label fs-14 text-theme-primary fw-bold">University / Institute</label>
                                        <input type="text" class="form-control fs-14 h-50px" id="">
                                    </div>

                                    <div class="col">
                                        <label for="" class="form-label fs-14 text-theme-primary fw-bold">Institute Location</label>
                                        <input type="text" class="form-control fs-14 h-50px" id="">
                                    </div>

                                    <div class="col">
                                        <label for="" class="form-label fs-14 text-theme-primary fw-bold">Passing Year </label>

                                        <div class="row">
                                            <div class="col-2">
                                                <input type="tel" class="form-control fs-14 h-50px" placeholder="Eg, 2015" max="4" id="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form> --}}

                    @foreach ($passing_year as $key => $ed)
                        <form id="msform" method="POST" action="{{ route('store.candidateEducation') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="edu_id" value="{{ $edu_id[$key] }}">
                            <fieldset class="mb-5">
                                <div class="row row-cols-1">
                                    <div class="col d-flex justify-content-between align-items-center">
                                        <h2 class="fs-4 text-theme-primary text-uppercase fw-bold pb-3">Education Details
                                        </h2>
                                        <a href="javascript:void(0)" id="add-sec"><img
                                                src="{{ asset('images/plus-circle.svg') }}" alt="plus-circle"
                                                class="img-fluid"></a>
                                    </div>
                                </div>
                                <div class="row row-cols-1">
                                    <div class="col">
                                        <label for="" class="form-label fs-14 text-theme-primary fw-bold">Add value to your
                                            profile by talking your educational qualification</label>
                                        <select id="role" class="form-select fs-14  h-50px" name="education">
                                            <option selected>Choose</option>
                                            <option value="PHD" @if ($education[$key] == 'PHD') selected @endif>PHD
                                            </option>
                                            <option value="Masters" @if ($education[$key] == 'Masters') selected @endif>
                                                Masters</option>
                                            <option value="Bachelors" @if ($education[$key] == 'Bachelors') selected @endif>
                                                Bachelors</option>
                                            <option value="Undergrad" @if ($education[$key] == 'Undergrad') selected @endif>
                                                Undergrad</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label fs-14 text-theme-primary fw-bold">Course</label>
                                        <select id="role" class="form-select fs-14  h-50px" name="course">
                                            <option selected>Choose</option>
                                            <option value="Computer Science"
                                                @if ($course[$key] == 'Computer Science') selected @endif>Computer Science</option>
                                            <option value="Biology" @if ($course[$key] == 'Biology') selected @endif>
                                                Biology</option>
                                            <option value="Mathematics" @if ($course[$key] == 'Mathematics') selected @endif>
                                                Mathematics</option>
                                        </select>
                                    </div>

                                    <div class="col">
                                        <label for="" class="form-label fs-14 text-theme-primary fw-bold">University /
                                            Institute</label>
                                        <input type="text" class="form-control fs-14 h-50px" id=""
                                            value="{{ $institute[$key] }}" name="institute">
                                    </div>

                                    <div class="col">
                                        <label for="" class="form-label fs-14 text-theme-primary fw-bold">Institute
                                            Location</label>
                                        <input type="text" class="form-control fs-14 h-50px" id=""
                                            value="{{ $institute_loc[$key] }}" name="institute_loc">
                                    </div>

                                    <div class="col">
                                        <label for="" class="form-label fs-14 text-theme-primary fw-bold">Passing Year
                                        </label>

                                        <div class="row">
                                            <div class="col-2">
                                                <input type="tel" name="passing_year" value="{{ $ed }}"
                                                    class="form-control fs-14 h-50px" placeholder="Eg, 2015" max="4" id="">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row justify-content-center pt-5">
                                    <div class="col-lg-5 text-center">
                                        <button class="w-50 next action-button default-btn">Update</button>
                                    </div>
                                </div>
                                <hr />
                            </fieldset>
                        </form>
                    @endforeach


                    <form id="msform" method="POST" action="{{ route('store.candidateEducation') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <fieldset class="mb-5">
                            <div class="row row-cols-1">
                                <div class="col d-flex justify-content-between align-items-center">
                                    <h2 class="fs-4 text-theme-primary text-uppercase fw-bold pb-3">Education Details</h2>
                                    <a href="javascript:void(0)" id="add-sec"><img
                                            src="{{ asset('images/plus-circle.svg') }}" alt="plus-circle"
                                            class="img-fluid"></a>
                                </div>
                            </div>
                            <div class="row row-cols-1">

                                <div class="col">
                                    <label for="" class="form-label fs-14 text-theme-primary fw-bold">Add value to your
                                        profile by talking your educational qualification</label>
                                    <select id="role" class="form-select fs-14  h-50px" name="education[]">
                                        <option selected>Choose</option>
                                        <option value="PHD">PHD</option>
                                        <option value="Masters">Masters</option>
                                        <option value="Bachelors">Bachelors</option>
                                        <option value="Undergrad">Undergrad</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="" class="form-label fs-14 text-theme-primary fw-bold">Course</label>
                                    <select id="role" class="form-select fs-14  h-50px" name="course[]">
                                        <option selected>Choose</option>
                                        <option value="Computer Science">Computer Science</option>
                                        <option value="Biology">Biology</option>
                                        <option value="Mathematics">Mathematics</option>
                                    </select>
                                </div>

                                <div class="col">
                                    <label for="" class="form-label fs-14 text-theme-primary fw-bold">University /
                                        Institute</label>
                                    <input type="text" class="form-control fs-14 h-50px" id="" name="institute[]">
                                </div>

                                <div class="col">
                                    <label for="" class="form-label fs-14 text-theme-primary fw-bold">Institute
                                        Location</label>
                                    <input type="text" class="form-control fs-14 h-50px" id="" name="institute_loc[]">
                                </div>

                                <div class="col">
                                    <label for="" class="form-label fs-14 text-theme-primary fw-bold">Passing Year </label>

                                    <div class="row">
                                        <div class="col-2">
                                            <input type="tel" name="passing_year[]" class="form-control fs-14 h-50px"
                                                placeholder="Eg, 2015" max="4" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center pt-5">
                                    <div class="col-lg-5 text-center">
                                        <button class="w-50 next action-button default-btn">Create</button>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    <form id="msform" class="personalDetail" method="POST"
                        action="{{ route('store.candidateEducation') }}" enctype="multipart/form-data">
                        @csrf

                        <fieldset>
                            <div class="row row-cols-1">
                                <div class="col">
                                    <h2 class="fs-4 text-theme-primary text-uppercase fw-bold pb-3">Personal Details</h2>
                                </div>
                                <div class="col">
                                    <label for="" class="form-label fs-14 text-theme-primary fw-bold">
                                        Visa Status for Current Location
                                    </label>
                                    <br>
                                    <input type="radio" class="btn-check" value="Citizen" name="visa_status"
                                        id="Citizen-Saudi" @if ($visa_status == 'Citizen') checked @endif
                                        autocomplete="off">
                                    <label class="btn btn-outline-primary fs-14" for="Citizen-Saudi">Citizen</label>

                                    <input type="radio" class="btn-check" value="Visit Visa" name="visa_status"
                                        id="Visit" @if ($visa_status == 'Visit Visa') checked @endif autocomplete="off">
                                    <label class="btn btn-outline-primary fs-14" for="Visit">Visit Visa</label>

                                    <input type="radio" class="btn-check" value="Student Visa" name="visa_status"
                                        id="Student" @if ($visa_status == 'Student Visa') checked @endif autocomplete="off">
                                    <label class="btn btn-outline-primary fs-14" for="Student">Student Visa</label>

                                    <input type="radio" class="btn-check" value="Business Visa" name="visa_status"
                                        id="Business" @if ($visa_status == 'Business Visa') checked @endif autocomplete="off">
                                    <label class="btn btn-outline-primary fs-14" for="Business">Business Visa</label>

                                    <input type="radio" class="btn-check" value="Employee Visa" name="visa_status"
                                        id="Employee" @if ($visa_status == 'Employee Visa') checked @endif autocomplete="off">
                                    <label class="btn btn-outline-primary fs-14" for="Employee">Employee Visa</label>
                                </div>

                                <div class="col">
                                    <label for="" class=" mt-3 form-label fs-14 text-theme-primary fw-bold">Date of
                                        Birth</label>

                                    <div class="row">
                                        <div class="col-2">
                                            <input type="date" name="dob" value="{{ $dob }}"
                                                class="form-control fs-14 h-50px" placeholder="Eg, 2015" max="4" id="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <label for="" class="form-label fs-14 text-theme-primary fw-bold">Languages Known (Max
                                        3)</label>
                                    <select id="role" class="form-select fs-14  h-50px mb-4" name="languages">
                                        <option selected disabled>Select language you know</option>
                                        <option value="English" @if ($languages == 'English') selected @endif>English
                                        </option>
                                        <option value="Spanish" @if ($languages == 'Spanish') selected @endif>Spanish
                                        </option>
                                        <option value="French" @if ($languages == 'French') selected @endif>French
                                        </option>
                                    </select>

                                    <a href="#" class="fs-14 bg-theme-secondary p-3 cut">English <span
                                            class="fs-5 text-theme-primary">+</span></a>
                                    <a href="#" class="fs-14 bg-theme-secondary p-3 cut">English <span
                                            class="fs-5 text-theme-primary">+</span></a>
                                </div>

                                <div class="col">
                                    <label for="" class="mt-4 form-label fs-14 text-theme-primary fw-bold">Religion</label>
                                    <select id="role" class="form-select fs-14  h-50px mb-4" name="religion">
                                        <option selected disabled>Select Religion</option>
                                        <option value="Islam" @if ($religion == 'Islam') selected @endif>Islam
                                        </option>
                                        <option value="Christian" @if ($religion == 'Christian') selected @endif>
                                            Christian</option>
                                        <option value="Hindu" @if ($religion == 'Hindu') selected @endif>Hindu
                                        </option>
                                        <option value="Other" @if ($religion == 'Other') selected @endif>Other
                                        </option>
                                    </select>
                                </div>

                                <div class="col">
                                    <label for="" class="form-label fs-14 text-theme-primary fw-bold">
                                        Marital Status
                                    </label>
                                    <br>
                                    <input type="radio" class="btn-check" name="marital_status" value="Single"
                                        @if ($marital_status == 'Single') checked @endif id="Single" autocomplete="off">
                                    <label class="btn btn-outline-primary fs-14" for="Single">Single</label>

                                    <input type="radio" class="btn-check" name="marital_status" value="Married"
                                        @if ($marital_status == 'Married') checked @endif id="Married" autocomplete="off">
                                    <label class="btn btn-outline-primary fs-14" for="Married">Married</label>

                                    <input type="radio" class="btn-check" name="marital_status" value="Divorced"
                                        @if ($marital_status == 'Divorced') checked @endif id="Divorced" autocomplete="off">
                                    <label class="btn btn-outline-primary fs-14" for="Divorced">Divorced </label>

                                    <input type="radio" class="btn-check" name="marital_status" value="Others"
                                        @if ($marital_status == 'Others') checked @endif id="other" autocomplete="on">
                                    <label class="btn btn-outline-primary fs-14" for="other">Others </label>
                                </div>

                                <div class="col">
                                    <label for="" class="mt-4 form-label fs-14 text-theme-primary fw-bold">
                                        Do you have a driving license?
                                    </label>
                                    <br>
                                    <input type="radio" class="btn-check" name="driving_license" value="1"
                                        @if ($driving_license == '1') checked @endif id="Yes" autocomplete="off">
                                    <label class="btn btn-outline-primary fs-14" for="Yes">Yes</label>

                                    <input type="radio" class="btn-check" name="driving_license" value="0"
                                        @if ($driving_license == '0') checked @endif id="no" autocomplete="off">
                                    <label class="btn btn-outline-primary fs-14" for="no">No</label>
                                </div>

                                <div class="col">
                                    <label for="" class="mt-4 form-label fs-14 text-theme-primary fw-bold">
                                        Attach Documents
                                    </label>
                                    <label for="input" id="label">
                                        <span id="span" class="fs-14 text-dark">Drag & Drop or <a href="#"
                                                class="text-theme-primary">browse</a></span>
                                        {{-- <input id="input" type="file" name="cv" required> --}}
                                        <input id="input" type="file" name="document[]" multiple>
                                    </label>
                                    <div class="col-xl-2 col-md-4 d-flex mb-5 text-center">
                                        @foreach ($candDocs as $key => $docs)
                                            <a href="{{ asset('candidateDoc/doc/' . $docs->document) }}" target="_blank">
                                                <div class="align-items-center">
                                                    <div class=" card dashboard-card bg-one">
                                                        <i class="fa fa-file" style="font-size:4.0rem;"></i>
                                                    </div>
                                                    <div class="align-items-center">
                                                        <p>Docs {{ $key + 1 }}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="mb-5 mt-3">
                            <div class="row row-cols-1">
                                <div class="col">
                                    <h2 class="fs-4 text-theme-primary text-uppercase fw-bold pb-3">Headline</h2>
                                </div>
                                <div class="col">
                                    <label for="" class="form-label fs-14 text-theme-primary fw-bold">
                                        Give a one line description to your profile
                                    </label>
                                    <input type="text" class="form-control fs-14 h-50px" value="{{ $head_line }}"
                                        name="head_line">
                                </div>
                            </div>
                        </fieldset>

                        {{-- @if ($user->avatar != null && $user->candidate != null && $user->candidateEdu != null && $user->candidatePro != null) --}}
                        <div class="row justify-content-center pt-5">
                            <div class="col-lg-6 text-center">
                                <button type="submit" class="w-50 next action-button default-btn"> Submit </button>
                                {{-- <p class="fs-14">
                                        <button class="w-25 next action-button default-btn"> Go to dashboard <span class="ps-3">></span></button>
                                    </p> --}}
                                <br />
                                <br />
                                <a href="{{ route('index') }}" class="fs-6 fw-normal">I will fill this later</a>
                            </div>
                        </div>
                        {{-- @else
                            <div class="row justify-content-center pt-5">
                                <div class="col-lg-6 text-center">
                                    <button  type="submit" class="next action-button default-btn"> Submit </button>
                                    <br/>
                                    <br/>
                                    <a href="{{ route('index') }}" class="fs-6 fw-normal">I will fill this later</a>
                                </div>
                            </div>
                            @endif --}}
                    </form>
                </div>
            </div>
            </div>
        </section>

    </main>
    <script>
        function submitForm() {
            //    var elem = document.getElementsByClassName("personalDetail");
            //    elem.forEach(element => {
            //        element.submit();
            //    });
        }
    </script>

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

        function form_submit() {
            const collection = document.getElementsByName("change_avatar");
            for (let i = 0; i < collection.length; i++) {
                collection[i].submit();
            }
        }
    </script>
@endsection
