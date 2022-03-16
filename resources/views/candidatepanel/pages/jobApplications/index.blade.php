@extends('candidatepanel.layout.app')

@section('page_title', 'E-Rec')

@section('head_style')
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection

    @section('content')

        {{-- <section> --}}
           <div class="container">
                <div class="card p-2 mb-3">
                    <div class="row mb-3">
                        <div class="col-md-8">
                            <h2>All Jobs Applications List</h2>
                        </div>
                        <div class="col-md-4 text-right">
                            <a class="btn btn-primary" style="color:#FFF;" href="{{ route('candidates.job.create') }}"> Add New Appliccation</a>
                        </div>
                    </div>
                    @if (session($key ?? 'status'))
                        <div class="alert alert-success" role="alert">
                            {!! session($key ?? 'status') !!}
                        </div>
                    @endif
                    <div class="table table-border table-responsive">
                        <table style="width: 100%;">
                            <tr>
                                <th>Sr. #</th>
                                <th>Tilte</th>
                                <th>Job Type</th>
                                <th>Experience</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @if (count($apps) > 0)
                            @foreach ($apps as $key=>$row)
                            <tr>
                                <td>{{ ++$key }}. </td>
                                <td>{{ $row->title }}</td>
                                <td>{{ $row->job_type }}</td>
                                <td>{{ $row->experience }}</td>
                                <td>
                                    @if($row->status == 0)
                                        <p class="text-danger" style="color:#fff;">Not Visible</p>
                                    @else
                                        <p class="text-success"  style="color:#fff;">Visible</p>
                                    @endif
                                </td>
                                <td>
                                    <a href="" class="btn btn-primary btn-sm mt-2"><i
                                        class="fa fa-info" style="font-size:18px"></i></a>
                                    <a href="" class="btn btn-danger btn-sm mt-2"><i
                                        class="fa fa-trash" style="font-size:18px"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                              <td colspan="6" align="center">No data available</td>
                            </tr>
                            @endif
                        </table>
                    </div>
                </div>
           </div>
        {{-- </section> --}}

    @endsection

@section('bottom_script')
@endsection
