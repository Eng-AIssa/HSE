<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>{{ __('Log In') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description"/>
        <meta content="Coderthemes" name="author"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{url('images/favicon.ico')}}">

        <!-- App css -->
        <link href="{{asset('css/bootstrap-modern.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet"/>
        <link href="{{asset('css/app-modern.min.css')}}" rel="stylesheet" type="text/css" id="app-default-stylesheet"/>

        <link href="{{asset('css/bootstrap-modern-dark.min.css')}}" rel="stylesheet" type="text/css"
              id="bs-dark-stylesheet"/>
        <link href="{{asset('css/app-modern-dark.min.css')}}" rel="stylesheet" type="text/css" id="app-dark-stylesheet"/>
        @stack('css')

        <!-- icons -->
        <link href="{{asset('css/icons.min.css')}}" rel="stylesheet" type="text/css"/>
        @stack('icons')

    </head>

    <body class="loading auth-fluid-pages pb-0">

        <div class="auth-fluid">

            <!--Auth fluid left content -->
            <div class="auth-fluid-form-box">
                <div class="align-items-center d-flex h-100">
                    <div class="card-body">


                        <!-- Logo -->
                        <div class="auth-brand text-center text-lg-left">
                            <div class="auth-logo">
                                <a href="\home" class="logo logo-dark text-center">
                                    <span class="logo-lg">
                                        <img src="{{asset('images/logo-dark.png')}}" alt="" height="22">
                                    </span>
                                </a>

                                <a href="\home" class="logo logo-light text-center">
                                    <span class="logo-lg">
                                        <img src="{{asset('images/logo-light.png')}}" alt="" height="22">
                                    </span>
                                </a>
                            </div>
                        </div>
                        <!-- End Logo -->


                        <!-- Auth Content -->
                        {{$slot}}


                    </div>
                </div>
            </div>
            <!-- end auth-fluid-form-box-->


            <!-- Auth fluid right content -->
            <div class="auth-fluid-right text-center">
                <div class="auth-user-testimonial">
                    <h2 class="mb-3 text-white">{{ __('I love the color!') }}</h2>
                    <p class="lead"><i class="mdi mdi-format-quote-open"></i> {{ __("I've been using your theme from the
                        previous
                        developer for our web app, once I knew new version is out, I immediately bought with no
                        hesitation.
                        Great themes, good documentation with lots of customization available and sample app that really
                        fit our
                        need.") }} <i class="mdi mdi-format-quote-close"></i>
                    </p>
                    <h5 class="text-white">
                        {{ __('- Fadlisaad') }}
                    </h5>
                </div>
            </div>
            <!-- end Auth fluid right content -->

        </div>
        <!-- end auth-fluid-->

        <!-- Vendor js -->
        <script src="{{asset('js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('js/app.min.js')}}"></script>

        @stack('scripts')
    </body>
</html>

