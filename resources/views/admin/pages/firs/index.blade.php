@extends('layouts.admin')
@section('title')
    FIRS
@endsection

@section('content')

    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">FIRS</a>
                </li>
                <li class="breadcrumb-item active">Overview</li>
            </ol>

            <div class="mb-2"></div>
            <div class="col-md-12">
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTable">
                            <thead>
                            <tr>
                                {{--<th>Photo</th>--}}
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Aadhar_no</th>
                                <th>Phone</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Pincode</th>
                                <th>Complaint</th>
                                <th>Casualities</th>
                                <th>items_stolen</th>
                                <th>Time Happened</th>
                                <th>Crime Happened</th>
                                <th>Is Authenticated</th>
                                <th>IP Address</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($firs as $fir)
                                <tr>
                                    {{--<td>{{ $fir->aadhar_photo }}</td>--}}
                                    <td>{{ $fir->name }}</td>
                                    <td>{{ $fir->email }}</td>
                                    <td>{{ $fir->address }}</td>
                                    <td>{{ $fir->aadhar_no }}</td>
                                    <td>{{ $fir->phone_no }}</td>
                                    <td>{{ $fir->city }}</td>
                                    <td>{{ $fir->state }}</td>
                                    <td>{{ $fir->pincode }}</td>
                                    <td>{{ $fir->complaint }}</td>
                                    <td>{{ $fir->casualties }}</td>
                                    <td>{{ $fir->items_stolen }}</td>
                                    <td>{{ $fir->time_happened }}</td>
                                    <td>{{ $fir->crime_happened }}</td>
                                    @if($fir->is_authenticated == 0)
                                        <td><a href="{{ route('admin.firs.authenticate',['fir' => $fir]) }}" class="btn btn-primary">Authenticate</a></td>
                                    @else
                                        <td><a href="{{ route('admin.firs.remove',['fir' => $fir]) }}" class="btn btn-danger">Remove</a></td>
                                    @endif
                                    <td>{{ $fir->ip_address }}</td>

                                    {{--<td><a href="users.php?source=edit_user&user_id=$user_id" class="btn btn-info"><span class="fa fa-edit"></span></a></td>--}}
                                    {{--<td><a href="users.php?source=delete_user&user_id=$user_id" class="btn btn-danger"><span class="fa fa-trash"></span></a></td>--}}
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>

        @include('admin.components.footer')
    </div>
    <!-- /.content-wrapper -->
@endsection