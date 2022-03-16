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
                            <h2>All Jobs Posts List</h2>
                        </div>
                        <div class="col-md-6 text-right">
                            <a class="btn btn-primary" style="color:#FFF;" href="{{ route('company.jobs.create') }}"> Add Post</a>
                        </div>
                    </div>
                    <div class="table table-border table-responsive">
                        <table style="width: 100%;">
                            <tr>
                                <th>Sr. #</th>
                                <th>Designation</th>
                                <th>Description</th>
                                <th>Recruiter</th>
                                <th>Banner</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @if (count($post) > 0)
                            @foreach ($post as $key=>$row)
                            <tr>
                                <td>{{ ++$key }}. </td>
                                <td>{{ $row->post }}</td>
                                <td>{!! Str::limit($row->description, 80, '...') !!}</td>
                                <td>{{ $row->recruiter->name }}</td>
                                <td>
                                    <img src="{{ asset('storage/'. $row->banner) }}" alt="plus-circle" width="70px" style="border-radius: 100px" height="70px">
                                </td>
                                <td>
                                    @if($row->status == 0)
                                        <p class="btn btn-danger text-center p-2 mt-3" style="color:#fff;">Not Approved</p>
                                    @else
                                        <p class="btn btn-success  text-center p-2 mt-3"  style="color:#fff;">Approved</p>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('company.job.edit', $row->id) }}" class="btn btn-primary btn-sm mt-2"><i
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
