{{--<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>--}}

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
                    <h4 class="card-title">Total No. of Schools</h4>

                    <div class="heading-elements">
                        <ul class="list-inline d-block mb-0">
                            <li>
                                <a class="btn btn-sm btn-secondary box-shadow-3 round btn-min-width pull-right" href="#" target="_blank">{{ date('Y') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body pt-0 pb-1">
                        {{--<h6 class="text-bold-600"> Task Completed:
                            <span>4/10</span>
                        </h6>
                        --}}
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-secondary" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="media d-flex">
                            <div class="align-self-center">
                                {{--<h6 class="text-bold-600 mt-2"> Primary Eight Schools:
                                    <span class="info">50000</span>
                                </h6>
                                --}}
                                <h6 class="text-bold-600 mt-1"> Total Number Of Schools:
                                    <span class="blue-grey">{{ number_format(auth()->user()->countNumberOfSchools())}}</span>
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
                    <h4 class="card-title">Total No. of Students</h4>

                    <div class="heading-elements">
                        <ul class="list-inline d-block mb-0">
                            <li>
                                <a class="btn btn-sm btn-info box-shadow-3 round btn-min-width pull-right" style="width:20px;" href="#" target="_blank">{{ date('Y') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body pt-0 pb-1">
                        {{--<h6 class="text-bold-600"> Task Completed:
                            <span>4/10</span>
                        </h6>
                        --}}
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="media d-flex">
                            <div class="align-self-center">
                                {{--<h6 class="text-bold-600 mt-2"> Primary Eight Schools:
                                    <span class="info">50000</span>
                                </h6>
                                --}}
                                <h6 class="text-bold-600 mt-1">Total Number Of Students:
                                    <span class="blue-grey">{{ number_format(auth()->user()->countNumberOfStudents())}}</span>
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
                    <h4 class="card-title">Number of Boys</h4>
                    <div class="heading-elements">
                        <ul class="list-inline d-block mb-0">
                            <li>
                                <a class="btn btn-sm btn-warning box-shadow-3 round btn-min-width pull-right" href="#" target="_blank">{{ date('Y') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body pt-0 pb-1">
                        {{--<h6 class="text-bold-600"> Task Completed:
                            <span>10/10</span>
                        </h6>
                        --}}
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                        <div class="media d-flex">
                            <div class="align-self-center">
                                {{--<h6 class="text-bold-600 mt-2"> Primary Eight Candiates:
                                    <span class="warning media-body text-right">67000</span>
                                </h6>
                                --}}
                                <h6 class="text-bold-600 mt-1"> Total Number Of Boys:
                                    <span class="blue-grey media-body text-right">{{number_format(auth()->user()->countNumberOfBoys())}}</span>
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
                    <h4 class="card-title">Number of Girls</h4>
                    <div class="heading-elements">
                        <ul class="list-inline d-block mb-0">
                            <li>
                                <a class="btn btn-sm btn-success box-shadow-3 round btn-min-width pull-right" href="#" target="_blank">{{ date('Y') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body pt-0 pb-1">
                        {{--<h6 class="text-bold-600"> Task Completed:
                            <span>10/10</span>
                        </h6>
                        --}}
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                        <div class="media d-flex">
                            <div class="align-self-center">
                                {{--<h6 class="text-bold-600 mt-2"> Primary Eight Candidates:
                                    <span class="success media-body text-right">24000</span>
                                </h6>
                                --}}
                                <h6 class="text-bold-600 mt-1"> Total Number Of Girls:
                                    <span class="blue-grey media-body text-right">{{ number_format(auth()->user()->countNumberOfGirls())}}</span>
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
                    <h4 class="card-title">Best Performed Student(s)</h4>
                    <div class="heading-elements">
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body pt-0 pb-1">
                        {{--<h6 class="text-bold-600"> Task Completed:
                            <span>10/10</span>
                        </h6>
                        --}}
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-primary" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                        <div class="media d-flex">
                            <div class="align-self-center">
                                {{--<h6 class="text-bold-600 mt-2"> Primary Eight Candidates:
                                    <span class="success media-body text-right">24000</span>
                                </h6>
                                --}}
                                <h6 class="text-bold-600 mt-1">
                                    @foreach (auth()->user()->getBestPerformer() as $names)
                                        <span class="blue-grey media-body text-right">{{ $names->first_name }} {{$names->second_name}} {{ $names->third_name}} {{ $names->fourth_name}} (marks: {{auth()->user()->getBestPerformerTotal()}})</span><br>
                                    @endforeach
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
                    <h4 class="card-title">Worst Performed Student(s)</h4>
                    <div class="heading-elements">
                        <ul class="list-inline d-block mb-0">
                            <li>
                                <a class="btn btn-sm btn-danger box-shadow-3 round btn-min-width pull-right" href="#" target="_blank">{{ date('Y') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body pt-0 pb-1">
                        {{--<h6 class="text-bold-600"> Task Completed:
                            <span>10/10</span>
                        </h6>
                        --}}
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                        <div class="media d-flex">
                            <div class="align-self-center">
                                {{--<h6 class="text-bold-600 mt-2"> Primary Eight Candidates:
                                    <span class="success media-body text-right">24000</span>
                                </h6>
                                --}}
                                <h6 class="text-bold-600 mt-1">
                                    @foreach (auth()->user()->getWorstPerformer() as $names)
                                        <span class="blue-grey media-body text-right">{{ $names->first_name }} {{$names->second_name}} {{ $names->third_name}} {{ $names->fourth_name}} (marks: {{auth()->user()->getWorstPerformerTotal()}})</span><br>
                                    @endforeach
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
        <div class="col-xl-6 col-lg-6 col-12">
            <div class="card bg-gradient-x-purple-blue">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="align-self-top">
                                <i class="icon-grid icon-opacity text-white font-large-4 float-left"></i>
                            </div>
                            <div class="media-body text-white text-right align-self-bottom mt-3">
                                <span class="d-block mb-1 font-medium-1">Best Performed School</span>
                                <h1 class="text-white mb-0">{{'687,142'}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-12">
            <div class="card bg-gradient-x-orange-yellow">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="align-self-top">
                                <i class="icon-home icon-opacity text-white font-large-4 float-left"></i>
                            </div>
                            <div class="media-body text-white text-right align-self-bottom mt-3">
                                <span class="d-block mb-1 font-medium-1">Worst Performed School</span>
                                <h1 class="text-white mb-0">$18,123</h1>
                            </div>
                        </div>
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
{{--
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
--}}
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
