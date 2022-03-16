@extends('adminpanel.layout.app')

@section('page_title', 'E-Rec')

@section('head_style')
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection

    @section('content')

        {{-- <section> --}}
           <div class="container">
                <div class="row">
                    <div class="col-sm-10">
                        <h3>All Users</h3><br>
                    </div>
                    {{-- <div class="col-sm-2">
                        <a class="btn btn-primary text-white" href="{{ route('admin.addCategory') }}"> All Users </a>
                    </div> --}}
                </div>
                <div class="card" style="width: 100% !important;">
                    <div class="table table-border table-responsive">
                        <table style="width: 100%;">
                            <tr>
                                <th>Sr. #</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @if (count($user) > 0)
                            @foreach ($user as $key=>$row)
                            <tr>
                                <td>{{ ++$key }}. </td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->email }}</td>
                                <td>
                                    @if($row->role == "user")
                                    Candidate            
                                    @elseif($row->role == "company")
                                    Company        
                                    @elseif($row->role == "rec")
                                    Recruiter
                                    @endif
                                </td>
                                <td>
                                    @if ($row->status == 1)
                                        <span class="badge bg-success">{{ __('Active') }}</span>
                                    @else
                                        <span class="badge bg-danger">{{ __('Deactive') }}</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.editUser', $row->id) }}" class="btn btn-primary btn-sm mt-2"><i
                                        class="fa fa-info" style="font-size:18px"></i></a>
                                    <a href="" onclick="return confirm('Are you sure you want to delete?');" class="btn btn-danger btn-sm mt-2"><i
                                        class="fa fa-trash" style="font-size:18px"></i></a>
                                </td>
                            </tr>
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
