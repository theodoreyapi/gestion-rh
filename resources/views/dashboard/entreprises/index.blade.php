@extends('layouts.master', [
    'title' => 'Tableau de bord',
])

@push('csss')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/all.min.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap-datetimepicker.min.css">

    <!-- Bootstrap Tagsinput CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

    <!-- Summernote CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/summernote/summernote-lite.min.css">

    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.css">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/@simonwep/pickr/themes/nano.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/style.css">
@endpush

@push('scripts')
    <!-- Slimscroll JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.slimscroll.min.js"></script>

    <!-- Chart JS -->
    <script src="{{ URL::asset('') }}assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="{{ URL::asset('') }}assets/plugins/apexchart/chart-data.js"></script>

    <!-- Chart JS -->
    <script src="{{ URL::asset('') }}assets/plugins/chartjs/chart.min.js"></script>
    <script src="{{ URL::asset('') }}assets/plugins/chartjs/chart-data.js"></script>

    <!-- Datetimepicker JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.js"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js"></script>

    <!-- Summernote JS -->
    <script src="{{ URL::asset('') }}assets/plugins/summernote/summernote-lite.min.js"></script>

    <!-- Bootstrap Tagsinput JS -->
    <script src="{{ URL::asset('') }}assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js"></script>

    <!-- Color Picker JS -->
    <script src="{{ URL::asset('') }}assets/plugins/@simonwep/pickr/pickr.es5.min.js"></script>

    <!-- Custom JS -->
    <script src="{{ URL::asset('') }}assets/js/todo.js"></script>
    <script src="{{ URL::asset('') }}assets/js/theme-colorpicker.js"></script>
    <script src="{{ URL::asset('') }}assets/js/script.js"></script>
@endpush

