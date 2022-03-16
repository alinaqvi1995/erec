@extends('companypanel.layout.app')

@section('page_title', 'E-Rec')

@section('head_style')
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection

    @section('content')

        {{-- <section> --}}
           <div class="container">
                <div class="card p-2">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>All Jobs Applications</h2>
                        </div>
                        {{-- <div class="col-md-6 text-right">
                            <a class="btn btn-primary" style="color:#FFF;" href=""> Add Post</a>
                        </div> --}}
                    </div>
                    <div class="table table-border table-responsive">
                        <table style="width: 100%;">
                            <tr>
                                <th>Sr. #</th>
                                <th>Post</th>
                                <th>Candidate</th>
                                <th>Resume</th>
                                {{-- <th>Status</th> --}}
                                <th>Action</th>
                            </tr>
                            @if (count($jobApp) > 0)
                            @foreach ($jobApp as $key=>$row)
                            @if(isset($row->post))
                            <tr>
                                <td>{{ ++$key }}. </td>
                                <td>{{ $row->post->post }}</td>
                                <td>{{ $row->candidate->first_name }} {{ $row->candidate->last_name }}</td>
                                <td>
                                    {{-- <a href="{{ asset('candidateDoc/doc/'.$row->candidateDocument->document) }}" target="_blank">{{$row->candidateDocument->document}} </a> --}}
                                    <div class="col-xl-2 col-md-4 d-flex mb-1 text-center">
                                        <a href="{{ asset('candidateDoc/doc/'.$row->candidateDocument->document) }}" target="_blank" alt="{{$row->candidateDocument->document}}">
                                            <div class="align-items-center">
                                                <div class="card p-2">
                                                    <i class="fa fa-file" style="font-size:2.0rem;"></i>
                                                </div>
                                                <div class="align-items-center">
                                                    <p>Resume</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </td>
                                {{-- <td>
                                    @if($row->status == 0)
                                        <p class="btn btn-danger text-center p-2 mt-3" style="color:#fff;">Not Approved</p>
                                    @else
                                        <p class="btn btn-success  text-center p-2 mt-3"  style="color:#fff;">Approved</p>
                                    @endif
                                </td> --}}
                                <td>
                                    @if($row->status == 0)
                                        <a href="{{ route('company.job.status', $row->id) }}" class="btn btn-primary btn-sm mt-2"><i
                                            class="fa fa-star" style="font-size:18px"></i> Shortlist</a>
                                        <a href="{{ route('company.job.status2', $row->id) }}" class="btn btn-primary btn-sm mt-2"><i
                                            class="fa fa-handshake" style="font-size:18px"></i> Hire</a>
                                    @elseif($row->status == 1)
                                        <p class="btn btn-success btn-sm mt-4"><i
                                            class="fa fa-check" style="font-size:18px"></i> Shortlist</p>
                                        <a href="{{ route('company.job.status2', $row->id) }}" class="btn btn-primary btn-sm mt-2"><i
                                            class="fa fa-handshake" style="font-size:18px"></i> Hire</a>
                                    @elseif($row->status == 2)
                                        {{-- <a href="{{ route('company.job.status', $row->id) }}" class="btn btn-primary btn-sm mt-2"><i
                                            class="fa fa-star" style="font-size:18px"></i> Shortlist</a> --}}
                                        <p class="btn btn-success btn-sm mt-4"><i
                                            class="fa fa-check" style="font-size:18px"></i> Hire</p>
                                    @endif()
                                </td>
                            </tr>
                            @endif
                            @endforeach
                            @else
                            <tr>
                              <td colspan="6" allign="center">No data available</td>
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
