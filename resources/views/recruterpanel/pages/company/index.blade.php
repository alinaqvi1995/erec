@extends('recruterpanel.layout.app')

@section('page_title', 'E-Rec')

@section('head_style')
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection

    @section('content')

        {{-- <section> --}}
           <div class="container">
                @foreach ($comp as $key=> $row)
                    {{-- {{ dd($row->company->toArray()) }} --}}
                    <div class="col-md-6">
                        <div class="card mb-3 p-3">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{ asset('storage/'.$row->company->logo) }}" width="70px" height="70px" style="border-radius: 70px;"/>
                                        </div>
                                        <div class="col-md-6">
                                            <h4>{{ $row->company->name }}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    @if ($row->status == 1)
                                        Connected
                                    @else
                                        <a class="btn btn-primary" style="color: #FFF;" href="{{ route('recruiters.accept',$row->id) }}">Accept</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
           </div>
        {{-- </section> --}}

    @endsection

@section('bottom_script')
@endsection
