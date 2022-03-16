@extends('layouts.app')

@section('content')

    <main>
        <section>
            <div class="container">
                <div class="row justify-content-center  py-lg-5 py-3 mt-5">
                    <div class="col-lg-12">
                        <h1 class="mb-0 fs-48 text-center fw-bold text-uppercase pb-5"> Job Detail</h1>
                    </div>
                    <div class="col-lg-8">
                        <div class="row pb-lg-5 pb-3 align-items-center">
                            <div class="col-lg-2">
                                <img src="{{ asset('imgs/job-details-ion.svg') }}" alt="bag" class="img-fluid">
                            </div>
                            <div class="col-lg-9 details">
                                <span class="title text-theme-primary fw-bold">{{ $app->post }} <img
                                        src="{{ asset('imgs/tick.svg') }}" alt="tick" class="ps-2"
                                        width="30"></span>
                                <p class="fs-14 mb-3 pt-1">
                                    {{-- <span class="px-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.85" height="14.575" viewBox="0 0 16.85 14.575">
                                <g id="Group_422" data-name="Group 422" transform="translate(-1049.969 -739.714)">
                                  <path id="Path_3143" data-name="Path 3143" d="M1058.4,750.783h7.2a1.171,1.171,0,0,1,1.181.878,1.342,1.342,0,0,1,.041.326q.005,1.206,0,2.411a1.184,1.184,0,0,1-.952,1.187q-2.882.646-5.765,1.285c-.1.022-.13.058-.128.16.007.33,0,.661,0,.991a.432.432,0,0,1-.49.489h-2.191a.432.432,0,0,1-.484-.484c0-.339,0-.678,0-1.016,0-.087-.027-.118-.11-.137q-2.859-.634-5.718-1.272a1.2,1.2,0,0,1-1.015-1.26q0-1.157,0-2.314a1.179,1.179,0,0,1,1.244-1.245Zm1.578,5.228c.058-.011.1-.017.138-.025l5.525-1.237a.321.321,0,0,0,.3-.365q0-1.181,0-2.362c0-.246-.112-.357-.361-.357h-14.358c-.259,0-.368.107-.368.363q0,1.175,0,2.35a.323.323,0,0,0,.3.372l4.761,1.067.9.2c0-.089,0-.161,0-.234a.412.412,0,0,1,.435-.431q1.15-.008,2.3,0a.41.41,0,0,1,.428.436C1059.978,755.855,1059.976,755.924,1059.976,756.011Zm-2.274.226v1.384h1.382v-1.384Z" transform="translate(0 -8.405)" fill="#333"/>
                                  <path id="Path_3144" data-name="Path 3144" d="M1059.583,779.492H1052.8a1.178,1.178,0,0,1-1.235-.935,1.407,1.407,0,0,1-.03-.291q0-2.436,0-4.872a.439.439,0,0,1,.564-.474.4.4,0,0,1,.31.34,1.265,1.265,0,0,1,.007.171q0,2.387,0,4.774a.446.446,0,0,0,.04.236.463.463,0,0,0,.214.156.736.736,0,0,0,.243.012h13.331c.443,0,.5-.058.5-.5q0-2.338,0-4.676a.908.908,0,0,1,.02-.231.414.414,0,0,1,.453-.294.4.4,0,0,1,.394.337,1.006,1.006,0,0,1,.014.17q0,2.406,0,4.811a1.216,1.216,0,0,1-.425.988,1.249,1.249,0,0,1-.84.278Q1062.974,779.491,1059.583,779.492Z" transform="translate(-1.188 -25.203)" fill="#333"/>
                                  <path id="Path_3145" data-name="Path 3145" d="M1075.191,739.716c.628,0,1.257,0,1.885,0a1.146,1.146,0,0,1,1.174.927,2.918,2.918,0,0,1,.024.73.4.4,0,0,1-.455.363.409.409,0,0,1-.411-.4c-.007-.13,0-.261,0-.392,0-.229-.112-.344-.337-.344q-1.885,0-3.77,0c-.225,0-.333.117-.337.345,0,.122,0,.245,0,.367a.412.412,0,0,1-.4.425.407.407,0,0,1-.47-.376,2.976,2.976,0,0,1,.025-.706,1.156,1.156,0,0,1,1.192-.938C1073.934,739.713,1074.562,739.716,1075.191,739.716Z" transform="translate(-16.79 0)" fill="#333"/>
                                </g>
                              </svg>
                               Accounts</span> --}}

                                    <span class="px-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11.854" height="16.358"
                                            viewBox="0 0 11.854 16.358">
                                            <g id="Group_424" data-name="Group 424" transform="translate(-738.406 -295.94)">
                                                <path id="Path_3146" data-name="Path 3146"
                                                    d="M744.387,295.941a5.861,5.861,0,0,1,5.594,7.626,23.706,23.706,0,0,1-3.528,6.361q-.7,1-1.442,1.962c-.39.508-.918.554-1.279.072a35.358,35.358,0,0,1-4.9-7.956A5.9,5.9,0,0,1,744.387,295.941Zm-.035,15.76c.777-1.08,1.518-2.064,2.21-3.083a20.437,20.437,0,0,0,2.8-5.237,4.9,4.9,0,0,0-1.225-5.165,5.009,5.009,0,0,0-5.126-1.443,5.183,5.183,0,0,0-3.519,7.092A33.941,33.941,0,0,0,744.352,311.7Z"
                                                    transform="translate(0 0)" fill="#333" />
                                                <path id="Path_3147" data-name="Path 3147"
                                                    d="M763.885,317.774a3.228,3.228,0,1,1-3.268,3.218A3.231,3.231,0,0,1,763.885,317.774Zm-.038,5.789a2.55,2.55,0,0,0,2.573-2.535,2.574,2.574,0,1,0-2.573,2.535Z"
                                                    transform="translate(-19.506 -19.175)" fill="#333" />
                                            </g>
                                        </svg>
                                        {{ $app->location }}</span>

                                    <span class="px-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14.574" height="14.575"
                                            viewBox="0 0 14.574 14.575">
                                            <g id="Group_425" data-name="Group 425" transform="translate(-953.994 -437)">
                                                <path id="Path_3148" data-name="Path 3148"
                                                    d="M961.287,451.575a7.287,7.287,0,1,1,7.281-7.289A7.3,7.3,0,0,1,961.287,451.575Zm6.594-7.282a6.6,6.6,0,1,0-6.613,6.595A6.607,6.607,0,0,0,967.881,444.293Z"
                                                    fill="#3f3f3f" />
                                                <path id="Path_3149" data-name="Path 3149"
                                                    d="M1004.509,457.472c0-.735,0-1.469,0-2.2a.341.341,0,1,1,.679.008q0,1.132,0,2.265c0,.6,0,1.206,0,1.809a.249.249,0,0,0,.155.257c.618.335,1.231.681,1.847,1.02a.366.366,0,0,1,.215.275.341.341,0,0,1-.488.356c-.14-.071-.275-.151-.412-.227-.58-.321-1.157-.647-1.741-.962a.442.442,0,0,1-.256-.439C1004.513,458.911,1004.509,458.192,1004.509,457.472Z"
                                                    transform="translate(-43.568 -15.436)" fill="#3f3f3f" />
                                            </g>
                                        </svg>
                                        9AM - to 5PM</span>

                                    <span class="px-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.785" height="12.194"
                                            viewBox="0 0 16.785 12.194">
                                            <g id="Group_426" data-name="Group 426"
                                                transform="translate(-829.349 -242.086)">
                                                <path id="Path_3150" data-name="Path 3150"
                                                    d="M843.625,243.989c.261-.04.5-.076.742-.114a.285.285,0,0,1,.372.267l.29,1.8h.725c.292,0,.379.087.379.381q0,3.78,0,7.559c0,.316-.081.4-.393.4H832.115a.344.344,0,0,1-.406-.3q-1.166-3.628-2.331-7.256c-.073-.226-.01-.343.23-.42l8.6-2.762,4.4-1.413c.31-.1.4-.052.5.263Zm-9.612,9.724h9.832a2.067,2.067,0,0,1,1.724-1.723v-3.767a2.032,2.032,0,0,1-1.719-1.716h-9.838a2.051,2.051,0,0,1-1.716,1.724v3.761A2.05,2.05,0,0,1,834.013,253.713Zm10.211-9.251-9.163,1.458v.012h9.4Zm-1.593-1.75-8.715,2.8.008.028,9.149-1.458ZM831.1,246.548l.6,3.778.018,0v-3.87Zm-1.123.226,1.109,3.47.033-.008-.579-3.644Zm14.445-.269a1.392,1.392,0,0,0,1.149,1.142v-1.142Zm1.153,6.07c-.529.029-1.176.682-1.134,1.138h1.134Zm-13.28-6.071v1.143a1.379,1.379,0,0,0,1.133-1.143Zm1.145,7.209c-.119-.6-.729-1.188-1.145-1.12v1.12Z"
                                                    transform="translate(0)" fill="#333" />
                                                <path id="Path_3151" data-name="Path 3151"
                                                    d="M1086.366,415.824a3.72,3.72,0,0,1-.462,1.85,2.267,2.267,0,0,1-.348.454,1.188,1.188,0,0,1-1.781-.009,2.629,2.629,0,0,1-.68-1.339,4.014,4.014,0,0,1,.24-2.613,2.4,2.4,0,0,1,.416-.614,1.2,1.2,0,0,1,1.867.019,2.918,2.918,0,0,1,.691,1.6C1086.34,415.389,1086.347,415.608,1086.366,415.824Zm-.558,0a3.612,3.612,0,0,0-.216-1.232,1.743,1.743,0,0,0-.477-.735.609.609,0,0,0-.871-.008,1.744,1.744,0,0,0-.41.555,3.416,3.416,0,0,0,0,2.83,1.743,1.743,0,0,0,.409.556.594.594,0,0,0,.878-.016,2.089,2.089,0,0,0,.38-.522A3.2,3.2,0,0,0,1085.808,415.822Z"
                                                    transform="translate(-245.741 -165.71)" fill="#333" />
                                                <path id="Path_3152" data-name="Path 3152"
                                                    d="M980.2,467.714c.145,0,.29-.006.435,0a.936.936,0,0,1,.892.9.922.922,0,0,1-.849.973,6.733,6.733,0,0,1-.962,0,.922.922,0,0,1-.839-.966.937.937,0,0,1,.888-.909C979.91,467.708,980.055,467.714,980.2,467.714Zm.017,1.335c.119,0,.238,0,.357,0a.383.383,0,0,0,.394-.391.376.376,0,0,0-.393-.39c-.248-.007-.5-.008-.744,0a.381.381,0,0,0-.4.389.387.387,0,0,0,.394.392C979.958,469.054,980.088,469.049,980.217,469.049Z"
                                                    transform="translate(-144.876 -218.605)" fill="#333" />
                                                <path id="Path_3153" data-name="Path 3153"
                                                    d="M1210.2,467.2a4.008,4.008,0,0,1,.631.058.94.94,0,0,1-.171,1.839,7.17,7.17,0,0,1-.963,0,.926.926,0,0,1-.839-.967.938.938,0,0,1,.89-.907c.15-.008.3,0,.451,0Zm-.017.57c-.129,0-.259-.007-.387,0a.39.39,0,0,0,0,.779c.258.01.517.01.775,0a.39.39,0,0,0,0-.78C1210.447,467.766,1210.317,467.772,1210.188,467.772Z"
                                                    transform="translate(-367.705 -218.112)" fill="#333" />
                                                <path id="Path_3154" data-name="Path 3154"
                                                    d="M1117.837,455.489c.085.021.151.033.215.054.189.061.2.094.13.281-.041.11-.089.124-.2.079a.686.686,0,0,0-.329-.056.28.28,0,0,0-.2.151c-.018.054.046.165.105.209a2.077,2.077,0,0,0,.333.164.6.6,0,0,1,.374.744.637.637,0,0,1-.461.414c0,.046,0,.092,0,.138,0,.181-.078.244-.247.181-.039-.014-.07-.1-.068-.159,0-.108-.024-.162-.14-.172a.884.884,0,0,1-.206-.064c-.114-.04-.141-.1-.1-.227.051-.141.1-.163.244-.1a.913.913,0,0,0,.42.05.254.254,0,0,0,.173-.165.307.307,0,0,0-.09-.225.807.807,0,0,0-.226-.131c-.087-.045-.18-.081-.262-.133a.531.531,0,0,1,.077-.954.159.159,0,0,0,.123-.194c-.016-.118.019-.18.158-.18s.189.051.172.184A.91.91,0,0,0,1117.837,455.489Z"
                                                    transform="translate(-278.73 -206.475)" fill="#333" />
                                            </g>
                                        </svg>
                                        {{ $app->offer_salary }}</span>
                                </p>
                                <p class="fs-14 mb-0 pt-1">
                                    @if ($app->job_type == 'Full Time')
                                        <span class="full-time">Full Time</span>
                                    @elseif($app->job_type == 'Full Time')
                                        <span class="Part Time">Part Time</span>
                                    @endif
                                </p>
                            </div>
                        </div>

                        <h4 class="fs-18 fw-600 pb-lg-4 pb-3">Job Description</h4>
                        <p class="fs-14 text-secondary pb-3">{!! $app->description !!}</p>

                        <h4 class="fs-18 fw-600 pb-lg-4 pb-3">Key resposibilities</h4>
                        <div class="fs-14 text-secondary pb-3 list-bullet">
                            {!! $app->key_responsibility !!}
                        </div>

                        <h4 class="fs-18 fw-600 pb-lg-4 pb-3">Skill & Experience</h4>
                        <div class="fs-14 text-secondary pb-3 list-bullet">
                            {!! $app->skill_exp !!}
                        </div>

                        <ul class="social-share py-5 d-lg-flex align-items-center">
                            <span class="fs-18 fw-600 pe-3">Social</span>
                            <li>
                                <a href="#" target="_blank" class="lnkd"> <img
                                        src="{{ asset('imgs/social-linkedin.svg') }}" alt="social-linkedin"
                                        class="img-fluid"> linkedin</a>
                            </li>
                            <li>
                                <a href="#" target="_blank" class="twt"><img
                                        src="{{ asset('imgs/socical-twitter.svg') }}" alt="socical-twitter"
                                        class="img-fluid"> Twitter</a>
                            </li>
                            <li>
                                <a href="#" target="_blank" class="fb"><img
                                        src="{{ asset('imgs/social-facebook.svg') }}" alt="social-facebook"
                                        class="img-fluid"> Facebook</a>
                            </li>
                        </ul>



                    </div>
                    <div class="col-lg-4">
                        <div class="d-lg-flex justify-content-md-between text-center align-items-center pb-4">
                            {{-- <button class="btn default-btn w-100 mb-3">Apply Now</button> --}}
                            @if (auth()->check())
                                @if (auth()->user()->role == 'user')
                                    <a class="btn open-apply-modal default-btn w-100 mb-3" id="{{ $app->id }}"
                                        href="javascript:;">Apply Now</a>
                                @endif
                            @else
                                <a class="btn default-btn w-100 mb-3" href="{{ route('login') }}">Apply Now</a>
                            @endif
                            <a href="#" class="btn default-btn-2 mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18.976" height="17.103"
                                    viewBox="0 0 18.976 17.103">
                                    <g id="wishlist-empty" transform="translate(0.499 0.502)">
                                        <path id="Path_3141" data-name="Path 3141"
                                            d="M631.778,1183.621c.153-.142.307-.268.442-.412a6.117,6.117,0,0,1,1.543-1.256,4.683,4.683,0,0,1,3.929-.37,4.378,4.378,0,0,1,2.191,1.76,5,5,0,0,1,.889,3.247,6.762,6.762,0,0,1-.687,2.43,13.113,13.113,0,0,1-1.986,2.93,28.02,28.02,0,0,1-3.865,3.625c-.774.609-1.568,1.193-2.353,1.788-.049.037-.085.058-.147.012a46.343,46.343,0,0,1-4.389-3.529,20.541,20.541,0,0,1-2.857-3.184,9.548,9.548,0,0,1-1.44-2.864,5.1,5.1,0,0,1,.055-3.249,4.872,4.872,0,0,1,2.108-2.636,4.442,4.442,0,0,1,3.765-.34,5.214,5.214,0,0,1,2.117,1.341C631.327,1183.152,631.557,1183.393,631.778,1183.621Z"
                                            transform="translate(-622.811 -1181.309)" fill="none" stroke="#007ba7"
                                            stroke-width="1" />
                                    </g>
                                </svg>
                            </a>
                        </div>

                        <p class="fs-14">Application ends : <span
                                class="text-danger fw-bold">{!! htmlspecialchars_decode(date('j<\s\up>S</\s\up> F Y', strtotime($app->expiry_date))) !!}</span></p>
                        <div class="search-area mb-3 p-4 mb-3">
                            <!-- <h2 class="fs-5 text-dark fw-bold pb-3">Companies In Similar Industries</h2> -->
                            <ul>
                                <li class="d-flex align-items-center pb-4">
                                    <img src="{{ asset('imgs/date.svg') }}" alt="date" width="25">
                                    <div class="ps-4">
                                        <p class="mb-0 fw-600 fs-18"> Date Posted </p>
                                        <p class=" mb-0 text-grey fs-14 ">{!! htmlspecialchars_decode(date('j<\s\up>S</\s\up> F Y', strtotime($app->updated_at))) !!}</p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center pb-4">
                                    <img src="{{ asset('imgs/location.svg') }}" alt="location" width="20">
                                    <div class="ps-4">
                                        <p class="mb-0 fw-600 fs-18"> Location </p>
                                        <p class=" mb-0 text-grey fs-14 ">{{ $app->location }}</p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center pb-4">
                                    <img src="{{ asset('imgs/money.svg') }}" alt="money" width="30">
                                    <div class="ps-4">
                                        <p class="mb-0 fw-600 fs-18"> Offered Salary:</p>
                                        <p class=" mb-0 text-grey fs-14 "> {{ $app->offer_salary }} / month</p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center pb-4">
                                    <img src="{{ asset('imgs/expire-date.svg') }}" alt="expire-date" width="20">
                                    <div class="ps-4">
                                        <p class="mb-0 fw-600 fs-18"> Expiration date </p>
                                        <p class=" mb-0 text-grey fs-14 ">{!! htmlspecialchars_decode(date('j<\s\up>S</\s\up> F Y', strtotime($app->expiry_date))) !!}</p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center pb-4">
                                    <img src="{{ asset('imgs/experience.svg') }}" alt="experience" width="20">
                                    <div class="ps-4">
                                        <p class="mb-0 fw-600 fs-18"> Experience </p>
                                        <p class=" mb-0 text-grey fs-14 "> {{ $app->experience }}</p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center pb-4">
                                    <img src="{{ asset('imgs/gender.svg') }}" alt="gender" width="25">
                                    <div class="ps-4">
                                        <p class="mb-0 fw-600 fs-18"> Gender </p>
                                        <p class=" mb-0 text-grey fs-14 ">{{ $app->gender }}</p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center pb-4">
                                    <img src="{{ asset('imgs/qualification.svg') }}" alt="qualification" width="25">
                                    <div class="ps-4">
                                        <p class="mb-0 fw-600 fs-18"> Qualification </p>
                                        <p class=" mb-0 text-grey fs-14 ">{{ $app->qualification }}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="search-area mb-3 p-4 mb-3">
                            <h2 class="fs-5 text-dark fw-bold pb-3">Job Skills</h2>
                            <div class="text-center">
                                @foreach ($app->skills as $skills)
                                    <span class="mb-3">
                                        <a href="#"
                                            class="text-white fs-14 fw-normal bg-theme-secondary-2 rounded-3 px-3 py-2">{{ $skills->name }}</a>
                                    </span>
                                @endforeach
                                {{-- <span class="mb-3">
                                <a href="#" class="text-white fs-14 fw-normal bg-theme-secondary-2 rounded-3 px-3 py-2">Accounts</a>
                            </span>
                            <span class="mb-3">
                                <a href="#" class="text-white fs-14 fw-normal bg-theme-secondary-2 rounded-3 px-3 py-2">Accounts</a>
                            </span> --}}

                            </div>
                        </div>

                        <div class="search-area mb-3 p-4 mb-3">
                            <!-- <h2 class="fs-5 text-dark fw-bold pb-3">People Also Viewed</h2> -->
                            <ul>
                                <li class="d-lg-flex align-items-center">
                                    <img src="{{ asset('storage/' . $app->company->logo) }}" width="100px" height="100px"
                                        style="border-radius: 100px;" alt="bag" class="img-fluid">
                                    <div class="ps-3">
                                        <p class="mb-0 fw-bold"> {{ $app->company->name }}</p>
                                        <a href="#" class=" mb-0 text-theme-primary fs-14 "> View Industry</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <h3 class="mb-0 fs-3 fw-bold px-2 py-5 text-theme-primary ">Related Jobs</h3>
                        <div class="card horizontal-view py-3 mb-3">
                            <div class="card-body row align-items-center">
                                <div class="col-lg-2">
                                    <img src="{{ asset('imgs/bag.svg') }}" alt="profile-img" class="img-fluid"
                                        width="128" height="128">
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
                                    <div class="btns d-flex flex-column mx-auto w-75">
                                        <button class="btn default-btn mb-3">Hire Now</button>
                                        <button class="btn default-btn-2">View Resume</button>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="#"><img src="{{ asset('imgs/share.svg') }}" alt=""
                                                    class="img-fluid"></a>
                                            <a href="#"><img src="{{ asset('imgs/mail.svg') }}" alt=""
                                                    class="img-fluid"></a>
                                            <a href="#"><img src="{{ asset('imgs/wishlist.svg') }}" alt=""
                                                    class="img-fluid"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card horizontal-view py-3 mb-3">
                            <div class="card-body row align-items-center">
                                <div class="col-lg-2">
                                    <img src="{{ asset('imgs/bag.svg') }}" alt="profile-img" class="img-fluid"
                                        width="128" height="128">
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
                                    <div class="btns d-flex flex-column mx-auto w-75">
                                        <button class="btn default-btn mb-3">Hire Now</button>
                                        <button class="btn default-btn-2">View Resume</button>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="#"><img src="{{ asset('imgs/share.svg') }}" alt=""
                                                    class="img-fluid"></a>
                                            <a href="#"><img src="{{ asset('imgs/mail.svg') }}" alt=""
                                                    class="img-fluid"></a>
                                            <a href="#"><img src="{{ asset('imgs/wishlist.svg') }}" alt=""
                                                    class="img-fluid"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="text-center mb-0 py-4">
                            <a href="#" class="btn default-btn ">View All</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </main>

@endsection
