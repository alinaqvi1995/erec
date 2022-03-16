@extends('candidatepanel.layout.app')
@section('page_title', 'E-Rec')

@section('content')

{{-- <div class="container"> --}}
    @foreach ($docs as $key=> $item)
        <div class="col-xl-2 col-md-4 d-flex mb-5 text-center">
            <a href="{{ asset('candidateDoc/doc/'.$item->document) }}" target="_blank">
                <div class="align-items-center">
                    <div class=" card dashboard-card bg-one">
                        <i class="fa fa-file" style="font-size:4.0rem;"></i>
                    </div>
                    <div class="align-items-center">
                        <p>Docs {{ $key +1 }}</p>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
    <div>
        <a class="btn btn-primary" href="{{ route('candidates.cv.upload') }}">Add new CV</a>
    </div>
{{-- </div> --}}





@endsection
@section('bottom_script')
@endsection
