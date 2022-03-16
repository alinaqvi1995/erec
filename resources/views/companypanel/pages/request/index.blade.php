@extends('companypanel.layout.app')

@section('page_title', 'E-Rec')

@section('head_style')
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection

    @section('content')

        {{-- <section> --}}
           <div class="container">
               <div class="row">
                @foreach ($rec as $key=> $row)
                    <div class="col-md-3 mb-md-5 mb-3">
                        <div class="dashboard-card recruiters_box shadow">
                            <div class=" d-flex">
                                <div class="first text-center">
                                    <img class="recruiters_img" src="{{ asset('storage/'.$row->avatar) }} "/>
                                </div>
                                <div class="second ml-3">
                                    <h5 class="recruiters_title">{{ $row->name }}</h5>
                                    @if (count($row->recRelation) != 0)
                                        @if ($row->recRelation[0]->com_id == auth()->user()->company->id)
                                            @if ($row->recRelation[0]->status == 1)
                                               <p> Connected </p>
                                            @else
                                                Request Sent
                                            @endif
                                        @else
                                            <a class="btn btn-primary" style="color: #FFF;" href="{{ route('company.recruiters.send',$row->id) }}">Add Connect</a>
                                        @endif
                                    @else
                                        <a class="btn btn-primary" style="color: #FFF;" href="{{ route('company.recruiters.send',$row->id) }}">Add Connect</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- <div class="card mb-3 p-3"> -->
                            <!-- <div class="row"> -->
                                <!-- <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{ asset('storage/'.$row->avatar) }}" width="70px" height="70px" style="border-radius: 70px;"/>
                                        </div>
                                        <div class="col-md-6">
                                            <h4>{{ $row->name }}</h4>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="col-md-4">
                                    @if (count($row->recRelation) != 0)
                                        @if ($row->recRelation[0]->com_id == auth()->user()->company->id)
                                            @if ($row->recRelation[0]->status == 1)
                                                Connected
                                            @else
                                                Request Sent
                                            @endif
                                        @else
                                            <a class="btn btn-primary" style="color: #FFF;" href="{{ route('company.recruiters.send',$row->id) }}">Add Connect</a>
                                        @endif
                                    @else
                                        <a class="btn btn-primary" style="color: #FFF;" href="{{ route('company.recruiters.send',$row->id) }}">Add Connect</a>
                                    @endif
                                </div> -->
                            <!-- </div>
                        </div> -->
                    </div>
                @endforeach
                </div>
           </div>
        {{-- </section> --}}

    @endsection

@section('bottom_script')
@endsection
