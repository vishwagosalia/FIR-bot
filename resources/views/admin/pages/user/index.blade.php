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
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Overview</li>
            </ol>

            <!-- Icon Cards-->
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-fw fa-comments"></i>
                            </div>
                            <div class="mr-5">{{ $firs }} FIR in total!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="{{ route('admin.firs.index') }}">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-warning o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-fw fa-list"></i>
                            </div>
                            <div class="mr-5">{{ $crime_types_count }} Crime Types!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="{{ route('admin.crime_types.index') }}">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-success o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-fw fa-shopping-cart"></i>
                            </div>
                            <div class="mr-5">Cities</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-danger o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-fw fa-life-ring"></i>
                            </div>
                            <div class="mr-5">Coming soon</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Area Chart Example-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-chart-area"></i>
                    Area Chart Example</div>
                <div class="card-body">
                    <canvas id="myAreaChart" width="100%" height="30"></canvas>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Common Crime Types</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                            @foreach($crime_types as $crime_type)
                                <tr>
                                    <td>{{ $crime_type->type }}</td>
                                    <td>{{ $crime_type->detail }}</td>
                                    <td>{{ $crime_type->IPC }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

        </div>
        <!-- /.container-fluid -->

        @include('admin.components.footer')

    </div>
    <!-- /.content-wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
@endsection
