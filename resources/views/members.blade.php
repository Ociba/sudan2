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
        @include('layouts.messages')
            <div class="card">
                <div class="card-header">
                    <h4 class="card-titl">{{ request()->route()->getName() }}
                       <button class="btn btn-primary pull-right text-white" data-toggle="modal" data-target="#exampleModal">Add User</button>
                    </h4>
                    
                </div>
                <div class="card-content collapse show">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Year</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($get_users as $i =>$user)
                                    <tr>
                                        <td>{{ $i + 1}}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ date('Y', strtotime($user->created_at)) }}</td>
                                        <td>
                                        @if($user->status == 'active')
                                            <a href="/suspend-user/{{ $user->id }}" button class="btn btn-sm btn-warning">Suspend</button></a>
                                        @else
                                            <a href="/activate-user/{{ $user->id }}" button class="btn btn-sm btn-success">Activate</button></a>
                                        @endif
                                        <a href="/delete-user/{{ $user->id }}" button class="btn btn-sm btn-danger">Delete</button></a>
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
     <script src="{{ asset('admin/app-assets/js/scripts/tables/datatables/datatable-basic.min.js')}}" type="text/javascript"></script>
<form action="/register-user" method="get" class="col-lg-12">
    @csrf
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body col-12">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content collpase show">
	                <div class="card-body">
						<div class="card-text">
						</div>
	                    <form class="form form-horizontal">
	                    	<div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstName2">Name :</label>
                                            <input type="text" class="form-control round" id="name"  name="name" :value="old('name')" placeholder="Your Name" required autofocus autocomplete="name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastName2">Email :</label>
                                            <input type="email" class="form-control round" id="email" placeholder="Your Email" name="email" :value="old('email')" required>
                                        </div>
                                    </div>
                                </div>
		                        <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstName2">Password:</label>
                                            <input type="password" class="form-control round" id="user-password" placeholder="Your password"  name="password" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastName2">Confirm Password :</label>
                                            <input type="password" class="form-control round" id="password_confirmation" placeholder="Comfirm Password" name="password_confirmation" required autocomplete="new-password" />
                                        </div>
                                    </div>
                                </div>	   
							</div>

	                        <div class="form-actions center">
	                            <button type="submit" class="btn btn-primary round">
	                                <i class="la la-check-square-o"></i> Register
	                            </button>
	                        </div>
	                    </form>

	                </div>
	            </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</div>
</div>
</form>
  </body>
</html>
