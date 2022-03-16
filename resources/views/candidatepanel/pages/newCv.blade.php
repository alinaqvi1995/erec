@extends('candidatepanel.layout.app')
@section('page_title', 'E-Rec')

@section('content')

<div class="container">
<form method="post" action="{{ route('candidates.cv.store') }}" enctype="multipart/form-data">
    @csrf
    <div calss="col-md-6 form-control">
        <input type="file" name="document[]" class="form-group" multiple/>
    </div>
    <div calss="col-md-6 form-control">
        <button type="submit" class="btn btn-primary">Upload</button>
    </div>
</form>
</div>

@endsection
@section('bottom_script')
@endsection
