@extends('layouts.layout')
@section('title', 'Dashboard')
@section('container')
    {{--
    <h1>Welcome, Admin</h1>
    <form method="POST" action="{{ route('admin.logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form> --}}
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                            <h3 class="font-weight-bold">Welcome Admin</h3>
                            <!-- <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span
                                        class="text-primary">3 unread alerts!</span></h6> -->
                        </div>
                        <div class="col-12 col-xl-4">
                            <div class="justify-content-end d-flex">
                                <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                    <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <?php
                                        $now = new DateTime();
                                        $formattedDate = $now->format('d M Y');
                                        ?>
                                        <i class="mdi mdi-calendar"></i> Today ( {{ $formattedDate }} ) </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                                        <a class="dropdown-item" href="#">January - March</a>
                                        <a class="dropdown-item" href="#">March - June</a>
                                        <a class="dropdown-item" href="#">June - August</a>
                                        <a class="dropdown-item" href="#">August - November</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card tale-bg">
                        <div class="card-people mt-auto">
                            <img src="{{ asset('assets2/images/dashboard/people.svg') }}" alt="people">
                            <div class="weather-info">
                                <div class="d-flex">
                                    <div>
                                        <h2 class="mb-0 font-weight-normal"><i class="icon-sun me-2"></i>31<sup>C</sup></h2>
                                    </div>
                                    <div class="ms-2">
                                        <h4 class="location font-weight-normal">India</h4>
                                        <h6 class="font-weight-normal">Haryana</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 grid-margin transparent">
                    <div class="row">
                        <div class="col-md-6 mb-4 stretch-card transparent">
                            <div class="card card-tale">
                                <div class="card-body">
                                    <p class="mb-4 fs-5">Total Users</p>
                                    <p class="fs-30 mb-2">{{ $userCount }}</p>
                                    <!-- <p>10.00% (30 days)</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 stretch-card transparent">
                            <div class="card card-dark-blue">
                                <div class="card-body">
                                    <p class="mb-4 fs-5">Total Bookings</p>
                                    <p class="fs-30 mb-2">61344</p>
                                    <!-- <p>22.00% (30 days)</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                            <div class="card card-light-blue">
                                <div class="card-body">
                                    <p class="mb-4">Total Type Package1</p>
                                    <p class="fs-30 mb-2">{{ $package1Count }}</p>
                                    <!-- <p>2.00% (30 days)</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 stretch-card transparent">
                            <div class="card card-light-danger">
                                <div class="card-body">
                                    <p class="mb-4">Total Type Package2</p>
                                    <p class="fs-30 mb-2">{{ $package2Count }}</p>
                                    <!-- <p>0.22% (30 days)</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <p class="card-title">Sales Report</p>
                                    <a href="#" class="text-info">View all</a>
                                </div>
                                <p class="font-weight-500">The total number of sessions within the date range. It is the period
                                    time a
                                    user is actively engaged with your website, page or app, etc</p>
                                <div id="sales-chart-legend" class="chartjs-legend mt-4 mb-2"></div>
                                <canvas id="sales-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div> -->
            <!-- <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card position-relative">
                            <div class="card-body">
                                <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2"
                                    data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="row">
                                                <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                                                    <div class="ml-xl-4 mt-3">
                                                        <p class="card-title">Detailed Reports</p>
                                                        <h1 class="text-primary">$34040</h1>
                                                        <h3 class="font-weight-500 mb-xl-4 text-primary">North America</h3>
                                                        <p class="mb-2 mb-xl-0">The total number of sessions within the date
                                                            range. It is the
                                                            period time a user is actively engaged with your website, page or
                                                            app, etc</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-xl-9">
                                                    <div class="row">
                                                        <div class="col-md-6 border-right">
                                                            <div class="table-responsive mb-3 mb-md-0 mt-3">
                                                                <table class="table table-borderless report-table">
                                                                    <tr>
                                                                        <td class="text-muted">Illinois</td>
                                                                        <td class="w-100 px-0">
                                                                            <div class="progress progress-md mx-4">
                                                                                <div class="progress-bar bg-primary"
                                                                                    role="progressbar" style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <h5 class="font-weight-bold mb-0">713</h5>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-muted">Washington</td>
                                                                        <td class="w-100 px-0">
                                                                            <div class="progress progress-md mx-4">
                                                                                <div class="progress-bar bg-warning"
                                                                                    role="progressbar" style="width: 30%"
                                                                                    aria-valuenow="30" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <h5 class="font-weight-bold mb-0">583</h5>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-muted">Mississippi</td>
                                                                        <td class="w-100 px-0">
                                                                            <div class="progress progress-md mx-4">
                                                                                <div class="progress-bar bg-danger"
                                                                                    role="progressbar" style="width: 95%"
                                                                                    aria-valuenow="95" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <h5 class="font-weight-bold mb-0">924</h5>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-muted">California</td>
                                                                        <td class="w-100 px-0">
                                                                            <div class="progress progress-md mx-4">
                                                                                <div class="progress-bar bg-info"
                                                                                    role="progressbar" style="width: 60%"
                                                                                    aria-valuenow="60" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <h5 class="font-weight-bold mb-0">664</h5>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-muted">Maryland</td>
                                                                        <td class="w-100 px-0">
                                                                            <div class="progress progress-md mx-4">
                                                                                <div class="progress-bar bg-primary"
                                                                                    role="progressbar" style="width: 40%"
                                                                                    aria-valuenow="40" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <h5 class="font-weight-bold mb-0">560</h5>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-muted">Alaska</td>
                                                                        <td class="w-100 px-0">
                                                                            <div class="progress progress-md mx-4">
                                                                                <div class="progress-bar bg-danger"
                                                                                    role="progressbar" style="width: 75%"
                                                                                    aria-valuenow="75" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <h5 class="font-weight-bold mb-0">793</h5>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mt-3">
                                                            <div class="daoughnutchart-wrapper">
                                                                <canvas id="north-america-chart"></canvas>
                                                            </div>
                                                            <div id="north-america-chart-legend">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                                                    <div class="ml-xl-4 mt-3">
                                                        <p class="card-title">Detailed Reports</p>
                                                        <h1 class="text-primary">$34040</h1>
                                                        <h3 class="font-weight-500 mb-xl-4 text-primary">North America</h3>
                                                        <p class="mb-2 mb-xl-0">The total number of sessions within the date
                                                            range. It is the
                                                            period time a user is actively engaged with your website, page or
                                                            app, etc</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-xl-9">
                                                    <div class="row">
                                                        <div class="col-md-6 border-right">
                                                            <div class="table-responsive mb-3 mb-md-0 mt-3">
                                                                <table class="table table-borderless report-table">
                                                                    <tr>
                                                                        <td class="text-muted">Illinois</td>
                                                                        <td class="w-100 px-0">
                                                                            <div class="progress progress-md mx-4">
                                                                                <div class="progress-bar bg-primary"
                                                                                    role="progressbar" style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <h5 class="font-weight-bold mb-0">713</h5>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-muted">Washington</td>
                                                                        <td class="w-100 px-0">
                                                                            <div class="progress progress-md mx-4">
                                                                                <div class="progress-bar bg-warning"
                                                                                    role="progressbar" style="width: 30%"
                                                                                    aria-valuenow="30" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <h5 class="font-weight-bold mb-0">583</h5>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-muted">Mississippi</td>
                                                                        <td class="w-100 px-0">
                                                                            <div class="progress progress-md mx-4">
                                                                                <div class="progress-bar bg-danger"
                                                                                    role="progressbar" style="width: 95%"
                                                                                    aria-valuenow="95" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <h5 class="font-weight-bold mb-0">924</h5>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-muted">California</td>
                                                                        <td class="w-100 px-0">
                                                                            <div class="progress progress-md mx-4">
                                                                                <div class="progress-bar bg-info"
                                                                                    role="progressbar" style="width: 60%"
                                                                                    aria-valuenow="60" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <h5 class="font-weight-bold mb-0">664</h5>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-muted">Maryland</td>
                                                                        <td class="w-100 px-0">
                                                                            <div class="progress progress-md mx-4">
                                                                                <div class="progress-bar bg-primary"
                                                                                    role="progressbar" style="width: 40%"
                                                                                    aria-valuenow="40" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <h5 class="font-weight-bold mb-0">560</h5>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-muted">Alaska</td>
                                                                        <td class="w-100 px-0">
                                                                            <div class="progress progress-md mx-4">
                                                                                <div class="progress-bar bg-danger"
                                                                                    role="progressbar" style="width: 75%"
                                                                                    aria-valuenow="75" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <h5 class="font-weight-bold mb-0">793</h5>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mt-3">
                                                            <div class="daoughnutchart-wrapper">
                                                                <canvas id="south-america-chart"></canvas>
                                                            </div>
                                                            <div id="south-america-chart-legend"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#detailedReports" role="button"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    </a>
                                    <a class="carousel-control-next" href="#detailedReports" role="button"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            <!-- <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title mb-0">Top Products</p>
                                <div class="table-responsive">
                                    <table class="table table-striped table-borderless">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Search Engine Marketing</td>
                                                <td class="font-weight-bold">$362</td>
                                                <td>21 Sep 2018</td>
                                                <td class="font-weight-medium">
                                                    <div class="badge badge-success">Completed</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Search Engine Optimization</td>
                                                <td class="font-weight-bold">$116</td>
                                                <td>13 Jun 2018</td>
                                                <td class="font-weight-medium">
                                                    <div class="badge badge-success">Completed</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Display Advertising</td>
                                                <td class="font-weight-bold">$551</td>
                                                <td>28 Sep 2018</td>
                                                <td class="font-weight-medium">
                                                    <div class="badge badge-warning">Pending</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Pay Per Click Advertising</td>
                                                <td class="font-weight-bold">$523</td>
                                                <td>30 Jun 2018</td>
                                                <td class="font-weight-medium">
                                                    <div class="badge badge-warning">Pending</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>E-Mail Marketing</td>
                                                <td class="font-weight-bold">$781</td>
                                                <td>01 Nov 2018</td>
                                                <td class="font-weight-medium">
                                                    <div class="badge badge-danger">Cancelled</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Referral Marketing</td>
                                                <td class="font-weight-bold">$283</td>
                                                <td>20 Mar 2018</td>
                                                <td class="font-weight-medium">
                                                    <div class="badge badge-warning">Pending</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Social media marketing</td>
                                                <td class="font-weight-bold">$897</td>
                                                <td>26 Oct 2018</td>
                                                <td class="font-weight-medium">
                                                    <div class="badge badge-success">Completed</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->


        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2025 Apricorn
                    Solutions <a href="https://apricornsolutions.com/" target="_blank"> apricornsolutions.com </a>
                    All rights reserved.</span>
                <!-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
                            class="ti-heart text-danger ms-1"></i></span> -->
            </div>
        </footer>
        <!-- partial -->
    </div>

@endsection
