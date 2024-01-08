
<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../../assets/"
  data-template="vertical-menu-template"
>
  <head>
    <script src="{{ asset("assets/vendor/libs/jquery/jquery.js") }}"></script>
    <script>
      var attendance_pria = @json($attendance_pria);
      var attendance_wanita = @json($attendance_wanita);
      var absence_pria =@json($absence_pria);
      var absence_wanita =@json($absence_wanita);
      var directorat_it_attend =@json($directorat_it_attend);
      var directorat_finance_attend =@json($directorat_finance_attend);
      var directorat_marketing_attend =@json($directorat_marketing_attend);
      var division_sa_attend =@json($division_sa_attend);
      var division_dpi_attend =@json($division_dpi_attend);
      var division_operation_attend =@json($division_operation_attend);
      var education_diploma =0;
      var education_S1 =0;
      var education_S2 =0;
      var education_S3 =0;
      var directorat_it_comp =0;
      var directorat_finance_comp =0;
      var directorat_marketing_comp =0;
      var division_dpi_comp =0;
      var division_sa_comp =0;
      var division_operation_comp =0;
      var kurang20 =0;
      var dari21_25 =0;
      var dari26_30 =0;
      var dari31_35 =0;
      var dari36_40 =0;
      var dari41_45 =0;
      var dari46_50 =0;
      var lebih50 =0;
      var attendanceCheckIn =@json($attendanceCheckIn);
      var attendanceLateIn =@json($attendanceLateIn);
      var attendanceAbsent =@json($attendanceAbsent);
      var attendanceNocheckIn =@json($attendanceNocheckIn);
      var attendanceTimeOff =@json($attendanceTimeOff);
      var attendanceDate =@json($attendanceDate);
      
      $(document).ready(function(){
        $('#html5-month-input').change(function(){
          var selectedDate = $(this).val();
          window.location.href = '/attendance/' + selectedDate;
        });
      });

      function updateChart(data){
        const doughnutChartKehadiran2 = document.getElementById('doughnutChartKehadiran2');
  if (doughnutChartKehadiran2) {
    const doughnutChartVar = new Chart(doughnutChartKehadiran2, {
      type: 'doughnut',
      data: {
        labels: ['Pria','Wanita'],
        datasets: [
          {
            data: [attendance_pria, attendance_wanita],
            backgroundColor: [cyanColor, orangeLightColor, config.colors.primary],
            borderWidth: 0,
            pointStyle: 'rectRounded'
          }
        ]
      },
      options: {
        responsive: true,
        maintainAspectRatio : true,
        aspectRatio : 1.2,
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
              label: function (context) {
                const label = context.labels || '',
                  value = context.parsed;
                const output = ' ' + label + ' : ' + value + '';
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
      }

      const analyticsBarChartElDirectorat= document.querySelector('#analyticsBarChartDirectorat'),
    analyticsBarChartConfigDirectorat = {
      chart: {
        height: 310,
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
      series: [
        {
          name: '2023',
          data: [directorat_it_attend, directorat_finance_attend, directorat_marketing_attend]
        }
      ],
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
          formatter: function (val) {
            return '' + val + ' ';
          }
        }
      }
    };
  if (typeof analyticsBarChartElDirectorat !== undefined && analyticsBarChartElDirectorat !== null) {
    const analyticsBarChartDirectorat= new ApexCharts(analyticsBarChartElDirectorat, analyticsBarChartConfigDirectorat);
    analyticsBarChartDirectorat.render();
  }

  const doughnutChartAttendanceGender = document.getElementById('doughnutChartAttendanceGender');
  if (doughnutChartAttendanceGender) {
    const doughnutChartVar = new Chart(doughnutChartAttendanceGender, {
      type: 'doughnut',
      data: {
        labels: ['Pria','Wanita'],
        datasets: [
          {
            data: [absence_pria,absence_wanita],
            backgroundColor: [cyanColor, orangeLightColor, config.colors.primary],
            borderWidth: 0,
            pointStyle: 'rectRounded'
          }
        ]
      },
      options: {
        responsive: true,
        maintainAspectRatio : true,
        aspectRatio : 1.2,
        animation: {
          duration: 500
        },
        cutout: '68%',
        plugins: {
          legend: {
            display: false,
          },
          tooltip: {
            callbacks: {
              label: function (context) {
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

  const analyticsBarChartElDivision= document.querySelector('#analyticsBarChartDivision'),
    analyticsBarChartConfigDivision= {
      chart: {
        height: 310,
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
      series: [
        {
          name: '2020',
          data: [division_sa_attend, division_dpi_attend, division_operation_attend]
        }
      ],
      grid: {
        borderColor: borderColor,
        padding: {
          bottom: -8
        }
      },
      xaxis: {
        categories: ['Division SA', 'Division DPI', 'Division Operation'],
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
          formatter: function (val) {
            return '$ ' + val + ' thousands';
          }
        }
      }
    };
  if (typeof analyticsBarChartElDivision !== undefined && analyticsBarChartElDivision !== null) {
    const analyticsBarChartDivision= new ApexCharts(analyticsBarChartElDivision, analyticsBarChartConfigDivision);
    analyticsBarChartDivision.render();
  }

  </script>
  
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title>Dashboard</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

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

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset("assets/vendor/js/helpers.js") }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>
  </head>

  <body>
    {{-- <div id="doughnutChartKehadiran2"></div>
    <div id="analyticsBarChartDirectorat"></div>
    <div id="doughnutChartAttendanceGender"></div>
    <div id="analyticsBarChartDivision"></div> --}}

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg
                  width="26px"
                  height="26px"
                  viewBox="0 0 26 26"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <title>icon</title>
                  <defs>
                    <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
                      <stop stop-color="#5A8DEE" offset="0%"></stop>
                      <stop stop-color="#699AF9" offset="100%"></stop>
                    </linearGradient>
                    <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="linearGradient-2">
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
                              id="Combined-Shape"
                              fill="#4880EA"
                            ></path>
                            <path
                              d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z"
                              id="Combined-Shape2"
                              fill="url(#linearGradient-1)"
                            ></path>
                            <rect
                              id="Rectangle"
                              fill="url(#linearGradient-2)"
                              x="0"
                              y="0"
                              width="7.68181818"
                              height="7.68181818"
                            ></rect>
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
            <li class="menu-item ">
              <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Company">Company</div>
              </a>
            </li>

            <!-- Attendance -->
            <li class="menu-item active open">
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
                <div class="mb-0 row">
                    <div class="col-md-8">
                      <h4 class="py-3 breadcrumb-wrapper mb-4">
                        <span class="text-muted fw-light">Dashboard/</span> Attendance
                      </h4>
                    </div>
                    <div class="col-md-4">
                      <div class="mb-3">
                        <input class="form-control" type="date" value="{{ $datenewdata }}" id="html5-month-input"/>
                      </div>
                    </div>
                  </div>

                <!-- Cards Draggable -->
                <div class="row mb-4" id="sortable-cards">
                <div class="col-lg-2 col-md-6 col-sm-12">
                  <div class="card drag-item cursor-move mb-lg-0 mb-4">
                    <div class="card-body text-center">
                      <h6>Headcount</h6>
                      <h4>{{ $total_employees }}</h4>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 ">
                  <div class="card drag-item cursor-move mb-lg-0 mb-4">
                    <div class="card-body text-center">
                      <h6>On Time</h6>
                      <h4>{{ $on_time }}</h4>
                    </div>
                    {{-- on_time variable nya, --}}
                  </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12">
                  <div class="card drag-item cursor-move mb-lg-0 mb-4">
                    <div class="card-body text-center">
                      <h6>Late In</h6>
                      <h4>{{ $lateInAttendances }}</h4>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12">
                  <div class="card drag-item cursor-move mb-lg-0 mb-4">
                    <div class="card-body text-center">
                      <h6>No Check In</h6>
                      <h4>{{ $nocheckin }}</h4>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12">
                  <div class="card drag-item cursor-move mb-lg-0 mb-4">
                    <div class="card-body text-center">
                      <h6>Absen</h6>
                      <h4>{{ $absenceCount }}</h4>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12">
                  <div class="card drag-item cursor-move mb-lg-0 mb-4">
                    <div class="card-body text-center">
                      <h6>Time Off</h6>
                      <h4>{{  $timeoff }}</h4>
                    </div>
                  </div>
                </div>
                </div>
                <!-- /Cards Draggable ends -->

                <!-- Bar Chart -->
                <div class="row mb-4" id="sortable-cards">
                <div class="col-12">
                    <div class="card">
                      <div class="card-header d-flex justify-content-between align-items-md-center align-items-start">
                        <h5 class="card-title mb-0">Attendance Record</h5>
                        <div class="dropdown">
                          <button
                            type="button"
                            class="btn dropdown-toggle p-0"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                          >
                            <i class="bx bx-calendar"></i>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                              <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Today</a>
                            </li>
                            <li>
                              <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Yesterday</a>
                            </li>
                            <li>
                              <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                >Last 7 Days</a
                              >
                            </li>
                            <li>
                              <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                >Last 30 Days</a
                              >
                            </li>
                            <li>
                              <hr class="dropdown-divider" />
                            </li>
                            <li>
                              <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                >Current Month</a
                              >
                            </li>
                            <li>
                              <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last Month</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="card-body">
                        <div id="barChartKehadiran2"></div>
                      </div>
                    </div>
                  </div>
                <!-- /Bar Chart -->

                <!-- Doughnut Chart -->
                <div class="col-lg-4 col-12 mt-4">
                    <div class="card">
                      <h5 class="card-header">Attendance by Gender</h5>
                      <div class="card-body">
                        <canvas id="doughnutChartKehadiran2" class="chartjs mb-4" data-height="350"></canvas>
                        <ul class="doughnut-legend d-flex justify-content-around ps-0 mb-2 pt-1">
                          <li class="ct-series-0 d-flex flex-column">
                            <h5 class="mb-0 fw-bold">Pria</h5>
                            <span
                              class="badge badge-dot my-2 cursor-pointer rounded-pill"
                              style="background-color: #28dac6; width: 35px; height: 6px"
                            ></span>
                            <div class="text-muted">{{ $percent_pria }}%</div>
                          </li>
                          <li class="ct-series-1 d-flex flex-column">
                            <h5 class="mb-0 fw-bold">Wanita</h5>
                            <span
                            class="badge badge-dot my-2 cursor-pointer rounded-pill"
                            style="background-color: #FDAC34; width: 35px; height: 6px"
                          ></span>
                            <div class="text-muted">{{ $percent_wanita }}%</div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                <!-- /Doughnut Chart -->

                <!-- Website Analytics-->
                <div class="col-lg-8 mt-4 col-md-12">
                  <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="card-title mb-0">Attendance by Directorate</h5>
                      <div class="dropdown">
                    </div>
                    </div>
                    <div class="card-body pb-2">
                      <div id="analyticsBarChartDirectorat"></div>
                    </div>
                  </div>
                </div>

                <!-- Doughnut Chart -->
                <div class="col-lg-4 col-12 mt-4">
                  <div class="card">
                    <h5 class="card-header">Absence by Gender</h5>
                    <div class="card-body">
                      <canvas id="doughnutChartAttendanceGender" class="chartjs mb-4" data-height="350"></canvas>
                      <ul class="doughnut-legend d-flex justify-content-around ps-0 mb-2 pt-1">
                        <li class="ct-series-0 d-flex flex-column">
                          <h5 class="mb-0 fw-bold">Pria</h5>
                          <span
                          class="badge badge-dot my-2 cursor-pointer rounded-pill"
                          style="background-color: #28dac6; width: 35px; height: 6px"
                        ></span>
                          <div class="text-muted">{{ $percent_absencepria }}%</div>
                        </li>
                        <li class="ct-series-1 d-flex flex-column">
                          <h5 class="mb-0 fw-bold">Wanita</h5>
                          <span
                          class="badge badge-dot my-2 cursor-pointer rounded-pill"
                          style="background-color: #FDAC34; width: 35px; height: 6px"
                        ></span>
                          <div class="text-muted">{{  $percent_absencewanita }}%</div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- /Doughnut Chart -->

                <!-- Website Analytics-->
                <div class="col-lg-8 mt-4 col-md-12">
                  <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="card-title mb-0">Attendance by Division</h5>
                      <div class="dropdown">
                    </div>
                    </div>
                    <div class="card-body pb-2">
                      <div id="analyticsBarChartDivision"></div>
                    </div>
                  </div>
                </div>

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
    <!-- build:js assets/vendor/js/core.js -->
    
    <script src="{{ asset("assets/vendor/libs/popper/popper.js") }}"></script>
    <script src="{{ asset("assets/vendor/js/bootstrap.js") }}"></script>
    <script src="{{ asset("assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js") }}"></script>

    <script src="{{ asset("assets/vendor/libs/hammer/hammer.js") }}"></script>

    <script src="{{ asset("assets/vendor/libs/i18n/i18n.js") }}"></script>
    <script src="{{ asset("assets/vendor/libs/typeahead-js/typeahead.js") }}"></script>

    <script src="{{ asset("assets/vendor/js/menu.js") }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset("assets/vendor/libs/cleavejs/cleave.js") }}"></script>
    <script src="{{ asset("assets/vendor/libs/cleavejs/cleave-phone.js") }}"></script>
    <script src="{{ asset("assets/vendor/libs/moment/moment.js") }}"></script>
    <script src="{{ asset("assets/vendor/libs/flatpickr/flatpickr.js") }}"></script>
    <script src="{{ asset("assets/vendor/libs/select2/select2.js") }}"></script>
    <script src="{{ asset("assets/vendor/libs/chartjs/chartjs.js") }}"></script>
    <script src="{{ asset("assets/vendor/libs/apex-charts/apexcharts.js") }}"></script>

    <!-- Main JS -->
    <script src="{{ asset("assets/js/main.js") }}"></script>

    <!-- Page JS -->
    <script src="{{ asset("assets/js/form-layouts.js") }}"></script>
    <script src="{{ asset("assets/js/charts-chartjs.js") }}"></script>
    <script src="{{ asset("assets/js/charts-apex.js") }}"></script>  
    <script src="{{ asset("assets/js/dashboards-analytics.js") }}"></script>
    
  </body>
</html>
