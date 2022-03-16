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
                        <h3>Categories</h3><br>
                    </div>
                    <div class="col-sm-2">
                        <a class="btn btn-primary text-white" href="{{ route('admin.addCategory') }}"> Add New Category </a>
                    </div>
                </div>
                <div class="card" style="width: 100% !important;">
                    <div class="table table-border table-responsive">
                        <table style="width: 100%;">
                            <tr>
                                <th>Sr. #</th>
                                <th>Name</th>
                                <th>Icon</th>
                                <th>Action</th>
                            </tr>
                            @if (count($cat) > 0)
                            @foreach ($cat as $key=>$row)
                            <tr>
                                <td>{{ ++$key }}. </td>
                                <td>{{ $row->name }}</td>
                                <td>
                                    @if($row->img)
                                        <img src="{{ asset('storage/'. $row->img) }}" alt-text="No Image" width="70px" style="border-radius: 100px" height="70px">
                                    @else
                                        No Icon
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.editCategory', $row->id) }}" class="btn btn-primary btn-sm mt-2"><i
                                        class="fa fa-info" style="font-size:18px"></i></a>
                                    <a href="{{ route('admin.destroyCategory', $row->id) }}" onclick="return confirm('Are you sure you want to delete?');" class="btn btn-danger btn-sm mt-2"><i
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
