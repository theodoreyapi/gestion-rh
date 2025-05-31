@extends('layouts.master', [
    'title' => 'Tableau de bord',
])

@push('csss')
    <!-- Summernote CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/summernote/summernote-lite.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Bootstrap Tagsinput CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/all.min.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap-datetimepicker.min.css">

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
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js"></script>

    <!-- Chart JS -->
    <script src="{{ URL::asset('') }}assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="{{ URL::asset('') }}assets/plugins/apexchart/chart-data.js"></script>

    <!-- Datetimepicker JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.js"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Bootstrap Tagsinput JS -->
    <script src="{{ URL::asset('') }}assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- Summernote JS -->
    <script src="{{ URL::asset('') }}assets/plugins/summernote/summernote-lite.min.js"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js"></script>

    <!-- Color Picker JS -->
    <script src="{{ URL::asset('') }}assets/plugins/@simonwep/pickr/pickr.es5.min.js"></script>

    <!-- Custom JS -->
    <script src="{{ URL::asset('') }}assets/js/circle-progress.js"></script>
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
                            <a href="index"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            Tableau de bord
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Tableau de bord employé</li>
                    </ol>
                </nav>
            </div>
            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                <div class="input-icon w-120 position-relative mb-2">
                    <span class="input-icon-addon">
                        <i class="ti ti-calendar text-gray-9"></i>
                    </span>
                    <input type="text" class="form-control datetimepicker" value="15 Apr 2025">
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

        <div class="alert bg-secondary-transparent alert-dismissible fade show mb-4">
            Your Leave Request on“24th April 2024”has been Approved!!!
            <button type="button" class="btn-close fs-14" data-bs-dismiss="alert" aria-label="Close"><i
                    class="ti ti-x"></i></button>
        </div>
        <div class="row">
            <div class="col-xl-4 d-flex">
                <div class="card position-relative flex-fill">
                    <div class="card-header bg-dark">
                        <div class="d-flex align-items-center">
                            <span class="avatar avatar-lg avatar-rounded border border-white border-2 flex-shrink-0 me-2">
                                <img src="assets/img/users/user-01.jpg" alt="Img">
                            </span>
                            <div>
                                <h5 class="text-white mb-1">Stephan Peralt</h5>
                                <div class="d-flex align-items-center">
                                    <p class="text-white fs-12 mb-0">Senior Product Designer</p>
                                    <span class="mx-1"><i class="ti ti-point-filled text-primary"></i></span>
                                    <p class="fs-12">UI/UX Design</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-icon btn-sm text-white rounded-circle edit-top"><i
                                class="ti ti-edit"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <span class="d-block mb-1 fs-13">Phone Number</span>
                            <p class="text-gray-9">+1 324 3453 545</p>
                        </div>
                        <div class="mb-3">
                            <span class="d-block mb-1 fs-13">Email Address</span>
                            <p class="text-gray-9">Steperde124@example.com</p>
                        </div>
                        <div class="mb-3">
                            <span class="d-block mb-1 fs-13">Report Office</span>
                            <p class="text-gray-9">Doglas Martini</p>
                        </div>
                        <div>
                            <span class="d-block mb-1 fs-13">Joined on</span>
                            <p class="text-gray-9">15 Jan 2024</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                            <h5>Leave Details</h5>
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="btn btn-white border btn-sm d-inline-flex align-items-center"
                                    data-bs-toggle="dropdown">
                                    <i class="ti ti-calendar me-1"></i>2024
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">2024</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">2023</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">2022</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="mb-3">
                                        <p class="d-flex align-items-center"><i
                                                class="ti ti-circle-filled fs-8 text-dark me-1"></i>
                                            <span class="text-gray-9 fw-semibold me-1">1254</span>
                                            on time
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <p class="d-flex align-items-center"><i
                                                class="ti ti-circle-filled fs-8 text-success me-1"></i>
                                            <span class="text-gray-9 fw-semibold me-1">32</span>
                                            Late Attendance
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <p class="d-flex align-items-center"><i
                                                class="ti ti-circle-filled fs-8 text-primary me-1"></i>
                                            <span class="text-gray-9 fw-semibold me-1">658</span>
                                            Work From Home
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <p class="d-flex align-items-center"><i
                                                class="ti ti-circle-filled fs-8 text-danger me-1"></i>
                                            <span class="text-gray-9 fw-semibold me-1">14</span>
                                            Absent
                                        </p>
                                    </div>
                                    <div>
                                        <p class="d-flex align-items-center"><i
                                                class="ti ti-circle-filled fs-8 text-warning me-1"></i>
                                            <span class="text-gray-9 fw-semibold me-1">68</span>
                                            Sick Leave
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 d-flex justify-content-md-end">
                                    <div id="leaves_chart"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" id="todo1">
                                    <label class="form-check-label" for="todo1">Better than <span
                                            class="text-gray-9">85%</span> of Employees</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                            <h5>Leave Details</h5>
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="btn btn-white border btn-sm d-inline-flex align-items-center"
                                    data-bs-toggle="dropdown">
                                    <i class="ti ti-calendar me-1"></i>2024
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">2024</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">2023</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">2022</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <span class="d-block mb-1">Total Leaves</span>
                                    <h4>16</h4>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <span class="d-block mb-1">Taken</span>
                                    <h4>10</h4>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <span class="d-block mb-1">Absent</span>
                                    <h4>2</h4>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <span class="d-block mb-1">Request</span>
                                    <h4>0</h4>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <span class="d-block mb-1">Worked Days</span>
                                    <h4>240</h4>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <span class="d-block mb-1">Loss of Pay</span>
                                    <h4>2</h4>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div>
                                    <a href="#" class="btn btn-dark w-100" data-bs-toggle="modal"
                                        data-bs-target="#add_leaves">Apply New Leave</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 d-flex">
                <div class="card flex-fill border-primary attendance-bg">
                    <div class="card-body">
                        <div class="mb-4 text-center">
                            <h6 class="fw-medium text-gray-5 mb-1">Attendance</h6>
                            <h4>08:35 AM, 11 Mar 2025</h4>
                        </div>
                        <div class="attendance-circle-progress attendance-progress mx-auto mb-3" data-value='65'>
                            <span class="progress-left">
                                <span class="progress-bar border-success"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar border-success"></span>
                            </span>
                            <div class="total-work-hours text-center w-100">
                                <span class="fs-13 d-block mb-1">Total Hours</span>
                                <h6>5:45:32</h6>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="badge badge-dark badge-md mb-3">Production : 3.45 hrs</div>
                            <h6 class="fw-medium d-flex align-items-center justify-content-center mb-4">
                                <i class="ti ti-fingerprint text-primary me-1"></i>
                                Punch In at 10.00 AM
                            </h6>
                            <a href="#" class="btn btn-primary w-100">Punch Out</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 d-flex">
                <div class="row flex-fill">
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="border-bottom mb-3 pb-2">
                                    <span class="avatar avatar-sm bg-primary mb-2"><i class="ti ti-clock-stop"></i></span>
                                    <h2 class="mb-2">8.36 / <span class="fs-20 text-gray-5"> 9</span></h2>
                                    <p class="fw-medium text-truncate">Total Hours Today</p>
                                </div>
                                <div>
                                    <p class="d-flex align-items-center fs-13">
                                        <span class="avatar avatar-xs rounded-circle bg-success flex-shrink-0 me-2">
                                            <i class="ti ti-arrow-up fs-12"></i>
                                        </span>
                                        <span>5% This Week</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="border-bottom mb-3 pb-2">
                                    <span class="avatar avatar-sm bg-dark mb-2"><i class="ti ti-clock-up"></i></span>
                                    <h2 class="mb-2">10 / <span class="fs-20 text-gray-5"> 40</span></h2>
                                    <p class="fw-medium text-truncate">Total Hours Week</p>
                                </div>
                                <div>
                                    <p class="d-flex align-items-center fs-13">
                                        <span class="avatar avatar-xs rounded-circle bg-success flex-shrink-0 me-2">
                                            <i class="ti ti-arrow-up fs-12"></i>
                                        </span>
                                        <span>7% Last Week</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="border-bottom mb-3 pb-2">
                                    <span class="avatar avatar-sm bg-info mb-2"><i class="ti ti-calendar-up"></i></span>
                                    <h2 class="mb-2">75 / <span class="fs-20 text-gray-5"> 98</span></h2>
                                    <p class="fw-medium text-truncate">Total Hours Month</p>
                                </div>
                                <div>
                                    <p class="d-flex align-items-center fs-13 text-truncate">
                                        <span class="avatar avatar-xs rounded-circle bg-danger flex-shrink-0 me-2">
                                            <i class="ti ti-arrow-down fs-12"></i>
                                        </span>
                                        <span>8% Last Month</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="border-bottom mb-3 pb-2">
                                    <span class="avatar avatar-sm bg-pink mb-2"><i class="ti ti-calendar-star"></i></span>
                                    <h2 class="mb-2">16 / <span class="fs-20 text-gray-5"> 28</span></h2>
                                    <p class="fw-medium text-truncate">Overtime this Month</p>
                                </div>
                                <div>
                                    <p class="d-flex align-items-center fs-13 text-truncate">
                                        <span class="avatar avatar-xs rounded-circle bg-danger flex-shrink-0 me-2">
                                            <i class="ti ti-arrow-down fs-12"></i>
                                        </span>
                                        <span>6% Last Month</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-3">
                                        <div class="mb-4">
                                            <p class="d-flex align-items-center mb-1"><i
                                                    class="ti ti-point-filled text-dark-transparent me-1"></i>Total Working
                                                hours</p>
                                            <h3>12h 36m</h3>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="mb-4">
                                            <p class="d-flex align-items-center mb-1"><i
                                                    class="ti ti-point-filled text-success me-1"></i>Productive Hours</p>
                                            <h3>08h 36m</h3>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="mb-4">
                                            <p class="d-flex align-items-center mb-1"><i
                                                    class="ti ti-point-filled text-warning me-1"></i>Break hours</p>
                                            <h3>22m 15s</h3>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="mb-4">
                                            <p class="d-flex align-items-center mb-1"><i
                                                    class="ti ti-point-filled text-info me-1"></i>Overtime</p>
                                            <h3>02h 15m</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="progress bg-transparent-dark mb-3" style="height: 24px;">
                                            <div class="progress-bar bg-white rounded" role="progressbar"
                                                style="width: 18%;"></div>
                                            <div class="progress-bar bg-success rounded me-2" role="progressbar"
                                                style="width: 18%;"></div>
                                            <div class="progress-bar bg-warning rounded me-2" role="progressbar"
                                                style="width: 5%;"></div>
                                            <div class="progress-bar bg-success rounded me-2" role="progressbar"
                                                style="width: 28%;"></div>
                                            <div class="progress-bar bg-warning rounded me-2" role="progressbar"
                                                style="width: 17%;"></div>
                                            <div class="progress-bar bg-success rounded me-2" role="progressbar"
                                                style="width: 22%;"></div>
                                            <div class="progress-bar bg-warning rounded me-2" role="progressbar"
                                                style="width: 5%;"></div>
                                            <div class="progress-bar bg-info rounded me-2" role="progressbar"
                                                style="width: 3%;"></div>
                                            <div class="progress-bar bg-info rounded" role="progressbar"
                                                style="width: 2%;"></div>
                                            <div class="progress-bar bg-white rounded" role="progressbar"
                                                style="width: 18%;"></div>
                                        </div>

                                    </div>
                                    <div class="co-md-12">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                            <span class="fs-10">06:00</span>
                                            <span class="fs-10">07:00</span>
                                            <span class="fs-10">08:00</span>
                                            <span class="fs-10">09:00</span>
                                            <span class="fs-10">10:00</span>
                                            <span class="fs-10">11:00</span>
                                            <span class="fs-10">12:00</span>
                                            <span class="fs-10">01:00</span>
                                            <span class="fs-10">02:00</span>
                                            <span class="fs-10">03:00</span>
                                            <span class="fs-10">04:00</span>
                                            <span class="fs-10">05:00</span>
                                            <span class="fs-10">06:00</span>
                                            <span class="fs-10">07:00</span>
                                            <span class="fs-10">08:00</span>
                                            <span class="fs-10">09:00</span>
                                            <span class="fs-10">10:00</span>
                                            <span class="fs-10">11:00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-5 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                            <h5>Performance</h5>
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="btn btn-white border btn-sm d-inline-flex align-items-center"
                                    data-bs-toggle="dropdown">
                                    <i class="ti ti-calendar me-1"></i>2024
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">2024</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">2023</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">2022</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="bg-light d-flex align-items-center rounded p-2">
                                <h3 class="me-2">98%</h3>
                                <span
                                    class="badge badge-outline-success bg-success-transparent rounded-pill me-1">12%</span>
                                <span>vs last years</span>
                            </div>
                            <div id="performance_chart2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                            <h5>My Skills</h5>
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="btn btn-white border btn-sm d-inline-flex align-items-center"
                                    data-bs-toggle="dropdown">
                                    <i class="ti ti-calendar me-1"></i>2024
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">2024</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">2023</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">2022</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="border border-dashed bg-transparent-light rounded p-2 mb-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <span class="d-block border border-2 h-12 border-primary rounded-5 me-2"></span>
                                        <div>
                                            <h6 class="fw-medium mb-1">Figma</h6>
                                            <p>Updated : 15 May 2025</p>
                                        </div>
                                    </div>
                                    <div class="circle-progress circle-progress-md" data-value='95'>
                                        <span class="progress-left">
                                            <span class="progress-bar border-primary"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar border-primary"></span>
                                        </span>
                                        <div class="progress-value">95%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="border border-dashed bg-transparent-light rounded p-2 mb-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <span class="d-block border border-2 h-12 border-success rounded-5 me-2"></span>
                                        <div>
                                            <h6 class="fw-medium mb-1">HTML</h6>
                                            <p>Updated : 12 May 2025</p>
                                        </div>
                                    </div>
                                    <div class="circle-progress circle-progress-md" data-value='85'>
                                        <span class="progress-left">
                                            <span class="progress-bar border-success"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar border-success"></span>
                                        </span>
                                        <div class="progress-value">85%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="border border-dashed bg-transparent-light rounded p-2 mb-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <span class="d-block border border-2 h-12 border-purple rounded-5 me-2"></span>
                                        <div>
                                            <h6 class="fw-medium mb-1">CSS</h6>
                                            <p>Updated : 12 May 2025</p>
                                        </div>
                                    </div>
                                    <div class="circle-progress circle-progress-md" data-value='70'>
                                        <span class="progress-left">
                                            <span class="progress-bar border-purple"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar border-purple"></span>
                                        </span>
                                        <div class="progress-value">70%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="border border-dashed bg-transparent-light rounded p-2 mb-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <span class="d-block border border-2 h-12 border-info rounded-5 me-2"></span>
                                        <div>
                                            <h6 class="fw-medium mb-1">Wordpress</h6>
                                            <p>Updated : 15 May 2025</p>
                                        </div>
                                    </div>
                                    <div class="circle-progress circle-progress-md" data-value='61'>
                                        <span class="progress-left">
                                            <span class="progress-bar border-info"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar border-info"></span>
                                        </span>
                                        <div class="progress-value">61%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="border border-dashed bg-transparent-light rounded p-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <span class="d-block border border-2 h-12 border-dark rounded-5 me-2"></span>
                                        <div>
                                            <h6 class="fw-medium mb-1">Javascript</h6>
                                            <p>Updated : 13 May 2025</p>
                                        </div>
                                    </div>
                                    <div class="circle-progress circle-progress-md" data-value='58'>
                                        <span class="progress-left">
                                            <span class="progress-bar border-dark"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar border-dark"></span>
                                        </span>
                                        <div class="progress-value">58%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 d-flex">
                <div class="flex-fill">
                    <div class="card card-bg-5 bg-dark mb-3">
                        <div class="card-body">
                            <div class="text-center">
                                <h5 class="text-white mb-4">Team Birthday</h5>
                                <span class="avatar avatar-xl avatar-rounded mb-2">
                                    <img src="assets/img/users/user-35.jpg" alt="Img">
                                </span>
                                <div class="mb-3">
                                    <h6 class="text-white fw-medium mb-1">Andrew Jermia</h6>
                                    <p>IOS Developer</p>
                                </div>
                                <a href="#" class="btn btn-sm btn-primary">Send Wishes</a>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-secondary mb-3">
                        <div class="card-body d-flex align-items-center justify-content-between p-3">
                            <div>
                                <h5 class="text-white mb-1">Leave Policy</h5>
                                <p class="text-white">Last Updated : Today</p>
                            </div>
                            <a href="#" class="btn btn-white btn-sm px-3">View All</a>
                        </div>
                    </div>
                    <div class="card bg-warning">
                        <div class="card-body d-flex align-items-center justify-content-between p-3">
                            <div>
                                <h5 class="mb-1">Next Holiday</h5>
                                <p class="text-gray-9">Diwali, 15 Sep 2025</p>
                            </div>
                            <a href="holidays.html" class="btn btn-white btn-sm px-3">View All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <h5>Team Members</h5>
                            <div>
                                <a href="#" class="btn btn-light btn-sm">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="avatar flex-shrink-0">
                                    <img src="assets/img/users/user-27.jpg" class="rounded-circle border border-2"
                                        alt="img">
                                </a>
                                <div class="ms-2">
                                    <h6 class="fs-14 fw-medium text-truncate mb-1"><a href="#">Alexander Jermai</a>
                                    </h6>
                                    <p class="fs-13">UI/UX Designer</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="#" class="btn btn-light btn-icon btn-sm me-2"><i
                                        class="ti ti-phone fs-16"></i></a>
                                <a href="#" class="btn btn-light btn-icon btn-sm me-2"><i
                                        class="ti ti-mail-bolt fs-16"></i></a>
                                <a href="#" class="btn btn-light btn-icon btn-sm"><i
                                        class="ti ti-brand-hipchat fs-16"></i></a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="avatar flex-shrink-0">
                                    <img src="assets/img/users/user-42.jpg" class="rounded-circle border border-2"
                                        alt="img">
                                </a>
                                <div class="ms-2">
                                    <h6 class="fs-14 fw-medium text-truncate mb-1"><a href="#">Doglas Martini</a>
                                    </h6>
                                    <p class="fs-13">Product Designer</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="#" class="btn btn-light btn-icon btn-sm me-2"><i
                                        class="ti ti-phone fs-16"></i></a>
                                <a href="#" class="btn btn-light btn-icon btn-sm me-2"><i
                                        class="ti ti-mail-bolt fs-16"></i></a>
                                <a href="#" class="btn btn-light btn-icon btn-sm"><i
                                        class="ti ti-brand-hipchat fs-16"></i></a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="avatar flex-shrink-0">
                                    <img src="assets/img/users/user-43.jpg" class="rounded-circle border border-2"
                                        alt="img">
                                </a>
                                <div class="ms-2">
                                    <h6 class="fs-14 fw-medium text-truncate mb-1"><a href="#">Daniel Esbella</a>
                                    </h6>
                                    <p class="fs-13">Project Manager</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="#" class="btn btn-light btn-icon btn-sm me-2"><i
                                        class="ti ti-phone fs-16"></i></a>
                                <a href="#" class="btn btn-light btn-icon btn-sm me-2"><i
                                        class="ti ti-mail-bolt fs-16"></i></a>
                                <a href="#" class="btn btn-light btn-icon btn-sm"><i
                                        class="ti ti-brand-hipchat fs-16"></i></a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="avatar flex-shrink-0">
                                    <img src="assets/img/users/user-11.jpg" class="rounded-circle border border-2"
                                        alt="img">
                                </a>
                                <div class="ms-2">
                                    <h6 class="fs-14 fw-medium text-truncate mb-1"><a href="#">Daniel Esbella</a>
                                    </h6>
                                    <p class="fs-13">Team Lead</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="#" class="btn btn-light btn-icon btn-sm me-2"><i
                                        class="ti ti-phone fs-16"></i></a>
                                <a href="#" class="btn btn-light btn-icon btn-sm me-2"><i
                                        class="ti ti-mail-bolt fs-16"></i></a>
                                <a href="#" class="btn btn-light btn-icon btn-sm"><i
                                        class="ti ti-brand-hipchat fs-16"></i></a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="avatar flex-shrink-0">
                                    <img src="assets/img/users/user-44.jpg" class="rounded-circle border border-2"
                                        alt="img">
                                </a>
                                <div class="ms-2">
                                    <h6 class="fs-14 fw-medium text-truncate mb-1"><a href="#">Stephan Peralt</a>
                                    </h6>
                                    <p class="fs-13">Team Lead</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="#" class="btn btn-light btn-icon btn-sm me-2"><i
                                        class="ti ti-phone fs-16"></i></a>
                                <a href="#" class="btn btn-light btn-icon btn-sm me-2"><i
                                        class="ti ti-mail-bolt fs-16"></i></a>
                                <a href="#" class="btn btn-light btn-icon btn-sm"><i
                                        class="ti ti-brand-hipchat fs-16"></i></a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="avatar flex-shrink-0">
                                    <img src="assets/img/users/user-54.jpg" class="rounded-circle border border-2"
                                        alt="img">
                                </a>
                                <div class="ms-2">
                                    <h6 class="fs-14 fw-medium text-truncate mb-1"><a href="#">Andrew Jermia</a>
                                    </h6>
                                    <p class="fs-13">Project Lead</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="#" class="btn btn-light btn-icon btn-sm me-2"><i
                                        class="ti ti-phone fs-16"></i></a>
                                <a href="#" class="btn btn-light btn-icon btn-sm me-2"><i
                                        class="ti ti-mail-bolt fs-16"></i></a>
                                <a href="#" class="btn btn-light btn-icon btn-sm"><i
                                        class="ti ti-brand-hipchat fs-16"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
