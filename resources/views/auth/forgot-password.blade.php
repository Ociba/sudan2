{{--<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
--}}

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
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
            <div class="card border-grey border-lighten-3 px-2 py-2 m-0">               
                <div class="card-header border-0">
                    <div class="text-center mb-1">
                        <img style="width: 60px; height:60px;" src="{{ asset('admin/app-assets/images/ico/logo.png')}}" alt="branding logo">
                    </div>
                    <div class="font-large-1  text-center">
                        Recover Password
                    </div>
                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                        <span>We will send you a link to reset password.</span>
                    </h6>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form-horizontal" action="{{ route('password.email') }}" method="POST" novalidate>
                            @csrf
                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="email" class="form-control round" id="email" placeholder="Your Email Address" name="email" :value="old('email')" required autofocus>
                                <div class="form-control-position">
                                    <i class="ft-mail"></i>
                                </div>
                            </fieldset>                            
                            <div class="form-group text-center">
                                    <button type="submit" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-12 mr-1 mb-1">Submit</button>
                                </div>
                        </form>
                    </div>
                </div>
                <div class="card-footer border-0 p-0">
                    <p class="float-sm-center text-center">Republic of Souh Sudan
                    </p>
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
    <script src="{{ asset('admin/app-assets/js/scripts/forms/form-login-register.min.js" type="text/javascript"></script>
    <!-- END: Page JS-->

  </body>
  <!-- END: Body-->
</html>