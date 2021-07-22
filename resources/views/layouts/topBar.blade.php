<!-- Topbar Start -->
<div class="navbar-custom">
    <div class="container-fluid">


        <!-- Start All Dropdowns On The Right Of The TopBar -->
        <ul class="list-unstyled topnav-menu float-right mb-0">

            <!-- Start Search Box and its Result -->
            <li class="d-none d-lg-block">
                <form class="app-search">
                    <div class="app-search-box dropdown">
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Search..." id="top-search">
                            <div class="input-group-append">
                                <button class="btn" type="submit">
                                    <i class="fe-search"></i>
                                </button>
                            </div>
                        </div>

                        <div class="dropdown-menu dropdown-lg" id="search-dropdown">

                            <!-- Number Of Search Results Found -->
                            <div class="dropdown-header noti-title">
                                <h5 class="text-overflow mb-2">{{ __('Found 22 results') }}</h5>
                            </div>


                            <!-- Start Results By Category -->
                            <x-top.search-item icon="fe-home mr-1" name="{{ __('Analytics Report') }}"/>
                            <x-top.search-item icon="fe-aperture mr-1" name="{{ __('How can I help you?') }}"/>
                            <x-top.search-item icon="fe-settings mr-1" name="{{ __('User profile settings') }}"/>
                            <!-- End Results By Category -->


                            <!-- Users Result-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow mb-2 text-uppercase">{{ __('Users') }}</h6>
                            </div>

                            <div class="notification-list">
                                <x-top.search-user userImage="{{asset('images/users/user-2.jpg')}}"
                                               ImageAlt="Generic placeholder image"
                                               name="{{ __('Erwin E. Brown') }}" job="{{ __('UI Designer') }}"/>
                                <x-top.search-user userImage="{{asset('images/users/user-5.jpg')}}"
                                               ImageAlt="Generic placeholder image"
                                               name="{{ __('Jacob Deo') }}" job="{{ __('Developer') }}"/>
                            </div>
                            <!-- End Users Result-->

                        </div>
                    </div>
                </form>
            </li>
            <!-- End Search Box and its Result -->


            <li class="dropdown d-inline-block d-lg-none">
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown" href="#"
                   role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fe-search noti-icon"></i>
                </a>

                <div class="dropdown-menu dropdown-lg dropdown-menu-right p-0">

                </div>
            </li>


            <!-- Start Full Page Icon -->
            <li class="dropdown d-none d-lg-inline-block">
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen"
                   href="#">
                    <i class="fe-maximize noti-icon"></i>
                </a>
            </li>
            <!-- End Full Page Icon -->


            <!-- Start Widgets Dropdown -->
            <li class="dropdown d-none d-lg-inline-block topbar-dropdown">

                <!-- Start Toggle Button -->
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown" href="#"
                   role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fe-grid noti-icon"></i>
                </a>
                <!-- End Toggle Button -->


                <!-- Start of Widgets div -->
                <div class="dropdown-menu dropdown-lg dropdown-menu-right">
                    <div class="p-lg-1">

                        <!-- Row Of Widgets -->
                        <x-top.dropdown-widget-row>
                            <x-top.dropdown-widget-item name="{{ __('Slack') }}"
                                                    widgetImage="{{asset('images/brands/slack.png')}}"/>
                            <x-top.dropdown-widget-item name="{{ __('GitHub') }}"
                                                    widgetImage="{{asset('images/brands/github.png')}}"/>
                            <x-top.dropdown-widget-item name="{{ __('Dribbble') }}"
                                                    widgetImage="{{asset('images/brands/dribbble.png')}}"/>
                        </x-top.dropdown-widget-row>

                        <!-- Row Of Widgets -->
                        <x-top.dropdown-widget-row>
                            <x-top.dropdown-widget-item name="{{ __('Bitbucket') }}"
                                                    widgetImage="{{asset('images/brands/bitbucket.png')}}"/>
                            <x-top.dropdown-widget-item name="{{ __('Dropbox') }}"
                                                    widgetImage="{{asset('images/brands/dropbox.png')}}"/>
                            <x-top.dropdown-widget-item name="{{ __('G Suite') }}"
                                                    widgetImage="{{asset('images/brands/g-suite.png')}}"/>
                        </x-top.dropdown-widget-row>

                    </div>
                </div>
                <!-- End of Widgets div -->

            </li>
            <!-- End Widgets Dropdown -->


            <!-- Start Languages Dropdown -->
            <li class="dropdown d-none d-lg-inline-block topbar-dropdown">

                <!-- Start Toggle Button -->
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown" href="#"
                   role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{asset('images/flags/us.jpg')}}" alt="user-image" height="16">
                </a>
                <!-- End Toggle Button -->


                <!-- Start Languages Div -->
                <div class="dropdown-menu dropdown-menu-right">

                    <!-- Language item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="{{asset('images/flags/arabic.jpg')}}" alt="user-image" class="mr-1" height="12"> <span
                            class="align-middle">{{ __('Arabic') }}</span>
                    </a>

                </div>
                <!-- End Languages Div -->

            </li>
            <!-- End Languages Dropdown -->


            <!-- Start Notification Dropdown -->
            <li class="dropdown notification-list topbar-dropdown">

                <!-- Start Toggle Button -->
                <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"
                   role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fe-bell noti-icon"></i>
                    <span class="badge badge-danger rounded-circle noti-icon-badge">0</span>
                </a>
                <!-- End Toggle Button -->


                <!-- Start Notification Div -->
                <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                    <!-- Notification Heading -->
                    <div class="dropdown-item noti-title">
                        <h5 class="m-0">
                            <span class="float-right">
                                <a href="" class="text-dark">
                                    <small>Clear All</small>
                                </a>
                            </span>{{ __('Notification') }}
                        </h5>
                    </div>
                    <!-- End Notification Heading -->


                    <!-- No New Notification -->
                    <div class="dropdown-item noti-title">
                        <h6 class="m-0">
                            <span class="float-right">
                                <a href="" class="text-dark">
                                </a>
                            </span>{{ __("You don't have any new notification") }}
                        </h6>
                    </div>
                    <!-- End No New Notification -->

                </div>
                <!-- End Notification Div -->

            </li>
            <!-- End Notification Dropdown -->


            <!-- Start Account Dropdown -->
            <li class="dropdown notification-list topbar-dropdown">

                <!-- Start Toggle Button -->
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown"
                   href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{asset('images/users/user-12.jpg')}}" alt="user-image" class="rounded-circle">
                    <span class="pro-user-name ml-1">
                        @if(Auth::check())
                            {{explode(" ", Auth::user()->name)[0]}}
                        @else
                            Guest
                        @endif
                        <i class="mdi mdi-chevron-down"></i>
                    </span>
                </a>
                <!-- End Toggle Button -->


                <!-- Start Account Div -->
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                    <x-top.profile-menu-item itemName="{{ __('My Account') }}" class="fe-user"/>
                    <x-top.profile-menu-item itemName="{{ __('Settings') }}" class="fe-settings"/>
                    <x-top.profile-menu-item itemName="{{ __('Lock Screen') }}" class="fe-lock"/>

                    <!-- Start Logout Form -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{route('logout')}}" class="dropdown-item notify-item"
                           onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            <i class="fe-log-out"></i>
                            <span>{{ __('Logout') }}</span>
                        </a>
                    </form>
                    <!-- End Logout Form -->

                </div>
                <!-- End Account Div -->

            </li>
            <!-- End Account Dropdown -->


            <!-- Start Right Sidebar Toggle Button -->
            <li class="dropdown notification-list">
                <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                    <i class="fe-settings noti-icon"></i>
                </a>
            </li>
            <!-- End Right Sidebar Toggle Button -->

        </ul>
        <!-- End All Dropdowns On The Right Of The TopBar -->


        <!-- Start LOGO -->
        <div class="logo-box">

            <!-- Dark logo -->
            <a href="\home" class="logo logo-dark text-center">
                <span class="logo-sm">
                    <img src="{{asset('images/logo-sm.png')}}" alt="" height="22">
                    <!-- <span class="logo-lg-text-light">UBold</span> -->
                </span>
                <span class="logo-lg">
                    <img src="{{asset('images/logo-dark.png')}}" alt="" height="20">
                    <!-- <span class="logo-lg-text-light">U</span> -->
                </span>
            </a>

            <!-- Light logo -->
            <a href="\home" class="logo logo-light text-center">
                <span class="logo-sm">
                    <img src="{{asset('images/logo-sm.png')}}" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="{{asset('images/logo-light.png')}}" alt="" height="20">
                </span>
            </a>

        </div>
        <!-- End LOGO -->


        <!-- Start All Dropdowns On The Left Of The TopBar -->
        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">

            <!-- Left Sidebar Toggle Button -->
            <li>
                <button class="button-menu-mobile waves-effect waves-light">
                    <i class="fe-menu"></i>
                </button>
            </li>
            <!-- End Left Sidebar Toggle Button -->


            <!-- Start Create Dropdown -->
            <li class="dropdown d-none d-xl-block">

                <!-- Start Toggle Button -->
                <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"
                   role="button" aria-haspopup="false" aria-expanded="false">
                    {{ __('Create New') }}
                    <i class="mdi mdi-chevron-down"></i>
                </a>
                <!-- End Toggle Button -->


                <!-- Start Create Div -->
                <div class="dropdown-menu">
                    <x-top.create-menu-item createName="{{ __('New Observation') }}" class="fe-briefcase mr-1"
                                        href="\observation"/>
                    <x-top.create-menu-item createName="{{ __('New Nearmiss') }}" class="fe-user mr-1" href="\nearmiss"/>
                    <x-top.create-menu-item createName="{{ __('New Accident') }}" class="fe-bar-chart-line- mr-1"
                                        href="accident"/>
                    <x-top.create-menu-item createName="{{ __('New Action') }}" class="fe-settings mr-1" href="\nearmiss"/>
                </div>
                <!-- End Create Div -->

            </li>
            <!-- End Create Dropdown -->


            <!-- Start Mega dropdown -->
            <li class="dropdown dropdown-mega d-none d-xl-block">

                <!-- Start Toggle Button -->
                <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"
                   role="button" aria-haspopup="false" aria-expanded="false">
                    {{ __('HSSE') }}
                    <i class="mdi mdi-chevron-down"></i>
                </a>
                <!-- End Toggle Button -->


                <!-- Start Mega Div Items -->
                <div class="dropdown-menu dropdown-megamenu">
                    <div class="row">

                        <!-- Start Left Part of Mega Items -->
                        <div class="col-sm-8">
                            <div class="row">

                                <!-- Start Column Of Item -->
                                <x-top.mega-menu-category categoryName="{{ __('Hsse Reporting') }}">
                                    <x-top.mega-menu-item itemName="{{ __('Observation') }} "/>
                                    <x-top.mega-menu-item itemName="{{  __('Nearmiss') }}"/>
                                    <x-top.mega-menu-item itemName="{{  __('Accident') }}"/>
                                    <x-top.mega-menu-item itemName="{{  __('PTW') }}"/>
                                    <x-top.mega-menu-item itemName="{{  __('Walk through audit') }}"/>
                                    <x-top.mega-menu-item itemName="{{  __('MSI Inspection') }}"/>
                                </x-top.mega-menu-category>
                                <!-- End Column Of Item -->

                                <!-- Start Column Of Item -->
                                <x-top.mega-menu-category categoryName="{{ __('Contractor Safety Forms') }}">
                                    <x-top.mega-menu-item itemName="{{ __('CSM Pre Qualification Form') }}"/>
                                    <x-top.mega-menu-item itemName="{{ __('CSM Jop Inspection') }}"/>
                                    <x-top.mega-menu-item itemName="{{ __('CSM Status Page') }}"/>
                                    <x-top.mega-menu-item itemName="{{ __('CSM Timeline Inspection') }}"/>
                                    <x-top.mega-menu-item itemName="{{ __('CSM Procedures') }}"/>
                                    <x-top.mega-menu-item itemName="{{ __('Task Board') }}"/>
                                </x-top.mega-menu-category>
                                <!-- End Column Of Item -->

                                <!-- Start Column Of Item -->
                                <x-top.mega-menu-category categoryName="{{ __('Emergency Response Form') }}">
                                    <x-top.mega-menu-item itemName="{{ __('Drill Evaluation Form') }}"/>
                                    <x-top.mega-menu-item itemName="{{ __('Equipment Inspection Form') }}"/>
                                    <x-top.mega-menu-item itemName="{{ __('Environment Evaluation Form') }}"/>
                                    <x-top.mega-menu-item itemName="{{ __('Evacuation Speed Form') }}"/>
                                    <x-top.mega-menu-item itemName="{{ __('First Response Time') }}"/>
                                    <x-top.mega-menu-item itemName="{{ __('Gallery Pages') }}"/>
                                </x-top.mega-menu-category>
                                <!-- End Column Of Item -->

                            </div>
                        </div>
                        <!-- End Left Part of Mega Items -->


                        <!-- Start Right Part(Trigger Emergency Notifications) Of Mega Items -->
                        <div class="col-sm-4">
                            <div class="text-center mt-3">
                                <h3 class="text-dark">{{ __('Urgent gathering alerts to emergency areas!') }}</h3>
                                <h4>{{ __('Emails, Sms, Popup notification ') }}</h4>
                                <h5>{{ __('All With One Click ') }}</h5>
                                <button class="btn btn-danger btn-rounded mt-3">{{ __('Send Alerts') }}</button>
                            </div>
                        </div>
                        <!-- End Right Part(Trigger Emergency Notifications) Of Mega Items -->

                    </div>
                </div>
                <!-- End Mega Div Items -->

            </li>
            <!-- End Mega dropdown -->

        </ul>
        <!-- End All Dropdowns On The Left Of The TopBar -->


        <div class="clearfix"></div>
    </div>
</div>
<!-- end Topbar -->
