{{--<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
--}}
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head--> -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>Regster -South Sudan Education Committee</title>
    <link rel="apple-touch-icon" href="{{asset('admin/app-assets/images/ico/sudan.JPG')}}">
    <link rel="shortcut icon" type="image/x-icon" href="https://themeselection.com/demo/chameleon-admin-template/app-assets/images/ico/favicon.ico">
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
                            <img style="width: 60px; height:60px;" src="{{ asset('admin/app-assets/images/ico/sudan.JPG')}}" alt="branding logo">
                    </div>
                    <div class="font-large-1  text-center">                       
                        Member Register
                    </div>
                </div>
                <div class="card-content">
                   
                    <div class="card-body">
                        <form class="form-horizontal" action="{{ route('register') }}"  method="POST" novalidate>
                            @csrf
                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="text" class="form-control round" id="name"  name="name" :value="old('name')" placeholder="Your Name" required autofocus autocomplete="name">
                                <div class="form-control-position">
                                    <i class="ft-user"></i>
                                </div>
                            </fieldset>
                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="email" class="form-control round" id="email" placeholder="Your Email" name="email" :value="old('email')" required>
                                <div class="form-control-position">
                                    <i class="ft-envelope"></i>
                                </div>
                            </fieldset>
                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="password" class="form-control round" id="user-password" placeholder="Your password"  name="password" required autocomplete="new-password">
                                <div class="form-control-position">
                                    <i class="ft-lock"></i>
                                </div>
                            </fieldset>
                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="password" class="form-control round" id="password_confirmation" placeholder="Comfirm Password" name="password_confirmation" required autocomplete="new-password" />
                                <div class="form-control-position">
                                    <i class="ft-lock"></i>
                                </div>
                            </fieldset>
                            <div class="form-group row">
                                <div class="col-md-6 col-12 text-center text-sm-left">
                                   
                                </div>
                            </div>                           
                            <div class="form-group text-center">
                                <button type="submit" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-12 mr-1 mb-1">Register</button>    
                            </div>
                           
                        </form>
                        <p class="card-subtitle text-muted text-center font-small-3 mx-2 my-1"><span>Do you have an account ? <a href="/" class="card-link">Sign In</a></span></p>
                    </div>                   
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
