<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="">
  <!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>South Sudan National Examination Council</title>
    <link rel="apple-touch-icon" href="{{ asset('admin/app-assets/images/ico/logo.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/app-assets/images/ico/logo.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    
    @include('layouts.css')
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

    <!-- BEGIN: Header-->
   @include('layouts.navbar')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('layouts.sidebar')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-body">
        <div class="row">
        <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Project X</h4>

                    <div class="heading-elements">
                        <ul class="list-inline d-block mb-0">
                            <li>
                                <a class="btn btn-sm btn-info box-shadow-3 round btn-min-width pull-right" href="#" target="_blank">In Progress</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body pt-0 pb-1">
                        <h6 class="text-bold-600"> Task Completed:
                            <span>4/10</span>
                        </h6>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="media d-flex">
                            <div class="align-self-center">
                                <h6 class="text-bold-600 mt-2"> Client:
                                    <span class="info">Xeon Inc.</span>
                                </h6>
                                <h6 class="text-bold-600 mt-1"> Deadline:
                                    <span class="blue-grey">5th June, 2018</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Project Y</h4>
                    <div class="heading-elements">
                        <ul class="list-inline d-block mb-0">
                            <li>
                                <a class="btn btn-sm btn-warning box-shadow-3 round btn-min-width pull-right" href="#" target="_blank">Completed</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body pt-0 pb-1">
                        <h6 class="text-bold-600"> Task Completed:
                            <span>10/10</span>
                        </h6>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                        <div class="media d-flex">
                            <div class="align-self-center">
                                <h6 class="text-bold-600 mt-2"> Client:
                                    <span class="warning media-body text-right">Foxit Corp</span>
                                </h6>
                                <h6 class="text-bold-600 mt-1"> Deadline:
                                    <span class="blue-grey media-body text-right">11th May, 2018</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Project Y</h4>
                    <div class="heading-elements">
                        <ul class="list-inline d-block mb-0">
                            <li>
                                <a class="btn btn-sm btn-success box-shadow-3 round btn-min-width pull-right" href="#" target="_blank">Completed</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body pt-0 pb-1">
                        <h6 class="text-bold-600"> Task Completed:
                            <span>10/10</span>
                        </h6>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                        <div class="media d-flex">
                            <div class="align-self-center">
                                <h6 class="text-bold-600 mt-2"> Client:
                                    <span class="success media-body text-right">Foxit Corp</span>
                                </h6>
                                <h6 class="text-bold-600 mt-1"> Deadline:
                                    <span class="blue-grey media-body text-right">11th May, 2018</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--/ Revenue, Hit Rate & Deals -->
<!-- Emails Products & Avg Deals -->
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header p-1">
                <h4 class="card-title float-left">Overall Performance - <span class="blue-grey lighten-2 font-small-3 mb-0">{{ date('Y')}}</span></h4>
                <span class="badge badge-pill badge-info float-right m-0">Number of Candidates Registered 26</span>
            </div>
            <div class="card-content collapse show">
                <div class="card-footer text-center p-1">
                    <div class="row">
                        <div class="col-md-3 col-12 border-right-blue-grey border-right-lighten-5 text-center">
                            <p class="blue-grey lighten-2 mb-0">Girls</p>
                            <p class="font-medium-5 text-bold-400">58%</p>
                        </div>
                        <div class="col-md-3 col-12 border-right-blue-grey border-right-lighten-5 text-center">
                            <p class="blue-grey lighten-2 mb-0">Boys</p>
                            <p class="font-medium-5 text-bold-400">42%</p>
                        </div>
                        <div class="col-md-3 col-12 text-center">
                            <p class="blue-grey lighten-2 mb-0">Passed</p>
                            <p class="font-medium-5 text-bold-400">4.5</p>
                        </div>
                        <div class="col-md-3 col-12 text-center">
                            <p class="blue-grey lighten-2 mb-0">Failed</p>
                            <p class="font-medium-5 text-bold-400">4.5</p>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Emails Products & Avg Deals -->
<!-- Chat and Recent Projects -->
<div class="row">
<div class="col-md-12 col-lg-12 col-xl-12">
<section id="chartjs-bar-charts">
    <!-- Column Chart -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center">Bar Chart Showing Candidates Performance for the Last 5 Years</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                            <div class="height-400">
                        <canvas id="column-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
</div>
<div class="row">
<div class="col-md-12 col-lg-12 col-xl-12">
<!-- Pie charts section start -->
<section id="chartjs-pie-charts">
    <div class="row">
        <!-- Simple Pie Chart -->
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Regional Performance Summary</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                            <div class="height-400">
                        <canvas id="simple-pie-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Simple Doughnut Chart -->
        <div class="col-md-6 col-sm-12">
        <div class="card">
                <div class="card-header">
                    <h4 class="card-title ">Candidates Registered Per Region</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                            <div class="height-400">
                        <canvas id="simple-pie-chart2"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</section>
<!-- // Pie charts section end -->
<!-- Total earning & Recent Sales  -->
</div>
</div>
<div class="row" style="visibility: hidden;">
    <div class="col-md-12 col-lg-6 col-xl-4">
        <div class="card bg-gray">
            <div class="card-conten">
                <div class="card-body chat-applicatio">
                    <div class="chats height-30">
                        <div class="cha">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Total earning & Recent Sales  -->
        </div>
      </div>
    </div>
    <!-- END: Content-->
    <!-- BEGIN: Footer-->
    @include('layouts.footer')
    <!-- END: Footer-->    
    <!-- END: Page JS-->
     @include('layouts.javascript')
     <script src="{{ asset('admin/app-assets/js/scripts/charts/chartjs/bar/column.js')}}" type="text/javascript"></script>
     <script src="{{ asset('admin/app-assets/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>
     <script src="{{ asset('admin/app-assets/js/scripts/charts/chartjs/pie-doughnut/pie-simple.min.js')}}" type="text/javascript"></script>
     <script src="{{ asset('admin/app-assets/js/scripts/charts/chartjs/pie-doughnut/doughnut-simple.min.js')}}" type="text/javascript"></script>
     <script src="{{ asset('admin/app-assets/js/scripts/charts/chartjs/pie-doughnut/pie-simple2.min.js')}}" type="text/javascript"></script>
  </body>
</html>
