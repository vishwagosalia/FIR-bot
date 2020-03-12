@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <!-- DataTables Example -->
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTable">
                            <thead>
                            <tr>
                                <th>City</th>
                                <th>State</th>
                                <th>Pincode</th>
                                <th>Complaint</th>
                                <th>Casualities</th>
                                <th>items_stolen</th>
                                <th>Time Happened</th>
                                <th>Crime Happened</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>City</th>
                                <th>State</th>
                                <th>Pincode</th>
                                <th>Complaint</th>
                                <th>Casualities</th>
                                <th>items_stolen</th>
                                <th>Time Happened</th>
                                <th>Crime Happened</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($firs as $fir)
                                <tr>
                                    <td>{{ $fir->city }}</td>
                                    <td>{{ $fir->state }}</td>
                                    <td>{{ $fir->pincode }}</td>
                                    <td>{{ $fir->complaint }}</td>
                                    <td>{{ $fir->casualties }}</td>
                                    <td>{{ $fir->items_stolen }}</td>
                                    <td>{{ $fir->time_happened }}</td>
                                    <td>{{ $fir->crime_happened }}</td>
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
    </div>
@endsection