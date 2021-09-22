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
    <title>Login - South Sudan National Examinations Council</title>
    <link rel="apple-touch-icon" href="{{ asset('admin/app-assets/images/ico/logo.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/app-assets/images/ico/logo.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">

   @include('layouts.css')
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu 1-column  bg-full-screen-image blank-page blank-page" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="col-lg-4 col-md-6 col-10 box-shadow-2 p-0">
            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                <div class="card-header border-0">
                    <div class="text-center mb-1">
                            <img style="width: 60px; height:60px;" src="{{ asset('admin/app-assets/images/ico/logo.png')}}" alt="branding logo">
                    </div>
                    <div class="font-smaller-1  text-center">                       
                    SOUTH SUDAN NATIONAL EXAMINATIONS COUNCIL
                    </div>
                </div>
                <div class="card-content">
                   
                    <div class="card-body">
                          <form class="form-horizontal" action="{{ route('login') }}"  method="POST" novalidate>
                            @csrf
                            <fieldset class="form-group position-relative has-icon-left">
                                <label>Your Email</label>
                                <input type="email" class="form-control round" id="emai" placeholder="Your Username" name="email" :value="old('email')" required autofocus>
                                
                            </fieldset>
                            <fieldset class="form-group position-relative has-icon-left">
                            <label>Your Password</label>
                                <input type="password" class="form-control round" id="password" placeholder="Enter Password" name="password" required autocomplete="current-password" >
                               
                            </fieldset>
                            <div class="form-group row">
                                <div class="col-md-12 col-12 ">
                                <div class="col-md-6 col-6 float-sm-left text-center text-primary text-sm-left"><input type="checkbox" id="remember_me" name="remember"> Remember Me</span></div>
                                @if (Route::has('password.request'))
                                <div class="col-md-6 col-6 float-sm-right text-center text-sm-right"><a href="{{ route('password.request') }}" class="card-link">Forgot Password?</a></div>
                                @endif
                                </div>
                            </div>                           
                            <div class="form-group text-center">
                                <button type="submit" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-12 mr-1 mb-1">Login</button>    
                            </div>
                           
                        </form>
                    </div>
                    
                    <p class="card-subtitle text-muted text-center font-small-3 mx-2 my-1"><span>Republic of South Sudan</span></p>                    
                </div>
            </div>
        </div>
    </div>
</section>

        </div>
      </div>
    </div>
    <!-- END: Content-->
   <!-- BEGIN: Vendor JS-->
  <script src="{{ asset('admin/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/app-assets/vendors/js/forms/toggle/switchery.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/app-assets/js/scripts/forms/switch.min.js')}}" type="text/javascript"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('admin/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}" type="text/javascript"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('admin/app-assets/js/core/app-menu.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/app-assets/js/core/app.min.js')}}" type="text/javascript"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('admin/app-assets/js/scripts/forms/form-login-register.min.js')}}" type="text/javascript"></script>
    <!-- END: Page JS-->
  </body>
  <!-- END: Body-->