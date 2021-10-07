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
    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
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
            <!-- File export table -->
<section id="file-export">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file" class="form-control">
                        <br>
                        <button class="btn btn-success">Import Results</button>
                    </form><br>
                    <h4 class="card-titl">Export Your Results
                    {{--<a href="/add-results" button class="btn btn-primary pull-right text-white">Add Marks</button></a>--}}
                    </h4>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered file-export">
                                <thead>
                                    <tr>
                                        <th>Index Number</th>
                                        <th>First Name</th>
                                        <th>Second Name</th>
                                        <th>Third Name</th>
                                        <th>Fourth Name</th>
                                        <th>Female Gender</th>
                                        <th>Male Gender</th>
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
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($results as $i=>$result)
                                    <tr>    
                                        <td>{{$result->index_number}}</td>
                                        <td>{{$result->first_name}}</td>
                                        <td>{{$result->second_name}}</td>
                                        <td>{{$result->third_name}}</td>
                                        <td>{{$result->fourth_name}}</td>
                                        <td>{{$result->female_gender}}</td>
                                        <td>{{$result->male_gender}}</td>
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
                                        <td>
                                            <a href="/add-results/{{$result->id}}" button type="button" class="btn btn-sm btn-info ">Add Results</button></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!--/ Revenue, Hit Rate & Deals -->
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
    @include('layouts.javascript')
    <script src="{{ asset('admin/app-assets/vendors/js/tables/datatable/datatables.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/app-assets/vendors/js/tables/buttons.flash.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/app-assets/vendors/js/tables/jszip.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/app-assets/vendors/js/tables/pdfmake.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/app-assets/vendors/js/tables/vfs_fonts.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/app-assets/vendors/js/tables/buttons.html5.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/app-assets/vendors/js/tables/buttons.print.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/app-assets/js/scripts/tables/datatables/datatable-advanced.min.js')}}" type="text/javascript"></script>

    <div class="col-lg-4 col-md-6 col-sm-12 my-1">
        <div class="form-group">
            <!-- Modal -->
            @foreach($results as $result)
            <div class="modal fade text-left" id="info_{{$result->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel11" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-info white">
                    <h4 class="modal-title white" id="myModalLabel11">Enter Candidate Marks</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label class="col-md-6 label-control" for="projectinput6">Select Subject:</label>
		                        	<div class="col-md-12">
			                            <select id="addCompanyAccount" name="interested" class="form-control border-primary">
			                                <option value="Englishlang" >English Language</option>
			                                <option value="design">Christain Religious Education</option>
			                                <option value="development">Islamic Religiuos Education</option>
			                                <option value="illustration">Mathematics</option>
			                                <option value="branding">Physics</option>
			                                <option value="video">Chemistry</option>
                                            <option value="company_agency">Biology</option>
                                            <option value="video">Agriculture</option>
                                            <option value="video">Additional Mathematics</option>
                                            <option value="video">Computer Science</option>
                                            <option value="video">Arabic Language</option>
                                            <option value="video">French Language</option>
                                            <option value="video">Fine Arts</option>
                                            <option value="video">Geography</option>
                                            <option value="video">History</option>
                                            <option value="video">Commerce</option>
                                            <option value="video">General Science</option>
                                            <option value="video">Principles of Accounts</option>
                                            <option value="video">English Literature</option>
			                            </select>
		                            </div>
                            </div>
                            <div id="dvaccount" style="display: none">
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label for="inputFirstname">Enter Subject Marks</label>
                                        <input type="text" name="agent_name" class="form-control border-primary" id="txtPassportNumber1" placeholder="">
                                    </div>
                                </div>
                                
                                <input type="text" value="{{$result->id}}" >
                                
                            </div>
                            <div id="Englishlang" style="display: none">
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label for="inputFirstname">Enter Subject Marks</label>
                                        <input type="text" name="biology" class="form-control border-primary" id="txtPassportNumber1" placeholder="">
                                    </div>
                                </div>
                                @foreach($results as $result)
                                <input type="text" value="{{$result->id}}" >
                                @endforeach
                            </div>
                            <div class="col-lg-12 mb-3 ">
                        <button type="button" class="btn grey btn-secondary mr-1" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-info">Save</button>
                        </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <script type="text/javascript">
    $(function () {
        $("#addCompanyAccount").change(function () {
            if ($(this).val() == "company_agency") {
                $("#dvaccount").show();
            } else {
                $("#dvaccount").hide();
            }
        });
    });
</script>
</body>
</html>
