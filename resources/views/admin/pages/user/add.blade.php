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
                <li class="breadcrumb-item active">Create</li>
            </ol>

            <div class="row">
                <div class="col-md-12">
                    <form action="" method="post" role="form" enctype="multipart/form-data">
                        <legend>Add New Users</legend>
                        <hr>
                        <div class="form-group">
                            <label for="username">User Name</label>
                            <input type="text" class="form-control" name="username" id="username">
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>

                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" name="first_name" id="first_name">
                        </div>

                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" name="last_name" id="last_name">
                        </div>

                        <div class="form-group">
                            <label for="user_image">Profile Image</label>
                            <input type="file" class="form-control-file" name="user_image" id="user_image">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email">
                        </div>

                        <div class="form-group">
                            <label for="role">Role</label>
                            <select name="role" id="role">
                                <option value="0">Select Role</option>
                                <option value="admin">Admin</option>
                                <option value="subscriber">Subscriber</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary" name="add_user" id="add_user">Add User</button>
                    </form>
                </div>
            </div>


        </div>

        @include('admin.components.footer')
    </div>
    <!-- /.content-wrapper -->
@endsection