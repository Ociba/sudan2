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
<!--/ Revenue, Hit Rate & Deals -->
<div class="row">
        <div class="col-xl-4 col-lg-6 col-12">
            <div class="card bg-gradient-x-purple-blue">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-white text-center align-self-top mt-0">
                                <span class="d-block mb-1 font-medium-1">Total Number of Schools</span>
                                <h1 class="text-white text-center mb-0">{{ number_format(auth()->user()->countNumberOfSchools())}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-12">
            <div class="card bg-gradient-x-orange-yellow">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-white text-center align-self-top mt-0">
                                <span class="d-block mb-1 font-medium-1">Total Number of Students</span>
                                <h1 class="text-white text-center mb-0">{{ number_format(auth()->user()->countNumberOfStudents())}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-12">
            <div class="card bg-gradient-x-purple-red">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-white text-center align-self-top mt-0">
                                <span class="d-block mb-1 font-medium-1">Total Number of Boys</span>
                                <h1 class="text-white text-center mb-0">{{ number_format(auth()->user()->countNumberOfBoys())}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-12">
            <div class="card bg-gradient-x-blue-green">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-white text-center align-self-top mt-0">
                                <span class="d-block mb-1 font-medium-1">Total Number of Girls</span>
                                <h1 class="text-white text-center mb-0">{{ number_format(auth()->user()->countNumberOfGirls())}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-12">
            <div class="card bg-gradient-x-purple-blue">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-white text-center align-self-top mt-0">
                                <span class="d-block mb-1 font-medium-1">Best Performed Student(s)</span>
                                @foreach (auth()->user()->getBestPerformer() as $best_performer)
                                <h4 class="text-white text-center mb-0">{{ $best_performer->first_name}} {{ $best_performer->second_name}} {{ $best_performer->third_name}} {{ $best_performer->fourth_name}}</h4><br>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-12">
            <div class="card bg-gradient-x-orange-yellow">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-white text-center align-self-top mt-0">
                                <span class="d-block mb-1 font-medium-1">Worst Performed Student(s)</span>
                                @foreach (auth()->user()->getWorstPerformer() as $best_performer)
                                <h4 class="text-white text-center mb-0">{{ $best_performer->first_name}} {{ $best_performer->second_name}} {{ $best_performer->third_name}} {{ $best_performer->fourth_name}}</h4><br>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Emails Products & Avg Deals -->
<div class="row">
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card bg-gradient-x-purple-blue">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-white text-center align-self-top mt-0">
                                <span class="d-block mb-1 font-medium-1">Best Performed School</span>
                                <h1 class="text-white text-center mb-0">{{auth()->user()->calculateTheBestPerformingSchool()}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card bg-gradient-x-orange-yellow">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-white text-center align-self-top mt-0">
                                <span class="d-block mb-1 font-medium-1">Worst Performed School</span>
                                <h1 class="text-white text-center mb-0">{{auth()->user()->calculateTheWorstPerformingSchool()}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card bg-gradient-x-blue-green">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-white text-center align-self-top mt-0">
                                <span class="d-block mb-1 font-medium-1">Best Performed State</span>
                                <h1 class="text-white text-center mb-0">{{auth()->user()->calculateTheBestPerformingState()}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card bg-gradient-x-purple-red">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-white text-center align-self-top mt-0">
                                <span class="d-block mb-1 font-medium-1">Worst Performed State</span>
                                <h1 class="text-white text-center mb-0">{{auth()->user()->calculateTheWorstPerformingState()}}</h1>
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
        <div class="col-6">
            <div class="card">
                <div class="card-header">
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
        <div class="col-6">
        <div class="card">
                <div class="card-header">
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
                    <div class="card-body chartjs">
                            <div class="height-400">
                        <canvas id="line-chart"></canvas>
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
                    <h4 class="card-title">Boys and Girls Performance</h4>
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
                    <h4 class="card-title ">Best Performed Subject & Worst performed Subject</h4>
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
     <script src="{{ asset('admin/app-assets/js/scripts/charts/chartjs/line/line.min.js')}}" type="text/javascript"></script>
  </body>
</html>
