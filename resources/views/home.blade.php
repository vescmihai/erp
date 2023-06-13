@extends('layouts.tabler-layout')

@section('content')
    <section class="section">

        <div class="section-body">
            <div class="page-wrapper">
                <!-- Page header -->
                <div class="page-header d-print-none">
                  <div class="container-xl">
                    <div class="row g-2 align-items-center">
                      <div class="col">
                        <!-- Page pre-title -->
                        <div class="page-pretitle">
                          ERP
                        </div>
                        <h2 class="page-title">
                          Dashboard
                        </h2>
                      </div>
                      <!-- Page title actions -->
                      <div class="col-auto ms-auto d-print-none">
                        <div class="btn-list">
                          <span class="d-none d-sm-inline">
                            <a href="#" class="btn">
                              Ver reportes
                            </a>
                          </span>
                          <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                            Crear nuevo reporte
                          </a>
                          <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Page body -->
                <div class="page-body">
                  <div class="container-xl">
                    <div class="row row-deck row-cards">
                      <div class="col-sm-6 col-lg-3">
                        <div class="card">
                          <div class="card-body">
                            <div class="d-flex align-items-center">
                              <div class="subheader">Consultas atendidas</div>
                              <div class="ms-auto lh-1">
                                <div class="dropdown">
                                  <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ultimos 7 dias</a>
                                  <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item active" href="#">Ultimos 7 dias</a>
                                    <a class="dropdown-item" href="#">Last 30 days</a>
                                    <a class="dropdown-item" href="#">Last 3 months</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="h1 mb-3">75%</div>
                            <div class="d-flex mb-2">
                          
                              <div class="ms-auto">
                                <span class="text-green d-inline-flex align-items-center lh-1">
                                  7% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                                </span>
                              </div>
                            </div>
                            <div class="progress progress-sm">
                              <div class="progress-bar bg-primary" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                                <span class="visually-hidden">75% Complete</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-3">
                        <div class="card">
                          <div class="card-body">
                            <div class="d-flex align-items-center">
                              <div class="subheader">Ingresos</div>
                              <div class="ms-auto lh-1">
                                <div class="dropdown">
                                  <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ultimos 7 dias</a>
                                  <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item active" href="#">Last 7 days</a>
                                    <a class="dropdown-item" href="#">Last 30 days</a>
                                    <a class="dropdown-item" href="#">Last 3 months</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="d-flex align-items-baseline">
                              <div class="h1 mb-0 me-2">41,300Bs</div>
                              <div class="me-auto">
                                <span class="text-green d-inline-flex align-items-center lh-1">
                                  8% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div id="chart-revenue-bg" class="chart-sm"></div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-3">
                        <div class="card">
                          <div class="card-body">
                            <div class="d-flex align-items-center">
                              <div class="subheader">Nuevos pacientes</div>
                              <div class="ms-auto lh-1">
                                <div class="dropdown">
                                  <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ultimos 7 dias</a>
                                  <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item active" href="#">Last 7 days</a>
                                    <a class="dropdown-item" href="#">Last 30 days</a>
                                    <a class="dropdown-item" href="#">Last 3 months</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="d-flex align-items-baseline">
                              <div class="h1 mb-3 me-2">67</div>
                              <div class="me-auto">
                                <span class="text-yellow d-inline-flex align-items-center lh-1">
                                  0% <!-- Download SVG icon from http://tabler-icons.io/i/minus -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /></svg>
                                </span>
                              </div>
                            </div>
                            <div id="chart-new-clients" class="chart-sm"></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-3">
                        <div class="card">
                          <div class="card-body">
                            <div class="d-flex align-items-center">
                              <div class="subheader">Laboratorios clinicos</div>
                              <div class="ms-auto lh-1">
                                <div class="dropdown">
                                  <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ultimos 7 dias</a>
                                  <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item active" href="#">Last 7 days</a>
                                    <a class="dropdown-item" href="#">Last 30 days</a>
                                    <a class="dropdown-item" href="#">Last 3 months</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="d-flex align-items-baseline">
                              <div class="h1 mb-3 me-2">29</div>
                              <div class="me-auto">
                                <span class="text-green d-inline-flex align-items-center lh-1">
                                  4% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                                </span>
                              </div>
                            </div>
                            <div id="chart-active-users" class="chart-sm"></div>
                          </div>
                        </div>
                      </div>
                      
                      
                     

                      <div class="col-md-6 col-lg-4">
                        <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">Redes sociales</h3>
                          </div>
                          <table class="table card-table table-vcenter">
                            <thead>
                              <tr>
                                <th>Red social</th>
                                <th colspan="2">Vistas</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Instagram</td>
                                <td>3,550</td>
                                <td class="w-50">
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-primary" style="width: 71.0%"></div>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>Twitter</td>
                                <td>1,798</td>
                                <td class="w-50">
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-primary" style="width: 35.96%"></div>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>Facebook</td>
                                <td>1,245</td>
                                <td class="w-50">
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-primary" style="width: 24.9%"></div>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>TikTok</td>
                                <td>986</td>
                                <td class="w-50">
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-primary" style="width: 19.72%"></div>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>Pinterest</td>
                                <td>854</td>
                                <td class="w-50">
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-primary" style="width: 17.08%"></div>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>VK</td>
                                <td>650</td>
                                <td class="w-50">
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-primary" style="width: 13.0%"></div>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>Pinterest</td>
                                <td>420</td>
                                <td class="w-50">
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-primary" style="width: 8.4%"></div>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="col-md-12 col-lg-8">
                        <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">Tareas pendientes</h3>
                          </div>
                          <div class="table-responsive">
                            <table class="table card-table table-vcenter">
                              <tr>
                                <td class="w-1 pe-0">
                                  <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" checked >
                                </td>
                                <td class="w-100">
                                  <a href="#" class="text-reset">Reconsultas.</a>
                                </td>
                                <td class="text-nowrap text-muted">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" /><path d="M16 3v4" /><path d="M8 3v4" /><path d="M4 11h16" /><path d="M11 15h1" /><path d="M12 15v3" /></svg>
                                  Junio 04, 2023
                                </td>
                                <td class="text-nowrap">
                                  <a href="#" class="text-muted">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                                    2/7
                                  </a>
                                </td>
                                <td class="text-nowrap">
                                  <a href="#" class="text-muted">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 9h8" /><path d="M8 13h6" /><path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" /></svg>
                                    3</a>
                                </td>
                                <td>
                                  <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
                                </td>
                              </tr>
                              <tr>
                                <td class="w-1 pe-0">
                                  <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" >
                                </td>
                                <td class="w-100">
                                  <a href="#" class="text-reset">Pacientes.</a>
                                </td>
                                <td class="text-nowrap text-muted">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" /><path d="M16 3v4" /><path d="M8 3v4" /><path d="M4 11h16" /><path d="M11 15h1" /><path d="M12 15v3" /></svg>
                                  Junio 03, 2023
                                </td>
                                <td class="text-nowrap">
                                  <a href="#" class="text-muted">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                                    3/10
                                  </a>
                                </td>
                                <td class="text-nowrap">
                                  <a href="#" class="text-muted">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 9h8" /><path d="M8 13h6" /><path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" /></svg>
                                    6</a>
                                </td>
                                <td>
                                  <span class="avatar avatar-sm">JL</span>
                                </td>
                              </tr>
                              <tr>
                                <td class="w-1 pe-0">
                                  <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" >
                                </td>
                                <td class="w-100">
                                  <a href="#" class="text-reset">Recetas</a>
                                </td>
                                <td class="text-nowrap text-muted">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" /><path d="M16 3v4" /><path d="M8 3v4" /><path d="M4 11h16" /><path d="M11 15h1" /><path d="M12 15v3" /></svg>
                                  Mayo 28, 2023
                                </td>
                                <td class="text-nowrap">
                                  <a href="#" class="text-muted">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                                    0/6
                                  </a>
                                </td>
                                <td class="text-nowrap">
                                  <a href="#" class="text-muted">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 9h8" /><path d="M8 13h6" /><path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" /></svg>
                                    1</a>
                                </td>
                                <td>
                                  <span class="avatar avatar-sm" style="background-image: url(./static/avatars/002m.jpg)"></span>
                                </td>
                              </tr>
                              <tr>
                                <td class="w-1 pe-0">
                                  <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" checked >
                                </td>
                                <td class="w-100">
                                  <a href="#" class="text-reset">Laboratorios.</a>
                                </td>
                                <td class="text-nowrap text-muted">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" /><path d="M16 3v4" /><path d="M8 3v4" /><path d="M4 11h16" /><path d="M11 15h1" /><path d="M12 15v3" /></svg>
                                  Junio 07, 2023
                                </td>
                                <td class="text-nowrap">
                                  <a href="#" class="text-muted">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                                    6/10
                                  </a>
                                </td>
                                <td class="text-nowrap">
                                  <a href="#" class="text-muted">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 9h8" /><path d="M8 13h6" /><path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" /></svg>
                                    12</a>
                                </td>
                                <td>
                                  <span class="avatar avatar-sm" style="background-image: url(./static/avatars/003m.jpg)"></span>
                                </td>
                              </tr>
                              <tr>
                                <td class="w-1 pe-0">
                                  <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" >
                                </td>
                                <td class="w-100">
                                  <a href="#" class="text-reset">Salas</a>
                                </td>
                                <td class="text-nowrap text-muted">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" /><path d="M16 3v4" /><path d="M8 3v4" /><path d="M4 11h16" /><path d="M11 15h1" /><path d="M12 15v3" /></svg>
                                  Mayo 23, 2023
                                </td>
                                <td class="text-nowrap">
                                  <a href="#" class="text-muted">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                                    3/7
                                  </a>
                                </td>
                                <td class="text-nowrap">
                                  <a href="#" class="text-muted">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 9h8" /><path d="M8 13h6" /><path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" /></svg>
                                    5</a>
                                </td>
                                <td>
                                  <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000f.jpg)"></span>
                                </td>
                              </tr>
                              <tr>
                                <td class="w-1 pe-0">
                                  <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" checked >
                                </td>
                                <td class="w-100">
                                  <a href="#" class="text-reset">Doctores</a>
                                </td>
                                <td class="text-nowrap text-muted">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" /><path d="M16 3v4" /><path d="M8 3v4" /><path d="M4 11h16" /><path d="M11 15h1" /><path d="M12 15v3" /></svg>
                                  Mayo 14, 2023
                                </td>
                                <td class="text-nowrap">
                                  <a href="#" class="text-muted">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                                    2/9
                                  </a>
                                </td>
                                <td class="text-nowrap">
                                  <a href="#" class="text-muted">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 9h8" /><path d="M8 13h6" /><path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" /></svg>
                                    3</a>
                                </td>
                                <td>
                                  <span class="avatar avatar-sm" style="background-image: url(./static/avatars/001f.jpg)"></span>
                                </td>
                              </tr>
                            </table>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <footer class="footer footer-transparent d-print-none">
                  <div class="container-xl">
                    <div class="row text-center align-items-center flex-row-reverse">
                      <div class="col-lg-auto ms-lg-auto">
                        <ul class="list-inline list-inline-dots mb-0">
                          <li class="list-inline-item"><a href="https://tabler.io/docs" target="_blank" class="link-secondary" rel="noopener">Documentación</a></li>
                         
                        </ul>
                      </div>
                      <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                        <ul class="list-inline list-inline-dots mb-0">
                          <li class="list-inline-item">
                            Copyright &copy; 2023.
                            
                            All rights reserved.
                          </li>
  
                        </ul>
                      </div>
                    </div>
                  </div>
                </footer>
              </div>
            </div>
        </div>
        
    </section>
    

        
@endsection

