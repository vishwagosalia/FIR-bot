@extends('layouts.admin')
@section('title')
    Admin
@endsection

@section('content')

    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">User</a>
                </li>
                <li class="breadcrumb-item active">Delete</li>
            </ol>

            {{--Paste here--}}

        </div>

        @include('admin.components.footer')
    </div>
    <!-- /.content-wrapper -->
@endsection