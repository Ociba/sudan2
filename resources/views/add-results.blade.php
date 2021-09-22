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
                    <h4 class="card-titl">Enter the Results Information
                    </h4>
                    
                </div>
                <div class="card-content collpase show">
	                <div class="card-body">
						<div class="card-text">
						</div>
	                    <form class="form form-horizontal">
	                    	<div class="form-body">
	                    		<h4 class="form-section"><i class="la la-eye"></i> Student Results Form</h4>
	                    		<div class="row">
	                    			<div class="col-md-6">
				                        <div class="form-group row">
				                        	<label class="col-md-3 label-control" for="userinput1">Fist Name</label>
				                        	<div class="col-md-9">
				                            	<input type="text" id="userinput1" class="form-control border-primary" placeholder="First Name" name="firstname">
				                            </div>
				                        </div>
				                    </div>
				                    <div class="col-md-6">
				                        <div class="form-group row">
				                        	<label class="col-md-3 label-control" for="userinput2">Last Name</label>
				                        	<div class="col-md-9">
				                            	<input type="text" id="userinput2" class="form-control border-primary" placeholder="Last Name" name="lastname">
			                        		</div>
				                        </div>
			                        </div>
		                        </div>
		                        <div class="row">
		                        	<div class="col-md-6">
			                        	<div class="form-group row">
				                        	<label class="col-md-3 label-control" for="userinput3">Username</label>
				                        	<div class="col-md-9">
				                            	<input type="text" id="userinput3" class="form-control border-primary" placeholder="Username" name="username">
			                        		</div>
			                       		</div>
			                       	</div>
			                       	<div class="col-md-6">
				                        <div class="form-group row">
				                        	<label class="col-md-3 label-control" for="userinput4">Nick Name</label>
				                        	<div class="col-md-9">
				                            	<input type="text" id="userinput4" class="form-control border-primary" placeholder="Nick Name" name="nickname">
			                        		</div>
				                        </div>
				                    </div>
		                        </div>		                      
		                        <div class="row">
		                        	<div class="col-md-6">
		                        		<div class="form-group row">
				                        	<label class="col-md-3 label-control" for="userinput5">Email</label>
				                        	<div class="col-md-9">
												<input class="form-control border-primary" type="email" placeholder="email" id="userinput5">
				                        	</div>
					                    </div>

					                    <div class="form-group row">
				                        	<label class="col-md-3 label-control" for="userinput6">Date</label>
				                        	<div class="col-md-9">
												<input class="form-control border-primary" type="date" placeholder="http://" id="userinput6">
											</div>
										</div>

										<div class="form-group row">
				                        	<label class="col-md-3 label-control">Contact Number</label>
				                        	<div class="col-md-9">
												<input class="form-control border-primary" type="tel" placeholder="Contact Number" id="userinput7">
											</div>
				                        </div>
		                        	</div>
		                        	<div class="col-md-6">
		                        		<div class="form-group row">
				                        	<label class="col-md-3 label-control" for="userinput8">Bio</label>
				                        	<div class="col-md-9">
				                            	<textarea id="userinput8" rows="5" class="form-control border-primary" name="bio" placeholder="Bio"></textarea>
				                           	</div>
				                        </div>
                                        <div class="form-group row">
		                        	<label class="col-md-3 label-control" for="projectinput6">Interested in</label>
		                        	<div class="col-md-9">
			                            <select id="projectinput6" name="interested" class="form-control border-primary">
			                                <option value="none" selected="" disabled="">Interested in</option>
			                                <option value="design">design</option>
			                                <option value="development">development</option>
			                                <option value="illustration">illustration</option>
			                                <option value="branding">branding</option>
			                                <option value="video">video</option>
			                            </select>
		                            </div>
		                        </div>
		                        	</div>
		                        </div>
							</div>

	                        <div class="form-actions center">
	                            <a href="/table" button  class="btn btn-warning mr-1">
	                            	<i class="ft-x"></i> Back
	                            </button></a>
	                            <button type="submit" class="btn btn-primary">
	                                <i class="la la-check-square-o"></i> Save
	                            </button>
	                        </div>
	                    </form>

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
  </body>
</html>