@section('content')
    <div class="content">
        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Tableau de bord</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="#"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            Tableau de bord
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Tableau de bord Admin</li>
                    </ol>
                </nav>
            </div>
            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                <div class="mb-2">
                    <div class="input-icon w-120 position-relative">
                        <span class="input-icon-addon">
                            <i class="ti ti-calendar text-gray-9"></i>
                        </span>
                        <input type="text" class="form-control yearpicker" value="2025">
                    </div>
                </div>
                <div class="ms-2 head-icons">
                    <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                        data-bs-original-title="Collapse" id="collapse-header">
                        <i class="ti ti-chevrons-up"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /Breadcrumb -->

        <!-- Welcome Wrap -->
        <div class="card border-0">
            <div class="card-body d-flex align-items-center justify-content-between flex-wrap pb-1">
                <div class="d-flex align-items-center mb-3">
                    <span class="avatar avatar-xl flex-shrink-0">
                        <img src="{{ URL::asset('') }}assets/img/profiles/avatar-31.jpg" class="rounded-circle"
                            alt="img">
                    </span>
                    <div class="ms-3">
                        <h3 class="mb-2">Bienvenue, Yapi <a href="javascript:void(0);" class="edit-icon"><i
                                    class="ti ti-edit fs-14"></i></a></h3>
                        <p>You have <span class="text-primary text-decoration-underline">21</span> Pending
                            Approvals & <span class="text-primary text-decoration-underline">14</span> Leave
                            Requests</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Welcome Wrap -->

        <div class="row">

            <!-- Widget Info -->
            <div class="col-xxl-6 d-flex">
                <div class="row flex-fill">
                    <div class="col-md-6">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <span class="avatar rounded-circle bg-primary mb-2">
                                    <i class="ti ti-calendar-share fs-16"></i>
                                </span>
                                <h6 class="fs-13 fw-medium text-default mb-1">Attendance Overview</h6>
                                <h3 class="mb-3">120/154 <span class="fs-12 fw-medium text-success"><i
                                            class="fa-solid fa-caret-up me-1"></i>+2.1%</span></h3>
                                <a href="attendance-employee.html" class="link-default">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <span class="avatar rounded-circle bg-dark mb-2">
                                    <i class="ti ti-user-star fs-16"></i>
                                </span>
                                <h6 class="fs-13 fw-medium text-default mb-1">New Hire</h6>
                                <h3 class="mb-3">45/48 <span class="fs-12 fw-medium text-danger"><i
                                            class="fa-solid fa-caret-down me-1"></i>-11.2%</span></h3>
                                <a href="candidates.html" class="link-default">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Widget Info -->

            <!-- Employees By Department -->
            <div class="col-xxl-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-header pb-2 d-flex align-items-center justify-content-between flex-wrap">
                        <h5 class="mb-2">Employees By Department</h5>
                        <div class="dropdown mb-2">
                            <a href="javascript:void(0);"
                                class="btn btn-white border btn-sm d-inline-flex align-items-center"
                                data-bs-toggle="dropdown">
                                <i class="ti ti-calendar me-1"></i>This Week
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">This
                                        Month</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">This
                                        Week</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Last
                                        Week</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="emp-department"></div>
                        <p class="fs-13"><i class="ti ti-circle-filled me-2 fs-8 text-primary"></i>No of
                            Employees increased by <span class="text-success fw-bold">+20%</span> from last
                            Week
                        </p>
                    </div>
                </div>
            </div>
            <!-- /Employees By Department -->

        </div>

        <div class="row">

            <!-- Total Employee -->
            <div class="col-xxl-4 d-flex">
                <div class="card flex-fill">
                    <div class="card-header pb-2 d-flex align-items-center justify-content-between flex-wrap">
                        <h5 class="mb-2">Employee Status</h5>
                        <div class="dropdown mb-2">
                            <a href="javascript:void(0);"
                                class="btn btn-white border btn-sm d-inline-flex align-items-center"
                                data-bs-toggle="dropdown">
                                <i class="ti ti-calendar me-1"></i>This Week
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">This
                                        Month</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">This
                                        Week</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Today</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <p class="fs-13 mb-3">Total Employee</p>
                            <h3 class="mb-3">154</h3>
                        </div>
                        <div class="progress-stacked emp-stack mb-3">
                            <div class="progress" role="progressbar" aria-label="Segment one" aria-valuenow="15"
                                aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                <div class="progress-bar bg-warning"></div>
                            </div>
                            <div class="progress" role="progressbar" aria-label="Segment two" aria-valuenow="30"
                                aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                <div class="progress-bar bg-secondary"></div>
                            </div>
                            <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="20"
                                aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                <div class="progress-bar bg-danger"></div>
                            </div>
                            <div class="progress" role="progressbar" aria-label="Segment four" aria-valuenow="20"
                                aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                <div class="progress-bar bg-pink"></div>
                            </div>
                        </div>
                        <div class="border mb-3">
                            <div class="row gx-0">
                                <div class="col-6">
                                    <div class="p-2 flex-fill border-end border-bottom">
                                        <p class="fs-13 mb-2"><i
                                                class="ti ti-square-filled text-primary fs-12 me-2"></i>Fulltime
                                            <span class="text-gray-9">(48%)</span>
                                        </p>
                                        <h2 class="display-1">112</h2>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="p-2 flex-fill border-bottom text-end">
                                        <p class="fs-13 mb-2"><i
                                                class="ti ti-square-filled me-2 text-secondary fs-12"></i>Contract
                                            <span class="text-gray-9">(20%)</span>
                                        </p>
                                        <h2 class="display-1">112</h2>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="p-2 flex-fill border-end">
                                        <p class="fs-13 mb-2"><i
                                                class="ti ti-square-filled me-2 text-danger fs-12"></i>Probation
                                            <span class="text-gray-9">(22%)</span>
                                        </p>
                                        <h2 class="display-1">12</h2>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="p-2 flex-fill text-end">
                                        <p class="fs-13 mb-2"><i class="ti ti-square-filled text-pink me-2 fs-12"></i>WFH
                                            <span class="text-gray-9">(20%)</span>
                                        </p>
                                        <h2 class="display-1">04</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h6 class="mb-2">Top Performer</h6>
                        <div
                            class="p-2 d-flex align-items-center justify-content-between border border-primary bg-primary-100 br-5 mb-4">
                            <div class="d-flex align-items-center overflow-hidden">
                                <span class="me-2">
                                    <i class="ti ti-award-filled text-primary fs-24"></i>
                                </span>
                                <a href="employee-details.html" class="avatar avatar-md me-2">
                                    <img src="{{ URL::asset('') }}assets/img/profiles/avatar-24.jpg"
                                        class="rounded-circle border border-white" alt="img">
                                </a>
                                <div>
                                    <h6 class="text-truncate mb-1 fs-14 fw-medium"><a href="employee-details.html">Daniel
                                            Esbella</a></h6>
                                    <p class="fs-13">IOS Developer</p>
                                </div>
                            </div>
                            <div class="text-end">
                                <p class="fs-13 mb-1">Performance</p>
                                <h5 class="text-primary">99%</h5>
                            </div>
                        </div>
                        <a href="employees.html" class="btn btn-light btn-md w-100">View All Employees</a>
                    </div>
                </div>
            </div>
            <!-- /Total Employee -->

            <!-- Attendance Overview -->
            <div class="col-xxl-4 col-xl-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-header pb-2 d-flex align-items-center justify-content-between flex-wrap">
                        <h5 class="mb-2">Attendance Overview</h5>
                        <div class="dropdown mb-2">
                            <a href="javascript:void(0);"
                                class="btn btn-white border btn-sm d-inline-flex align-items-center"
                                data-bs-toggle="dropdown">
                                <i class="ti ti-calendar me-1"></i>Today
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">This
                                        Month</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">This
                                        Week</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Today</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chartjs-wrapper-demo position-relative mb-4">
                            <canvas id="attendance" height="200"></canvas>
                            <div class="position-absolute text-center attendance-canvas">
                                <p class="fs-13 mb-1">Total Attendance</p>
                                <h3>120</h3>
                            </div>
                        </div>
                        <h6 class="mb-3">Status</h6>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="f-13 mb-2"><i class="ti ti-circle-filled text-success me-1"></i>Present</p>
                            <p class="f-13 fw-medium text-gray-9 mb-2">59%</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="f-13 mb-2"><i class="ti ti-circle-filled text-secondary me-1"></i>Late
                            </p>
                            <p class="f-13 fw-medium text-gray-9 mb-2">21%</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="f-13 mb-2"><i class="ti ti-circle-filled text-warning me-1"></i>Permission</p>
                            <p class="f-13 fw-medium text-gray-9 mb-2">2%</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <p class="f-13 mb-2"><i class="ti ti-circle-filled text-danger me-1"></i>Absent
                            </p>
                            <p class="f-13 fw-medium text-gray-9 mb-2">15%</p>
                        </div>
                        <div
                            class="bg-light br-5 box-shadow-xs p-2 pb-0 d-flex align-items-center justify-content-between flex-wrap">
                            <div class="d-flex align-items-center">
                                <p class="mb-2 me-2">Total Absenties</p>
                                <div class="avatar-list-stacked avatar-group-sm mb-2">
                                    <span class="avatar avatar-rounded">
                                        <img class="border border-white"
                                            src="{{ URL::asset('') }}assets/img/profiles/avatar-27.jpg" alt="img">
                                    </span>
                                    <span class="avatar avatar-rounded">
                                        <img class="border border-white"
                                            src="{{ URL::asset('') }}assets/img/profiles/avatar-30.jpg" alt="img">
                                    </span>
                                    <span class="avatar avatar-rounded">
                                        <img src="{{ URL::asset('') }}assets/img/profiles/avatar-14.jpg" alt="img">
                                    </span>
                                    <span class="avatar avatar-rounded">
                                        <img src="{{ URL::asset('') }}assets/img/profiles/avatar-29.jpg" alt="img">
                                    </span>
                                    <a class="avatar bg-primary avatar-rounded text-fixed-white fs-10"
                                        href="javascript:void(0);">
                                        +1
                                    </a>
                                </div>
                            </div>
                            <a href="leaves.html" class="fs-13 link-primary text-decoration-underline mb-2">View
                                Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Attendance Overview -->

            <!-- Clock-In/Out -->
            <div class="col-xxl-4 col-xl-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-header pb-2 d-flex align-items-center justify-content-between flex-wrap">
                        <h5 class="mb-2">Clock-In/Out</h5>
                        <div class="d-flex align-items-center">
                            <div class="dropdown mb-2">
                                <a href="javascript:void(0);"
                                    class="dropdown-toggle btn btn-white btn-sm d-inline-flex align-items-center border-0 fs-13 me-2"
                                    data-bs-toggle="dropdown">
                                    All Departments
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Finance</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Development</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Marketing</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown mb-2">
                                <a href="javascript:void(0);"
                                    class="btn btn-white border btn-sm d-inline-flex align-items-center"
                                    data-bs-toggle="dropdown">
                                    <i class="ti ti-calendar me-1"></i>Today
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This
                                            Month</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This
                                            Week</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Today</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div>
                            <div
                                class="d-flex align-items-center justify-content-between mb-3 p-2 border border-dashed br-5">
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar flex-shrink-0">
                                        <img src="{{ URL::asset('') }}assets/img/profiles/avatar-24.jpg"
                                            class="rounded-circle border border-2" alt="img">
                                    </a>
                                    <div class="ms-2">
                                        <h6 class="fs-14 fw-medium text-truncate">Daniel Esbella</h6>
                                        <p class="fs-13">UI/UX Designer</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="link-default me-2"><i
                                            class="ti ti-clock-share"></i></a>
                                    <span class="fs-10 fw-medium d-inline-flex align-items-center badge badge-success"><i
                                            class="ti ti-circle-filled fs-5 me-1"></i>09:15</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-3 p-2 border br-5">
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar flex-shrink-0">
                                        <img src="{{ URL::asset('') }}assets/img/profiles/avatar-23.jpg"
                                            class="rounded-circle border border-2" alt="img">
                                    </a>
                                    <div class="ms-2">
                                        <h6 class="fs-14 fw-medium">Doglas Martini</h6>
                                        <p class="fs-13">Project Manager</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="link-default me-2"><i
                                            class="ti ti-clock-share"></i></a>
                                    <span class="fs-10 fw-medium d-inline-flex align-items-center badge badge-success"><i
                                            class="ti ti-circle-filled fs-5 me-1"></i>09:36</span>
                                </div>
                            </div>
                            <div class="mb-3 p-2 border br-5">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar flex-shrink-0">
                                            <img src="{{ URL::asset('') }}assets/img/profiles/avatar-27.jpg"
                                                class="rounded-circle border border-2" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fs-14 fw-medium text-truncate">Brian Villalobos</h6>
                                            <p class="fs-13">PHP Developer</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="link-default me-2"><i
                                                class="ti ti-clock-share"></i></a>
                                        <span
                                            class="fs-10 fw-medium d-inline-flex align-items-center badge badge-success"><i
                                                class="ti ti-circle-filled fs-5 me-1"></i>09:15</span>
                                    </div>
                                </div>
                                <div
                                    class="d-flex align-items-center justify-content-between flex-wrap mt-2 border br-5 p-2 pb-0">
                                    <div>
                                        <p class="mb-1 d-inline-flex align-items-center"><i
                                                class="ti ti-circle-filled text-success fs-5 me-1"></i>Clock
                                            In</p>
                                        <h6 class="fs-13 fw-normal mb-2">10:30 AM</h6>
                                    </div>
                                    <div>
                                        <p class="mb-1 d-inline-flex align-items-center"><i
                                                class="ti ti-circle-filled text-danger fs-5 me-1"></i>Clock
                                            Out</p>
                                        <h6 class="fs-13 fw-normal mb-2">09:45 AM</h6>
                                    </div>
                                    <div>
                                        <p class="mb-1 d-inline-flex align-items-center"><i
                                                class="ti ti-circle-filled text-warning fs-5 me-1"></i>Production
                                        </p>
                                        <h6 class="fs-13 fw-normal mb-2">09:21 Hrs</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h6 class="mb-2">Late</h6>
                        <div class="d-flex align-items-center justify-content-between mb-3 p-2 border border-dashed br-5">
                            <div class="d-flex align-items-center">
                                <span class="avatar flex-shrink-0">
                                    <img src="{{ URL::asset('') }}assets/img/profiles/avatar-29.jpg"
                                        class="rounded-circle border border-2" alt="img">
                                </span>
                                <div class="ms-2">
                                    <h6 class="fs-14 fw-medium text-truncate">Anthony Lewis <span
                                            class="fs-10 fw-medium d-inline-flex align-items-center badge badge-success"><i
                                                class="ti ti-clock-hour-11 me-1"></i>30 Min</span></h6>
                                    <p class="fs-13">Marketing Head</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="link-default me-2"><i
                                        class="ti ti-clock-share"></i></a>
                                <span class="fs-10 fw-medium d-inline-flex align-items-center badge badge-danger"><i
                                        class="ti ti-circle-filled fs-5 me-1"></i>08:35</span>
                            </div>
                        </div>
                        <a href="attendance-report.html" class="btn btn-light btn-md w-100">View All
                            Attendance</a>
                    </div>
                </div>
            </div>
            <!-- /Clock-In/Out -->

        </div>

        <div class="row">
            <div class="col-xxl-4 col-xl-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-header pb-2 d-flex align-items-center justify-content-between flex-wrap">
                        <h5 class="mb-2">Employees</h5>
                        <a href="employees.html" class="btn btn-light btn-md mb-2">View All</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Department</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" class="avatar">
                                                    <img src="{{ URL::asset('') }}assets/img/users/user-32.jpg"
                                                        class="img-fluid rounded-circle" alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="javascript:void(0);">Anthony Lewis</a>
                                                    </h6>
                                                    <span class="fs-12">Finance</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-secondary-transparent badge-xs">
                                                Finance
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="avatar">
                                                    <img src="{{ URL::asset('') }}assets/img/users/user-09.jpg"
                                                        class="img-fluid rounded-circle" alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="#">Brian
                                                            Villalobos</a></h6>
                                                    <span class="fs-12">PHP Developer</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-danger-transparent badge-xs">Development</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="avatar">
                                                    <img src="{{ URL::asset('') }}assets/img/users/user-01.jpg"
                                                        class="img-fluid rounded-circle" alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="#">Stephan
                                                            Peralt</a></h6>
                                                    <span class="fs-12">Executive</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-info-transparent badge-xs">Marketing</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" class="avatar">
                                                    <img src="{{ URL::asset('') }}assets/img/users/user-34.jpg"
                                                        class="img-fluid rounded-circle" alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="javascript:void(0);">Doglas Martini</a>
                                                    </h6>
                                                    <span class="fs-12">Project Manager</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-purple-transparent badge-xs">Manager</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-0">
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" class="avatar">
                                                    <img src="{{ URL::asset('') }}assets/img/users/user-37.jpg"
                                                        class="img-fluid rounded-circle" alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="javascript:void(0);">Anthony Lewis</a>
                                                    </h6>
                                                    <span class="fs-12">UI/UX Designer</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="border-0">
                                            <span class="badge badge-pink-transparent badge-xs">UI/UX
                                                Design</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activities -->
            <div class="col-xxl-4 col-xl-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-header pb-2 d-flex align-items-center justify-content-between flex-wrap">
                        <h5 class="mb-2">Recent Activities</h5>
                        <a href="activity.html" class="btn btn-light btn-md mb-2">View All</a>
                    </div>
                    <div class="card-body">
                        <div class="recent-item">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center w-100">
                                    <a href="javscript:void(0);" class="avatar  flex-shrink-0">
                                        <img src="{{ URL::asset('') }}assets/img/users/user-38.jpg"
                                            class="rounded-circle" alt="img">
                                    </a>
                                    <div class="ms-2 flex-fill">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="fs-medium text-truncate"><a href="javscript:void(0);">Matt
                                                    Morgan</a></h6>
                                            <p class="fs-13">05:30 PM</p>
                                        </div>
                                        <p class="fs-13">Added New Project <span class="text-primary">HRMS
                                                Dashboard</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="recent-item">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center w-100">
                                    <a href="javscript:void(0);" class="avatar  flex-shrink-0">
                                        <img src="{{ URL::asset('') }}assets/img/users/user-01.jpg"
                                            class="rounded-circle" alt="img">
                                    </a>
                                    <div class="ms-2 flex-fill">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="fs-medium text-truncate"><a href="javscript:void(0);">Jay Ze</a>
                                            </h6>
                                            <p class="fs-13">05:00 PM</p>
                                        </div>
                                        <p class="fs-13">Commented on Uploaded Document</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="recent-item">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center w-100">
                                    <a href="javscript:void(0);" class="avatar  flex-shrink-0">
                                        <img src="{{ URL::asset('') }}assets/img/users/user-19.jpg"
                                            class="rounded-circle" alt="img">
                                    </a>
                                    <div class="ms-2 flex-fill">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="fs-medium text-truncate"><a href="javscript:void(0);">Mary
                                                    Donald</a></h6>
                                            <p class="fs-13">05:30 PM</p>
                                        </div>
                                        <p class="fs-13">Approved Task Projects</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="recent-item">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center w-100">
                                    <a href="javscript:void(0);" class="avatar  flex-shrink-0">
                                        <img src="{{ URL::asset('') }}assets/img/users/user-11.jpg"
                                            class="rounded-circle" alt="img">
                                    </a>
                                    <div class="ms-2 flex-fill">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="fs-medium text-truncate"><a href="javscript:void(0);">George
                                                    David</a></h6>
                                            <p class="fs-13">06:00 PM</p>
                                        </div>
                                        <p class="fs-13">Requesting Access to Module Tickets</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="recent-item">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center w-100">
                                    <a href="javscript:void(0);" class="avatar  flex-shrink-0">
                                        <img src="{{ URL::asset('') }}assets/img/users/user-20.jpg"
                                            class="rounded-circle" alt="img">
                                    </a>
                                    <div class="ms-2 flex-fill">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="fs-medium text-truncate"><a href="javscript:void(0);">Aaron
                                                    Zeen</a></h6>
                                            <p class="fs-13">06:30 PM</p>
                                        </div>
                                        <p class="fs-13">Downloaded App Reportss</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="recent-item">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center w-100">
                                    <a href="javscript:void(0);" class="avatar  flex-shrink-0">
                                        <img src="{{ URL::asset('') }}assets/img/users/user-08.jpg"
                                            class="rounded-circle" alt="img">
                                    </a>
                                    <div class="ms-2 flex-fill">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="fs-medium text-truncate"><a href="javscript:void(0);">Hendry
                                                    Daniel</a></h6>
                                            <p class="fs-13">05:30 PM</p>
                                        </div>
                                        <p class="fs-13">Completed New Project <span>HMS</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Recent Activities -->

            <!-- Birthdays -->
            <div class="col-xxl-4 col-xl-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-header pb-2 d-flex align-items-center justify-content-between flex-wrap">
                        <h5 class="mb-2">Birthdays</h5>
                        <a href="javascript:void(0);" class="btn btn-light btn-md mb-2">View All</a>
                    </div>
                    <div class="card-body pb-1">
                        <h6 class="mb-2">Today</h6>
                        <div class="bg-light p-2 border border-dashed rounded-top mb-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar">
                                        <img src="{{ URL::asset('') }}assets/img/users/user-38.jpg"
                                            class="rounded-circle" alt="img">
                                    </a>
                                    <div class="ms-2 overflow-hidden">
                                        <h6 class="fs-medium ">Andrew Jermia</h6>
                                        <p class="fs-13">IOS Developer</p>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="btn btn-secondary btn-xs"><i
                                        class="ti ti-cake me-1"></i>Send</a>
                            </div>
                        </div>
                        <h6 class="mb-2">Tomorow</h6>
                        <div class="bg-light p-2 border border-dashed rounded-top mb-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar">
                                        <img src="{{ URL::asset('') }}assets/img/users/user-10.jpg"
                                            class="rounded-circle" alt="img">
                                    </a>
                                    <div class="ms-2 overflow-hidden">
                                        <h6 class="fs-medium"><a href="javascript:void(0);">Mary Zeen</a>
                                        </h6>
                                        <p class="fs-13">UI/UX Designer</p>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="btn btn-secondary btn-xs"><i
                                        class="ti ti-cake me-1"></i>Send</a>
                            </div>
                        </div>
                        <div class="bg-light p-2 border border-dashed rounded-top mb-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar">
                                        <img src="{{ URL::asset('') }}assets/img/users/user-09.jpg"
                                            class="rounded-circle" alt="img">
                                    </a>
                                    <div class="ms-2 overflow-hidden">
                                        <h6 class="fs-medium "><a href="javascript:void(0);">Antony
                                                Lewis</a></h6>
                                        <p class="fs-13">Android Developer</p>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="btn btn-secondary btn-xs"><i
                                        class="ti ti-cake me-1"></i>Send</a>
                            </div>
                        </div>
                        <h6 class="mb-2">25 Jan 2025</h6>
                        <div class="bg-light p-2 border border-dashed rounded-top mb-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="avatar">
                                        <img src="{{ URL::asset('') }}assets/img/users/user-12.jpg"
                                            class="rounded-circle" alt="img">
                                    </span>
                                    <div class="ms-2 overflow-hidden">
                                        <h6 class="fs-medium ">Doglas Martini</h6>
                                        <p class="fs-13">.Net Developer</p>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="btn btn-secondary btn-xs"><i
                                        class="ti ti-cake me-1"></i>Send</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Birthdays -->

        </div>

    </div>
@endsection
