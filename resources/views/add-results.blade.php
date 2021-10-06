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
			@include('layouts.message')
            <div class="card">
                <div class="card-header">
                    <h4 class="card-titl">Enter the Results Information
                    </h4>
                    
                </div>
                <div class="card-content collpase show">
	                <div class="card-body">
						<div class="card-text">
						</div>
						@foreach($add_results as $result)
	                    <form class="form form-horizontal" action="/enter-results/{{$result->id}}" method="get">
	                    	<div class="form-body">
	                    		<h4 class="form-section"><i class="la la-eye"></i> Student Results Form</h4>
	                    		<div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<label for="english_languge">English Language</label>
											<input type="text" id="english_languge" class="form-control border-primary" value="{{$result->english_languge}}"  placeholder="English Marks" name="english_languge">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="CRE">Christian Religius Education</label>
											<input type="text" id="CRE" class="form-control border-primary" value="{{$result->CRE}}" placeholder="CRE Marks" name="CRE">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="IRE">Islamic Religius Education</label>
											<input type="text" id="IRE" class="form-control border-primary" placeholder="Islamic Religius Education Marks"  value="{{$result->IRE}}" name="IRE">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="mathematics">Mathematics</label>
											<input type="text" id="mathematics" class="form-control border-primary" placeholder="Mathematics Marks"value="{{$result->mathematics}}" name="mathematics">
										</div>
									</div>
								</div>
		                        <div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<label for="physics">Physics</label>
											<input type="text" id="physics" class="form-control border-primary" placeholder="Physics Marks" value="{{$result->physics}}" name="physics">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="chemistry">Chemistry</label>
											<input type="text" id="chemistry" class="form-control border-primary" placeholder="Chemistry Marks" value="{{$result->chemistry}}" name="chemistry">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="biology">Biology</label>
											<input type="text" id="biology" class="form-control border-primary" placeholder="Biology Marks" value="{{$result->biology}}" name="biology">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="agriculture">Agriculture Marks</label>
											<input type="text" id="agriculture" class="form-control border-primary" placeholder="Agriculture Marks" value="{{$result->agriculture}}" name="agriculture">
										</div>
									</div>
								</div>		                      
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<label for="additional_mtc">Additional Mathematics</label>
											<input type="text" id="additional_mtc" class="form-control border-primary" placeholder="Additional Mathematics Marks" value="{{$result->additional_mtc}}" name="additional_mtc">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="computer_science">Computer Science</label>
											<input type="text" id="computer_science" class="form-control border-primary" placeholder="Computer Science Marks" value="{{$result->computer_science}}" name="computer_science">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="arabic_language">Arabic Language</label>
											<input type="text" id="arabic_language" class="form-control border-primary" placeholder="Aabic Language Marks" value="{{$result->arabic_language}}" name="arabic_language">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="french_language">French Language</label>
											<input type="text" id="french_language" class="form-control border-primary" placeholder="French Language Marks" value="{{$result->french_language}}" name="french_language">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<label for="fine_arts">Fine Arts</label>
											<input type="text" id="fine_arts" class="form-control border-primary" placeholder="Fine Art Marks" value="{{$result->fine_arts}}" name="fine_arts">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="geography">Geography</label>
											<input type="text" id="geography" class="form-control border-primary" placeholder="Geography Marks" value="{{$result->geography}}" name="geography">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="history">History</label>
											<input type="text" id="history" class="form-control border-primary" placeholder="History Marks" value="{{$result->history}}" name="history">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="commerce">Commerce</label>
											<input type="text" id="commerce" class="form-control border-primary" placeholder="Commerce Marks" value="{{$result->commerce}}" name="commerce">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="general_science">General Science</label>
											<input type="text" id="general_science" class="form-control border-primary" placeholder="General Science Marks" value="{{$result->general_science}}" name="general_science">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="principles_of_accounts">Principle of Accounts</label>
											<input type="text" id="principles_of_accounts" class="form-control border-primary" placeholder="Principle of Accounts Marks" value="{{$result->principles_of_accounts}}" name="principles_of_accounts">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="english_literatue">English Literature</label>
											<input type="text" id="english_literatue" class="form-control border-primary" placeholder="English Literature Marks" value="{{$result->english_literatue}}" name="english_literatue">
										</div>
									</div>
									</div>
									<input type="hidden" id="id" class="form-control border-primary" value="{{$result->id}}">
								</div>
							</div>

	                        <div class="form-actions text-center mb-2">
	                            <a href="/get-results" button  class="btn btn-warning mr-1">
	                            	<i class="ft-x"></i> Back
	                            </button></a>
	                            <button type="submit" class="btn btn-primary">
	                                <i class="la la-check-square-o"></i> Save
	                            </button>
	                        </div>
	                    </form>
                        @endforeach
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
	 <script type="text/javascript">
			function update() {
				var select = document.getElementById('language');
				var option = select.options[select.selectedIndex];

				document.getElementById('value').value = option.value;
				document.getElementById('text').value = option.text;
			}

			update();
		</script>
  </body>
</html>
