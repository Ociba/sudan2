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
        @include('layouts.title')
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
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <h5 class="card-title text-bold-700 my-2 m-3">A table showing {{request()->route()->getName()}} Results</h5>
                                <div class="card-header">
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                       
                                    </div>
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
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>State</th>
                                                    <th>Total Marks</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($results as $i=>$result)
                                                @php
                                                    $total_state_marks = \DB::table('results')->where('state',$result->state)->sum('total');
                                                @endphp
                                                <tr>
                                                    <td>{{$i+1}}</td>
                                                    <td>{{$result->state}}</td>
                                                    <td>{{number_format($total_state_marks)}}</td>
                                                </tr>
                                                @endforeach 
                                            </tbody>
                                        </table>
                                        <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="col-lg-4"></div>
                                            <div class="col-lg-4">
                                                <nav class="mb-3" aria-label="Page navigation">
                                                    <ul class="pagination">
                                                        {{-- {{$results->links()}} --}}
                                                    </ul>
                                                </nav>
                                            </div>
                                            <div class="col-lg-4"></div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Content-->
        <!-- BEGIN: Customizer-->
        <!-- End: Customizer-->
        <!-- BEGIN: Footer-->
        @include('layouts.footer')
        <!-- END: Footer-->    
        <!-- END: Page JS-->
        <script src="{{ asset('admin/app-assets/js/scripts/cards/card-advanced.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('admin/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('admin/app-assets/vendors/js/forms/toggle/switchery.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('admin/app-assets/js/scripts/forms/switch.min.js')}}" type="text/javascript"></script>
        <!-- BEGIN Vendor JS-->
        <!-- BEGIN: Page Vendor JS-->
        <!-- END: Page Vendor JS-->
        <!-- BEGIN: Theme JS-->
        <script src="{{ asset('admin/app-assets/js/core/app-menu.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('admin/app-assets/js/core/app.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('admin/app-assets/js/scripts/customizer.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('admin/app-assets/vendors/js/jquery.sharrre.js')}}" type="text/javascript"></script>
        <!-- Modal -->
    </body>
</html>