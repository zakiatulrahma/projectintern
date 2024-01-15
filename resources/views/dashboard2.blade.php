<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../../assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/flatpickr/flatpickr.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/select2/select2.css" />

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>

    <script src="{{ asset('assets/js/config.js') }}"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="index.html" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <svg width="26px" height="26px" viewBox="0 0 26 26" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>icon</title>
                                <defs>
                                    <linearGradient x1="50%" y1="0%" x2="50%" y2="100%"
                                        id="linearGradient-1">
                                        <stop stop-color="#5A8DEE" offset="0%"></stop>
                                        <stop stop-color="#699AF9" offset="100%"></stop>
                                    </linearGradient>
                                    <linearGradient x1="0%" y1="0%" x2="100%" y2="100%"
                                        id="linearGradient-2">
                                        <stop stop-color="#FDAC41" offset="0%"></stop>
                                        <stop stop-color="#E38100" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <g id="Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Login---V2" transform="translate(-667.000000, -290.000000)">
                                        <g id="Login" transform="translate(519.000000, 244.000000)">
                                            <g id="Logo" transform="translate(148.000000, 42.000000)">
                                                <g id="icon" transform="translate(0.000000, 4.000000)">
                                                    <path
                                                        d="M13.8863636,4.72727273 C18.9447899,4.72727273 23.0454545,8.82793741 23.0454545,13.8863636 C23.0454545,18.9447899 18.9447899,23.0454545 13.8863636,23.0454545 C8.82793741,23.0454545 4.72727273,18.9447899 4.72727273,13.8863636 C4.72727273,13.5423509 4.74623858,13.2027679 4.78318172,12.8686032 L8.54810407,12.8689442 C8.48567157,13.19852 8.45300462,13.5386269 8.45300462,13.8863636 C8.45300462,16.887125 10.8856023,19.3197227 13.8863636,19.3197227 C16.887125,19.3197227 19.3197227,16.887125 19.3197227,13.8863636 C19.3197227,10.8856023 16.887125,8.45300462 13.8863636,8.45300462 C13.5386269,8.45300462 13.19852,8.48567157 12.8689442,8.54810407 L12.8686032,4.78318172 C13.2027679,4.74623858 13.5423509,4.72727273 13.8863636,4.72727273 Z"
                                                        id="Combined-Shape" fill="#4880EA"></path>
                                                    <path
                                                        d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z"
                                                        id="Combined-Shape2" fill="url(#linearGradient-1)"></path>
                                                    <rect id="Rectangle" fill="url(#linearGradient-2)" x="0" y="0"
                                                        width="7.68181818" height="7.68181818"></rect>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <span class="app-brand-text demo menu-text fw-bold ms-2">Dashboard</span>
                    </a>
                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                        <i class="bx menu-toggle-icon d-none d-xl-block fs-4 align-middle"></i>
                        <i class="bx bx-x d-block d-xl-none bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-divider mt-0"></div>
                <div class="menu-inner-shadow"></div>
                <ul class="menu-inner py-1">

                    <!-- Dashboards -->
                    <li class="menu-item active open">
                        <a href="{{ route('dashboard') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Company">Company</div>
                        </a>
                    </li>

                    <!-- Layouts -->
                    <li class="menu-item ">
                        <a href="{{ route('attendance') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Attendance">Attendance</div>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="mb-3 row">
                            <div class="col-md-8">
                                <h4 class="py-3 breadcrumb-wrapper mb-4">
                                    <span class="text-muted fw-light">Dashboard/</span> Company
                                </h4>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <input class="form-control" type="month" value="{{ $datenewdata2 }}"
                                        id="html5-month-input" />
                                </div>
                            </div>
                        </div>

                        <!-- Cards Draggable -->
                        <div class="row mb-4" id="sortable-cards">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card drag-item cursor-move mb-lg-0 mb-4">
                                    <div class="card-body text-center">
                                        <h5>Headcount</h5>
                                        <h4>{{ $total_employees }}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 ">
                                <div class="card drag-item cursor-move mb-lg-0 mb-4">
                                    <div class="card-body text-center">
                                        <h5>Avg Tenure</h5>
                                        <h4>{{ $masa_kerja }}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card drag-item cursor-move mb-lg-0 mb-4">
                                    <div class="card-body text-center">
                                        <h5>Absences</h5>
                                        <h4>{{ $absencessTotal }}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card drag-item cursor-move mb-lg-0 mb-4">
                                    <div class="card-body text-center">
                                        <h5>Leave Taken</h5>
                                        <h4>{{ $cuti_diambil }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Cards Draggable ends -->

                        <!-- Website Analytics-->
                        <div class="row mb-4 " id="sortable-cards">
                            <div class="col-lg-6 mb-4">
                                <div class="card">
                                    <div
                                        class="card-header d-flex justify-content-between align-items-md-center align-items-start">
                                        <h5 class="card-title mb-0">Headcount by Directorate</h5>
                                        <div class="dropdown">
                                        </div>
                                    </div>
                                    <div class="card-body pb-2">
                                        <div id="analyticsBarChartDirectoratCompany"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Website Analytics-->
                            <div class="col-lg-6 mb-4 col-md-12">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="card-title mb-0">Headcount by Division</h5>
                                        <div class="dropdown">
                                        </div>
                                    </div>
                                    <div class="card-body pb-2">
                                        <div id="analyticsBarChartDivisionCompany"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Doughnut Chart -->
                            <div class="col-lg-4 col-12 mb-4 inline-block">
                                <div class="card">
                                    <h5 class="card-header">Headcount by Gender</h5>
                                    <div class="card-body">
                                        <canvas id="doughnutChartGenderCompany" class="chartjs mb-4"
                                            data-height="350"></canvas>
                                        <ul class="doughnut-legend d-flex justify-content-around ps-0 mb-2 pt-1">
                                            <li class="ct-series-0 d-flex flex-column">
                                                <h6 class="mb-0 fw-bold">Male</h6>
                                                <span class="badge badge-dot my-2 cursor-pointer rounded-pill"
                                                    style="background-color: #28dac6; width: 35px; height: 6px"></span>
                                                <div class="text-muted">{{ $percent_pria }}%</div>
                                            </li>
                                            <li class="ct-series-1 d-flex flex-column">
                                                <h6 class="mb-0 fw-bold">Female</h6>
                                                <span class="badge badge-dot my-2 cursor-pointer rounded-pill"
                                                    style="background-color: #FDAC34; width: 35px; height: 6px"></span>
                                                <div class="text-muted">{{ $percent_wanita }}%</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /Doughnut Chart -->

                            <!-- Doughnut Chart -->
                            <div class="col-lg-4 col-12 mb-4 inline-block">
                                <div class="card">
                                    <h5 class="card-header">Leave Taken by Category</h5>
                                    <div class="card-body">
                                        <canvas id="doughnutChartLeaveCompany" class="chartjs mb-4"
                                            data-height="350"></canvas>
                                        <ul class="doughnut-legend d-flex justify-content-around ps-0 mb-2 pt-1">
                                            <li class="ct-series-0 d-flex flex-column">
                                                <h6 class="mb-0 fw-bold">Leave</h6>
                                                <span class="badge badge-dot my-2 cursor-pointer rounded-pill"
                                                    style="background-color: #28dac6; width: 35px; height: 6px"></span>
                                                <div class="text-muted">{{ $percent_cuti }}%</div>
                                            </li>
                                            <li class="ct-series-1 d-flex flex-column">
                                                <h6 class="mb-0 fw-bold">Permission</h6>
                                                <span class="badge badge-dot my-2 cursor-pointer rounded-pill"
                                                    style="background-color: #FDAC34; width: 35px; height: 6px"></span>
                                                <div class="text-muted">{{ $percent_izin }}%</div>
                                            </li>
                                            <li class="ct-series-2 d-flex flex-column">
                                                <h6 class="mb-0 fw-bold">Other</h6>
                                                <span class="badge badge-dot my-2 cursor-pointer rounded-pill"
                                                    style="background-color: #299AFF; width: 35px; height: 6px"></span>
                                                <div class="text-muted">{{ $percent_timeoff }}%</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /Doughnut Chart -->

                            <!-- Doughnut Chart -->
                            <div class="col-lg-4 col-12 mb-4 inline-block">
                                <div class="card">
                                    <h5 class="card-header">Headcount by Contract</h5>
                                    <div class="card-body">
                                        <canvas id="doughnutChartContractCompany" class="chartjs mb-4"
                                            data-height="350"></canvas>
                                        <ul class="doughnut-legend d-flex justify-content-around ps-0 mb-2 pt-1">
                                            <li class="ct-series-0 d-flex flex-column">
                                                <h6 class="mb-0 fw-bold">Permanent</h6>
                                                <span class="badge badge-dot my-2 cursor-pointer rounded-pill"
                                                    style="background-color: #28dac6; width: 35px; height: 6px"></span>
                                                <div class="text-muted">{{ $percent_tetap }}%</div>
                                            </li>
                                            <li class="ct-series-1 d-flex flex-column">
                                                <h6 class="mb-0 fw-bold">PKWT</h6>
                                                <span class="badge badge-dot my-2 cursor-pointer rounded-pill"
                                                    style="background-color: #FDAC34; width: 35px; height: 6px"></span>
                                                <div class="text-muted">{{ $percent_pkwt }}%</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /Doughnut Chart -->

                            <!-- Website Analytics-->
                            <div class="col-lg-6 mb-4 col-md-12">
                                <div class="card h-100">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="card-title mb-0">Headcount by Age Range</h5>
                                        <div class="dropdown">
                                        </div>
                                    </div>
                                    <div class="card-body pb-2">
                                        <div id="analyticsBarChartAgeRangeCompany"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Doughnut Chart -->
                            <div class="col-lg-6 col-12 mb-4 inline-block">
                                <div class="card h-100">
                                    <h5 class="card-header">Headcount by Location</h5>
                                    <div class="card-body">
                                        <canvas id="doughnutChartLocationCompany" class="chartjs mb-4"
                                            data-height="350"></canvas>
                                        <ul class="doughnut-legend d-flex justify-content-around ps-0 mb-2 pt-1">
                                            <li class="ct-series-0 d-flex flex-column">
                                                <h6 class="mb-0 fw-bold">Jakarta</h6>
                                                <span class="badge badge-dot my-2 cursor-pointer rounded-pill"
                                                    style="background-color: #28dac6; width: 35px; height: 6px"></span>
                                                <div class="text-muted">{{ $percent_jakarta }}%</div>
                                            </li>
                                            <li class="ct-series-1 d-flex flex-column">
                                                <h6 class="mb-0 fw-bold">Bandung</h6>
                                                <span class="badge badge-dot my-2 cursor-pointer rounded-pill"
                                                    style="background-color: #FDAC34; width: 35px; height: 6px"></span>
                                                <div class="text-muted">{{ $percent_bandung }}%</div>
                                            </li>
                                            <li class="ct-series-1 d-flex flex-column">
                                                <h6 class="mb-0 fw-bold">Padang</h6>
                                                <span class="badge badge-dot my-2 cursor-pointer rounded-pill"
                                                    style="background-color: #299AFF; width: 35px; height: 6px"></span>
                                                <div class="text-muted">{{ $percent_padang }}%</div>
                                            </li>
                                            <li class="ct-series-1 d-flex flex-column">
                                                <h6 class="mb-0 fw-bold">Other</h6>
                                                <span class="badge badge-dot my-2 cursor-pointer rounded-pill"
                                                    style="background-color: #ffe800; width: 35px; height: 6px"></span>
                                                <div class="text-muted">{{ $percent_lainnya }}%</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /Doughnut Chart -->

                            <!-- Donut Chart -->
                            <div class="col-lg-4 col-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <div>
                                            <h5 class="card-title mb-0">Headcount by Education</h5>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="donutChartEducationCompany"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Donut Chart -->

                            <!-- Website Analytics-->
                            <div class="col-lg-8 mb-4 col-md-12">
                                <div class="card h-100">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="card-title mb-0">Top 5 Employee by Attendance</h5>
                                        <div class="dropd6own">
                                        </div>
                                    </div>
                                    <div class="card-body pb-2">
                                        <div id="analyticsBarChartUsia1B"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Website Analytics-->
                            {{-- <div class="col-lg-12 mb-4 col-md-12">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="card-title mb-0">-</h5>
                                        <div class="dropdown">
                                        </div>
                                    </div>
                                    <div class="card-body pb-2">
                                        <div id="analyticsBarChartUsia1C"></div>
                                    </div>
                                </div>
                            </div> --}}

                        </div>
                        <!-- / Content -->
                        <div class="content-backdrop fade"></div>
                    </div>
                    <!-- Content wrapper -->
                </div>
                <!-- / Layout page -->
            </div>

            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>

            <!-- Drag Target Area To SlideIn Menu On Small Screens -->
            <div class="drag-target"></div>
        </div>
        <!-- / Layout wrapper -->

        <!-- Core JS -->
        <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
        <script>
            var employee_pria = @json($employee_pria);
            var employee_wanita = @json($employee_wanita);
            var timeoff_cuti = @json($timeoff_cuti);
            var timeoff_izin = @json($timeoff_izin);
            var timeoff_lainnya = @json($timeoff_lainnya);
            var education_diploma = @json($education_diploma);
            var education_S1 = @json($education_S1);
            var education_S2 = @json($education_S2);
            var education_S3 = @json($education_S3);
            var jobstatus_tetap = @json($jobstatus_tetap);
            var jobstatus_pkwt = @json($jobstatus_pkwt);
            var placeofbirth_jakarta = @json($placeofbirth_jakarta);
            var placeofbirth_bandung = @json($placeofbirth_bandung);
            var placeofbirth_padang = @json($placeofbirth_padang);
            var placeofbirth_lainnya = @json($placeofbirth_lainnya);
            var directorat_it_comp = @json($directorat_it_comp);
            var directorat_finance_comp = @json($directorat_finance_comp);
            var directorat_marketing_comp = @json($directorat_marketing_comp);
            var division_dpi_comp = @json($division_dpi_comp);
            var division_sa_comp = @json($division_sa_comp);
            var division_operation_comp = @json($division_operation_comp);
            var kurang20 = @json($kurang20);
            var dari21_25 = @json($dari21_25);
            var dari26_30 = @json($dari26_30);
            var dari31_35 = @json($dari31_35);
            var dari36_40 = @json($dari36_40);
            var dari41_45 = @json($dari41_45);
            var dari46_50 = @json($dari46_50);
            var lebih50 = @json($lebih50);
            var attendanceCheckIn = 0;
            var attendanceLateIn = 0;
            var attendanceAbsent = 0;
            var attendanceNocheckIn = 0;
            var attendanceTimeOff = 0;
            var attendanceDate = 0;
            $(document).ready(function() {
                $('#html5-month-input').change(function() {
                    var selectedDate = $(this).val();
                    window.location.href = '/dashboard/' + selectedDate;
                });
            });

            function updateChart2(data) {
                const analyticsBarChartElDirectoratCompany = document.querySelector('#analyticsBarChartDirectoratCompany'),
                    analyticsBarChartConfigDirectoratCompany = {
                        chart: {
                            height: 250,
                            type: 'bar',
                            toolbar: {
                                show: false
                            }
                        },
                        plotOptions: {
                            bar: {
                                horizontal: false,
                                columnWidth: '20%',
                                borderRadius: 3,
                                startingShape: 'rounded'
                            }
                        },
                        dataLabels: {
                            enabled: false
                        },
                        colors: [config.colors.primary, config.colors_label.primary],
                        series: [{
                            name: 'Total Karyawan',
                            data: [directorat_it_comp, directorat_finance_comp, directorat_marketing_comp]
                        }],
                        grid: {
                            borderColor: borderColor,
                            padding: {
                                bottom: -8
                            }
                        },
                        xaxis: {
                            categories: ['Directorat IT', 'Directorat Finance', 'Directorat Marketing'],
                            axisBorder: {
                                show: false
                            },
                            axisTicks: {
                                show: false
                            },
                            labels: {
                                style: {
                                    colors: axisColor
                                }
                            }
                        },
                        yaxis: {
                            min: 0,
                            max: 10,
                            tickAmount: 3,
                            labels: {
                                style: {
                                    colors: axisColor
                                }
                            }
                        },
                        legend: {
                            show: false
                        },
                        tooltip: {
                            y: {
                                formatter: function(val) {
                                    return ' ' + val + ' ';
                                }
                            }
                        }
                    };
                if (typeof analyticsBarChartElDirectoratCompany !== undefined && analyticsBarChartElDirectoratCompany !==
                    null) {
                    const analyticsBarChartDirectoratCompany = new ApexCharts(analyticsBarChartElDirectoratCompany,
                        analyticsBarChartConfigDirectoratCompany);
                    analyticsBarChartDirectoratCompany.render();
                }

                const analyticsBarChartElDivisionCompany = document.querySelector('#analyticsBarChartDivisionCompany'),
                    analyticsBarChartConfigDivisionCompany = {
                        chart: {
                            height: 250,
                            type: 'bar',
                            toolbar: {
                                show: false
                            }
                        },
                        plotOptions: {
                            bar: {
                                horizontal: false,
                                columnWidth: '20%',
                                borderRadius: 3,
                                startingShape: 'rounded'
                            }
                        },
                        dataLabels: {
                            enabled: false
                        },
                        colors: [config.colors.primary, config.colors_label.primary],
                        series: [{
                            name: 'Total Karyawan',
                            data: [division_dpi_comp, division_sa_comp, division_operation_comp]
                        }],
                        grid: {
                            borderColor: borderColor,
                            padding: {
                                bottom: -8
                            }
                        },
                        xaxis: {
                            categories: ['Divisi DPI', 'Divisi SA', 'Divisi Operation'],
                            axisBorder: {
                                show: false
                            },
                            axisTicks: {
                                show: false
                            },
                            labels: {
                                style: {
                                    colors: axisColor
                                }
                            }
                        },
                        yaxis: {
                            min: 0,
                            max: 10,
                            tickAmount: 3,
                            labels: {
                                style: {
                                    colors: axisColor
                                }
                            }
                        },
                        legend: {
                            show: false
                        },
                        tooltip: {
                            y: {
                                formatter: function(val) {
                                    return ' ' + val + ' ';
                                }
                            }
                        }
                    };
                if (typeof analyticsBarChartElDivisionCompany !== undefined && analyticsBarChartElDivisionCompany !== null) {
                    const analyticsBarChartDivisionCompany = new ApexCharts(analyticsBarChartElDivisionCompany,
                        analyticsBarChartConfigDivisionCompany);
                    analyticsBarChartDivisionCompany.render();
                }

                const doughnutChartGenderCompany = document.getElementById('doughnutChartGenderCompany');
                if (doughnutChartGenderCompany) {
                    const doughnutChartVar = new Chart(doughnutChartGenderCompany, {
                        type: 'doughnut',
                        data: {
                            labels: ['Pria', 'Wanita'],
                            datasets: [{
                                data: [employee_pria, employee_wanita],
                                backgroundColor: [cyanColor, orangeLightColor, config.colors.primary],
                                borderWidth: 0,
                                pointStyle: 'rectRounded'
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: true,
                            aspectRatio: 2,
                            animation: {
                                duration: 500
                            },
                            cutout: '0%',
                            plugins: {
                                legend: {
                                    display: false
                                },
                                tooltip: {
                                    callbacks: {
                                        label: function(context) {
                                            const label = context.labels || '',
                                                value = context.parsed;
                                            const output = ' ' + label + ' : ' + value + ' ';
                                            return output;
                                        }
                                    },
                                    // Updated default tooltip UI
                                    rtl: isRtl,
                                    backgroundColor: config.colors.white,
                                    titleColor: config.colors.black,
                                    bodyColor: config.colors.black,
                                    borderWidth: 1,
                                    borderColor: borderColor
                                }
                            }
                        }
                    });
                }

                const doughnutChartLeaveCompany = document.getElementById('doughnutChartLeaveCompany');
                if (doughnutChartLeaveCompany) {
                    const doughnutChartVar = new Chart(doughnutChartLeaveCompany, {
                        type: 'doughnut',
                        data: {
                            labels: ['Cuti', 'Izin', 'Dan lainnya'],
                            datasets: [{
                                data: [timeoff_cuti, timeoff_izin, timeoff_lainnya],
                                backgroundColor: [cyanColor, orangeLightColor, config.colors.primary],
                                borderWidth: 0,
                                pointStyle: 'rectRounded'
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: true,
                            aspectRatio: 2,
                            animation: {
                                duration: 500
                            },
                            cutout: '68%',
                            plugins: {
                                legend: {
                                    display: false
                                },
                                tooltip: {
                                    callbacks: {
                                        label: function(context) {
                                            const label = context.labels || '',
                                                value = context.parsed;
                                            const output = ' ' + label + ' : ' + value + ' ';
                                            return output;
                                        }
                                    },
                                    // Updated default tooltip UI
                                    rtl: isRtl,
                                    backgroundColor: config.colors.white,
                                    titleColor: config.colors.black,
                                    bodyColor: config.colors.black,
                                    borderWidth: 1,
                                    borderColor: borderColor
                                }
                            }
                        }
                    });
                }

                const doughnutChartContractCompany = document.getElementById('doughnutChartContractCompany');
                if (doughnutChartContractCompany) {
                    const doughnutChartVar = new Chart(doughnutChartContractCompany, {
                        type: 'doughnut',
                        data: {
                            labels: ['Tetap', 'PKWT'],
                            datasets: [{
                                data: [jobstatus_tetap, jobstatus_pkwt],
                                backgroundColor: [cyanColor, orangeLightColor, config.colors.primary],
                                borderWidth: 0,
                                pointStyle: 'rectRounded'
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: true,
                            aspectRatio: 2,
                            animation: {
                                duration: 500
                            },
                            cutout: '68%',
                            plugins: {
                                legend: {
                                    display: false
                                },
                                tooltip: {
                                    callbacks: {
                                        label: function(context) {
                                            const label = context.labels || '',
                                                value = context.parsed;
                                            const output = ' ' + label + ' : ' + value + ' %';
                                            return output;
                                        }
                                    },
                                    // Updated default tooltip UI
                                    rtl: isRtl,
                                    backgroundColor: config.colors.white,
                                    titleColor: config.colors.black,
                                    bodyColor: config.colors.black,
                                    borderWidth: 1,
                                    borderColor: borderColor
                                }
                            }
                        }
                    });
                }

                const analyticsBarChartElAgeRangeCompany = document.querySelector('#analyticsBarChartAgeRangeCompany'),
                    analyticsBarChartConfigAgeRangeCompany = {
                        chart: {
                            height: 303,
                            type: 'bar',
                            toolbar: {
                                show: false
                            }
                        },
                        plotOptions: {
                            bar: {
                                horizontal: false,
                                columnWidth: '20%',
                                borderRadius: 3,
                                startingShape: 'rounded'
                            }
                        },
                        dataLabels: {
                            enabled: false
                        },
                        colors: [config.colors.primary, config.colors_label.primary],
                        series: [{
                            name: '',
                            data: [kurang20, dari21_25, dari26_30, dari31_35, dari36_40, dari41_45, dari46_50, lebih50]
                        }],
                        grid: {
                            borderColor: borderColor,
                            padding: {
                                bottom: -8
                            }
                        },
                        xaxis: {
                            categories: ['<20', '21-25', '25-30', '30-35', '35-40', '41-45', '45-50', '>50'],
                            axisBorder: {
                                show: false
                            },
                            axisTicks: {
                                show: false
                            },
                            labels: {
                                style: {
                                    colors: axisColor
                                }
                            }
                        },
                        yaxis: {
                            min: 0,
                            max: 10,
                            tickAmount: 3,
                            labels: {
                                style: {
                                    colors: axisColor
                                }
                            }
                        },
                        legend: {
                            show: false
                        },
                        tooltip: {
                            y: {
                                formatter: function(val) {
                                    return '' + val + ' ';
                                }
                            }
                        }
                    };
                if (typeof analyticsBarChartElAgeRangeCompany !== undefined && analyticsBarChartElAgeRangeCompany !== null) {
                    const analyticsBarChartAgeRangeCompany = new ApexCharts(analyticsBarChartElAgeRangeCompany,
                        analyticsBarChartConfigAgeRangeCompany);
                    analyticsBarChartAgeRangeCompany.render();
                }

                const doughnutChartLocationCompany = document.getElementById('doughnutChartLocationCompany');
                if (doughnutChartLocationCompany) {
                    const doughnutChartVar = new Chart(doughnutChartLocationCompany, {
                        type: 'doughnut',
                        data: {
                            labels: ['Jakarta', 'Bandung', 'Padang', 'Lainnya'],
                            datasets: [{
                                data: [placeofbirth_jakarta, placeofbirth_bandung, placeofbirth_padang,
                                    placeofbirth_lainnya
                                ],
                                backgroundColor: [cyanColor, orangeLightColor, config.colors.primary],
                                borderWidth: 0,
                                pointStyle: 'rectRounded'
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: true,
                            aspectRatio: 2,
                            animation: {
                                duration: 500
                            },
                            cutout: '0%',
                            plugins: {
                                legend: {
                                    display: false
                                },
                                tooltip: {
                                    callbacks: {
                                        label: function(context) {
                                            const label = context.labels || '',
                                                value = context.parsed;
                                            const output = ' ' + label + ' : ' + value + ' ';
                                            return output;
                                        }
                                    },
                                    // Updated default tooltip UI
                                    rtl: isRtl,
                                    backgroundColor: config.colors.white,
                                    titleColor: config.colors.black,
                                    bodyColor: config.colors.black,
                                    borderWidth: 1,
                                    borderColor: borderColor
                                }
                            }
                        }
                    });
                }

                const donutChartElEducationCompany = document.querySelector('#donutChartEducationCompany'),
                    donutChartConfigEducationCompany = {
                        chart: {
                            height: 350,
                            fontFamily: 'IBM Plex Sans',
                            type: 'donut'
                        },
                        labels: ['Diploma', 'S1', 'S2', 'S3'],
                        series: [education_diploma, education_S1, education_S2, education_S3],
                        colors: [
                            chartColors.donut.series3,
                            chartColors.donut.series1,
                            chartColors.donut.series4,
                            chartColors.donut.series2
                        ],
                        stroke: {
                            show: false,
                            curve: 'straight'
                        },
                        dataLabels: {
                            enabled: true,
                            formatter: function(val, opt) {
                                return parseInt(val) + '%';
                            }
                        },
                        legend: {
                            show: true,
                            position: 'bottom',
                            labels: {
                                colors: axisColor,
                                useSeriesColors: false
                            }
                        },
                        plotOptions: {
                            pie: {
                                donut: {
                                    labels: {
                                        show: false,
                                        name: {
                                            fontSize: '1 rem',
                                            color: axisColor
                                        },
                                        value: {
                                            fontSize: '1.2rem',
                                            color: axisColor,
                                            fontFamily: 'IBM Plex Sans',
                                            formatter: function(val) {
                                                return parseInt(val) + '%';
                                            }
                                        },
                                        total: {
                                            show: false,
                                            fontSize: '1 rem',
                                            color: headingColor,
                                            label: 'Operational',
                                            formatter: function(w) {
                                                return '31%';
                                            }
                                        }
                                    }
                                }
                            }
                        },
                        responsive: [{
                                breakpoint: 992,
                                options: {
                                    chart: {
                                        height: 380
                                    },
                                    legend: {
                                        position: 'bottom',
                                        labels: {
                                            colors: axisColor,
                                            useSeriesColors: false
                                        }
                                    }
                                }
                            },
                            {
                                breakpoint: 576,
                                options: {
                                    chart: {
                                        height: 320
                                    },
                                    plotOptions: {
                                        pie: {
                                            donut: {
                                                labels: {
                                                    show: true,
                                                    name: {
                                                        fontSize: '1.5rem'
                                                    },
                                                    value: {
                                                        fontSize: '1rem'
                                                    },
                                                    total: {
                                                        fontSize: '1.5rem'
                                                    }
                                                }
                                            }
                                        }
                                    },
                                    legend: {
                                        position: 'bottom',
                                        labels: {
                                            colors: axisColor,
                                            useSeriesColors: false
                                        }
                                    }
                                }
                            },
                            {
                                breakpoint: 420,
                                options: {
                                    chart: {
                                        height: 280
                                    },
                                    legend: {
                                        show: false
                                    }
                                }
                            },
                            {
                                breakpoint: 360,
                                options: {
                                    chart: {
                                        height: 250
                                    },
                                    legend: {
                                        show: false
                                    }
                                }
                            }
                        ]
                    };
                if (typeof donutChartElEducationCompany !== undefined && donutChartElEducationCompany !== null) {
                    const donutChart = new ApexCharts(donutChartElEducationCompany, donutChartConfigEducationCompany);
                    donutChart.render();
                }



            }
        </script>
        <!-- build:js assets/vendor/js/core.js -->
        <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
        <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

        <script src="{{ asset('assets/vendor/libs/hammer/hammer.js') }}"></script>

        <script src="{{ asset('assets/vendor/libs/i18n/i18n.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>

        <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
        <!-- endbuild -->

        <!-- Vendors JS -->
        <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/chartjs/chartjs.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

        <!-- Main JS -->
        <script src="{{ asset('assets/js/main.js') }}"></script>

        <!-- Page JS -->
        <script src="{{ asset('assets/js/charts-chartjs.js') }}"></script>
        <script src="{{ asset('assets/js/charts-apex.js') }}"></script>
        <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>





</body>

</html>
