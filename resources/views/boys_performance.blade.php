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
                                    <div class="card-body">
                                        <div class=" pull-right">
                                        <form class="chat-app-input row mb-2"  action="/search-by-index_number">
                                            <div class="col-12">
                                                <div class="input-group position-relative has-icon-left">
                                                    <div class="form-control-position">
                                                        <span id="basic-addon3"><i class="ft-image"></i></span>
                                                    </div>
                                                    <input type="text" placeholder="Search by index number.." class="form-control round" name="search">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary" type="submit">Search</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Index Number</th>
                                                    <th>First Name</th>
                                                    <th>Second Name</th>
                                                    <th>Third Name</th>
                                                    <th>Fourth Name</th>
                                                    <th>Gender</th>
                                                    <th>English Language</th>
                                                    <th>Christain Religious Education</th>
                                                    <th>Islamic Religiuos Education</th>
                                                    <th>Mathematics</th>
                                                    <th>Physics</th>
                                                    <th>Chemistry</th>
                                                    <th>Biology</th>
                                                    <th>Agriculture</th>
                                                    <th>Additional Mathematics</th>
                                                    <th>Computer Science</th>
                                                    <th>Arabic Language</th>
                                                    <th>French Language</th>
                                                    <th>Fine Arts</th>
                                                    <th>Geography</th>
                                                    <th>History</th>
                                                    <th>Commerce</th>
                                                    <th>General Science</th>
                                                    <th>Principles of Accounts</th>
                                                    <th>English Literature </th>
                                                    <th>Total </th>
                                                    <th>Percentage</th>
                                                    <th>Result</th>
                                                    <th>Number of subjects registered</th>
                                                    <th>Center Number</th>
                                                    <th>School Name</th>
                                                    <th>State</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($results as $i=>$result)
                                                <tr>
                                                    <td>{{$i+1}}</td>
                                                    <td>{{$result->index_number}}</td>
                                                    <td>{{$result->first_name}}</td>
                                                    <td>{{$result->second_name}}</td>
                                                    <td>{{$result->third_name}}</td>
                                                    <td>{{$result->fourth_name}}</td>
                                                    <td>{{$result->female_gender}} {{$result->male_gender}}</td>
                                                    <td>{{$result->english_languge}}</td>
                                                    <td>{{$result->CRE}}</td>
                                                    <td>{{$result->IRE}}</td>
                                                    <td>{{$result->mathematics}}</td>
                                                    <td>{{$result->physics}}</td>
                                                    <td>{{$result->chemistry}}</td>
                                                    <td>{{$result->biology}}</td>
                                                    <td>{{$result->agriculture}}</td>
                                                    <td>{{$result->additional_mtc}}</td>
                                                    <td>{{$result->computer_science}}</td>
                                                    <td>{{$result->arabic_language}}</td>
                                                    <td>{{$result->french_language}}</td>
                                                    <td>{{$result->fine_arts}}</td>
                                                    <td>{{$result->geography}}</td>
                                                    <td>{{$result->history}}</td>
                                                    <td>{{$result->commerce}}</td>
                                                    <td>{{$result->general_science}}</td>
                                                    <td>{{$result->principles_of_accounts}}</td>
                                                    <td>{{$result->english_literatue}}</td>
                                                    <td>{{$result->total}}</td>
                                                    <td>{{$result->percentage}}</td>
                                                    <td>{{$result->result}}</td>
                                                    <td>{{$result->no_of_subjects}}</td>
                                                    <td>{{$result->center_number}}</td>
                                                    <td>{{$result->school_name}}</td>
                                                    <td>{{$result->state}}</td>
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
                                                        {{$results->links()}}
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