@extends('layouts.admin')
@section('title')
    Crime Types
@endsection

@section('content')

    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Crime Classification</a>
                </li>
                <li class="breadcrumb-item active">Overview</li>
            </ol>

            <div class="mb-2"></div>
            <div class="col-md-12">
                <div class="row">
                    <div class="table-responsive">
                        <table id="dataTable" class="table table-hover" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Type</th>
                                <th>Detail</th>
                                <th>IPC</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Type</th>
                                <th>Detail</th>
                                <th>IPC</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($types as $type)
                                <tr>
                                    <td>{{ $type->type }}</td>
                                    <td>{{ $type->detail }}</td>
                                    <td>{{ $type->ipc }}</td>
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