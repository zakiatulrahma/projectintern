@extends('layouts.main')
@section('title','Attendance')
@section('content')
    {{-- <script>
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
  </script> --}}
            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="mb-0 row">
                    <div class="col-md-8">
                      <h4 class="py-3 breadcrumb-wrapper mb-4">
                        <span class="text-muted fw-light">Dashboard/</span> Attendance
                      </h4>
                    </div>
                    <div class="col-md-4">
                      <div class="mb-3">
                        <input class="form-control" type="date" value="2021-06-18" id="html5-month-input"/>
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
                      <h4>12</h4>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12">
                  <div class="card drag-item cursor-move mb-lg-0 mb-4">
                    <div class="card-body text-center">
                      <h6>No Check In</h6>
                      <h4>8</h4>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12">
                  <div class="card drag-item cursor-move mb-lg-0 mb-4">
                    <div class="card-body text-center">
                      <h6>Absent</h6>
                      <h4>3</h4>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12">
                  <div class="card drag-item cursor-move mb-lg-0 mb-4">
                    <div class="card-body text-center">
                      <h6>Time Off</h6>
                      <h4>1</h4>
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
                      <canvas id="doughnutChartKehadiran2A" class="chartjs mb-4" data-height="350"></canvas>
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
@endsection
