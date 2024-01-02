@extends('layouts.main')
@section('title','Dashboard')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
                <div class="mb-3 row">
                    <div class="col-md-8">
                      <h4 class="py-3 breadcrumb-wrapper mb-4">
                        <span class="text-muted fw-light">Dashboard/</span> Company 
                      </h4>
                    </div>
                    <div class="col-md-4">
                      <div class="mb-3">
                        <input class="form-control" type="month" value="2021-06" id="html5-month-input" />
                      </div>
                    </div>
                  </div>

                <!-- Cards Draggable -->
                <div class="row mb-4" id="sortable-cards">
                <div class="col-lg-3 col-md-6 col-sm-12">
                  <div class="card drag-item cursor-move mb-lg-0 mb-4">
                    <div class="card-body text-center">
                      <h5>Headcount</h5>
                      <h4>{{ $total_employees}}</h4>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 ">
                  <div class="card drag-item cursor-move mb-lg-0 mb-4">
                    <div class="card-body text-center">
                      <h5>Masa Kerja</h5>
                      <h4>{{ $masa_kerja }}</h4>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                  <div class="card drag-item cursor-move mb-lg-0 mb-4">
                    <div class="card-body text-center">
                      <h5>Cuti Diambil</h5>
                      <h4>50 Hari</h4>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                  <div class="card drag-item cursor-move mb-lg-0 mb-4">
                    <div class="card-body text-center">
                      <h5>Ketidakhadiran</h5>
                      <h4>0,90%</h4>
                    </div>
                  </div>
                </div>
                </div>
                <!-- /Cards Draggable ends -->

                <!-- Website Analytics-->
                <div class="row mb-4" id="sortable-cards">
                <div class="col-6 mb-4">
                <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-md-center align-items-start">
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
                        <canvas id="doughnutChartGender1" class="chartjs mb-4" data-height="350"></canvas>
                        <ul class="doughnut-legend d-flex justify-content-around ps-0 mb-2 pt-1">
                          <li class="ct-series-0 d-flex flex-column">
                            <h6 class="mb-0 fw-bold">Pria</h6>
                            <span
                            class="badge badge-dot my-2 cursor-pointer rounded-pill"
                            style="background-color: #28dac6; width: 35px; height: 6px"
                            ></span>
                            <div class="text-muted">{{ $percent_pria }}%</div>
                          </li>
                          <li class="ct-series-1 d-flex flex-column">
                            <h6 class="mb-0 fw-bold">Wanita</h6>
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

                <!-- Doughnut Chart -->
                <div class="col-lg-4 col-12 ">
                  <div class="card">
                    <h5 class="card-header">Leave Taken by Category</h5>
                    <div class="card-body">
                      <canvas id="doughnutChartKetidakhadiran1" class="chartjs mb-4" data-height="350"></canvas>
                      <ul class="doughnut-legend d-flex justify-content-around ps-0 mb-2 pt-1">
                        <li class="ct-series-0 d-flex flex-column">
                          <h6 class="mb-0 fw-bold">Cuti</h6>
                          <span
                            class="badge badge-dot my-2 cursor-pointer rounded-pill"
                            style="background-color: #28dac6; width: 35px; height: 6px"
                          ></span>
                          <div class="text-muted">{{ $percent_cuti }}%</div>
                        </li>
                        <li class="ct-series-1 d-flex flex-column">
                          <h6 class="mb-0 fw-bold">Izin</h6>
                          <span
                            class="badge badge-dot my-2 cursor-pointer rounded-pill"
                            style="background-color: #FDAC34; width: 35px; height: 6px"
                          ></span>
                          <div class="text-muted">{{ $percent_izin }}%</div>
                        </li>
                        <li class="ct-series-2 d-flex flex-column">
                          <h6 class="mb-0 fw-bold">Lainnya</h6>
                          <span
                            class="badge badge-dot my-2 cursor-pointer rounded-pill"
                            style="background-color: #299AFF; width: 35px; height: 6px"
                          ></span>
                          <div class="text-muted">{{ $percent_lainnya }}%</div>
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
                        <canvas id="doughnutChartStatus1" class="chartjs mb-4" data-height="350"></canvas>
                        <ul class="doughnut-legend d-flex justify-content-around ps-0 mb-2 pt-1">
                          <li class="ct-series-0 d-flex flex-column">
                            <h6 class="mb-0 fw-bold">Tetap</h6>
                            <span
                            class="badge badge-dot my-2 cursor-pointer rounded-pill"
                            style="background-color: #28dac6; width: 35px; height: 6px"
                            ></span>
                            <div class="text-muted">{{ $percent_tetap }}%</div>
                          </li>
                          <li class="ct-series-1 d-flex flex-column">
                            <h6 class="mb-0 fw-bold">PKWT</h6>
                            <span
                            class="badge badge-dot my-2 cursor-pointer rounded-pill"
                            style="background-color: #FDAC34; width: 35px; height: 6px"
                            ></span>
                            <div class="text-muted">{{ $percent_pkwt }}%</div>
                          </li>
                        </ul>
                      </div>
                    </div>
                </div>
                <!-- /Doughnut Chart -->

                <!-- Website Analytics-->
                <div class="col-lg-6 mb-4 col-md-12">
                  <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="card-title mb-0">Headcount by Age Range</h5>
                      <div class="dropdown">
                    </div>
                    </div>
                    <div class="card-body pb-2">
                      <div id="analyticsBarChartUsia"></div>
                    </div>
                  </div>
                </div>

                <!-- Doughnut Chart -->
                <div class="col-lg-6 col-12 mb-4 inline-block">
                    <div class="card">
                      <h5 class="card-header">Headcount by Location</h5>
                      <div class="card-body">
                        <canvas id="doughnutChartAsal" class="chartjs mb-4" data-height="350"></canvas>
                        <ul class="doughnut-legend d-flex justify-content-around ps-0 mb-2 pt-1">
                          <li class="ct-series-0 d-flex flex-column">
                            <h6 class="mb-0 fw-bold">Jakarta</h6>
                            <span
                            class="badge badge-dot my-2 cursor-pointer rounded-pill"
                            style="background-color: #28dac6; width: 35px; height: 6px"
                            ></span>
                            <div class="text-muted">{{ $percent_jakarta }}%</div>
                          </li>
                          <li class="ct-series-1 d-flex flex-column">
                            <h6 class="mb-0 fw-bold">Bandung</h6>
                            <span
                            class="badge badge-dot my-2 cursor-pointer rounded-pill"
                            style="background-color: #FDAC34; width: 35px; height: 6px"
                            ></span>
                            <div class="text-muted">{{ $percent_bandung }}%</div>
                          </li>
                          <li class="ct-series-1 d-flex flex-column">
                            <h6 class="mb-0 fw-bold">Padang</h6>
                            <span
                            class="badge badge-dot my-2 cursor-pointer rounded-pill"
                            style="background-color: #299AFF; width: 35px; height: 6px"
                            ></span>
                            <div class="text-muted">{{ $percent_padang }}%</div>
                          </li>
                          <li class="ct-series-1 d-flex flex-column">
                            <h6 class="mb-0 fw-bold">Lainnya</h6>
                            <span
                            class="badge badge-dot my-2 cursor-pointer rounded-pill"
                            style="background-color: #4F5D70; width: 35px; height: 6px"
                            ></span>
                            <div class="text-muted">{{ $percent_lainnya }}%</div>
                          </li>
                        </ul>
                      </div>
                    </div>
                </div>
                <!-- /Doughnut Chart -->

                <!-- Donut Chart -->
                <div class="col-lg-4 col-12 mb-4">
                  <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <div>
                        <h5 class="card-title mb-0">Headcount by Education</h5>
                      </div>
                    </div>
                    <div class="card-body">
                      <div id="donutChart"></div>
                    </div>
                  </div>
                </div>
                <!-- /Donut Chart -->

                <!-- Website Analytics-->
                <div class="col-lg-8 mb-4 col-md-12">
                  <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="card-title mb-0">Pemberhentian Karyawan Berdasarkan Usia</h5>
                      <div class="dropdown">
                    </div>
                    </div>
                    <div class="card-body pb-2">
                      <div id="analyticsBarChartUsia1B"></div>
                    </div>
                  </div>
                </div>

                <!-- Website Analytics-->
                <div class="col-lg-12 mb-4 col-md-12">
                  <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="card-title mb-0">Pemberhentian Karyawan Berdasarkan Departemen</h5>
                      <div class="dropdown">
                    </div>
                    </div>
                    <div class="card-body pb-2">
                      <div id="analyticsBarChartUsia1C"></div>
                    </div>
                  </div>
                </div>
            </div>


@endsection