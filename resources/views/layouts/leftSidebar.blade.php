<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">
            <img src="{{asset('images/users/user-12.jpg')}}" alt="user-img" title="Mat Helme"
                 class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="text-dark font-weight-normal dropdown-toggle h5 mt-2 mb-1 d-block"
                   data-toggle="dropdown">
                    @if(Auth::check())
                        {{explode(" ", Auth::user()->name)[0]}}
                    @else
                        {{ __('Guest') }}
                    @endif
                </a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- items-->
                    <x-top.profile-menu-item itemName="{{ __('My Account')}}" class="fe-user mr-1"/>
                    <x-top.profile-menu-item itemName="{{ __('Settings') }}" class="fe-settings mr-1"/>
                    <x-top.profile-menu-item itemName="{{ __('Lock Screen') }}" class="fe-lock mr-1"/>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{route('logout')}}" class="dropdown-item notify-item"
                           onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            <i class="fe-log-out mr-1"></i>
                            <span>{{ __('Logout') }}</span>
                        </a>
                    </form>

                </div>
            </div>
            <p class="text-muted">{{ __('Admin Head') }}</p>
        </div>


        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul id="side-menu">

                <!-- Start Reporting -->
                <li class="menu-title">{{ __('Reporting') }}</li>

                <x-left.two-level-menu name="{{ __('Hse-Reporting') }}" symbol="file-text" collapseNumber=""
                                  collapseSymbol="menu-arrow">
                    <x-left.end-level-item name="{{ __('Observation') }}" route="observation"/>
                    <x-left.end-level-item name="{{ __('Nearmiss') }}" route="nearmiss"/>
                    <x-left.end-level-item name="{{ __('Accident') }}" route="accident"/>
                    <x-left.end-level-item name="{{ __('PTW') }}" route="#"/>
                    <x-left.end-level-item name="{{ __('MSI') }}" route="#"/>
                    <x-left.end-level-item name="{{ __('Walk through audit') }}" route="#"/>
                </x-left.two-level-menu>

                <x-left.two-level-menu name="{{ __('Contractor-Safety') }}" symbol="alert-triangle"
                                  collapseSymbol="badge badge-blue float-right" collapseNumber="New">
                    <x-left.end-level-item name="{{ __('CSM Pre Qualification') }}" route="#"/>
                    <x-left.end-level-item name="{{ __('CSM Jop Inspection') }}" route="#"/>
                    <x-left.end-level-item name="{{ __('CSM Status Page') }}" route="#"/>
                </x-left.two-level-menu>

                <x-left.two-level-menu name="{{ __('Emergency-Response') }}" symbol="zap-off" collapseNumber=""
                                  collapseSymbol="menu-arrow">
                    <x-left.end-level-item name="{{ __('Drill Evaluation') }}" route="#"/>
                    <x-left.end-level-item name="{{ __('Equipment Inspection') }}" route="#"/>
                </x-left.two-level-menu>

                <x-left.two-level-menu name="{{ __('Meeting') }}" symbol="shield" collapseNumber="1"
                                  collapseSymbol="badge badge-success badge-pill float-right">
                    <x-left.end-level-item name="{{ __('Minutes Of Meetings') }}" route="#"/>
                </x-left.two-level-menu>

                <x-left.two-level-menu name="{{ __('Action-item') }}" symbol="play" collapseSymbol="menu-arrow"
                                  collapseNumber="">
                    <x-left.end-level-item name="{{ __('Action') }}" route="#"/>
                </x-left.two-level-menu>
                <!-- End Reporting -->


                <!-- Start Follow up -->
                <li class="menu-title mt-2">{{ __('Follow up') }}</li>

                <x-left.two-level-menu name="{{ __('General-Safety') }}" symbol="pocket" collapseSymbol="menu-arrow"
                                       collapseNumber="">
                    <x-left.end-level-item name="{{ __('Staff injuries') }}" route="#"/>
                    <x-left.end-level-item name="{{ __('Chemical Accidents') }}" route="#"/>
                    <x-left.end-level-item name="{{ __('Fires') }}" route="#"/>
                    <x-left.end-level-item name="{{ __('Facilities Damage') }}" route="#"/>
                </x-left.two-level-menu>

                <x-left.multi-level-menu name="{{ __('All-Reports') }}" symbol="share-2" collapseSymbol="menu-arrow">

                    <x-left.two-level-menu name="{{ __('Raised') }}" symbol="chevron-right"
                                           collapseSymbol="menu-arrow"
                                           collapseNumber="">
                        <x-left.end-level-item name="{{ __('Today') }}" route="#"/>
                        <x-left.end-level-item name="{{ __('This Weak') }}" route="#"/>
                        <x-left.end-level-item name="{{ __('This Month') }}" route="#"/>
                    </x-left.two-level-menu>

                    <x-left.two-level-menu name="{{ __('Processing') }}" symbol="chevron-right"
                                           collapseSymbol="menu-arrow"
                                           collapseNumber="">
                        <x-left.end-level-item name="{{ __('Today') }}" route="#"/>
                        <x-left.end-level-item name="{{ __('This Weak') }}" route="#"/>
                        <x-left.end-level-item name="{{ __('This Month') }}" route="#"/>
                    </x-left.two-level-menu>

                    <x-left.two-level-menu name="{{ __('Closed') }}" symbol="chevron-right"
                                           collapseSymbol="menu-arrow"
                                           collapseNumber="">
                        <x-left.end-level-item name="{{ __('Today') }}" route="#"/>
                        <x-left.end-level-item name="{{ __('This Weak') }}" route="#"/>
                        <x-left.end-level-item name="{{ __('This Month') }}" route="#"/>
                    </x-left.two-level-menu>

                </x-left.multi-level-menu>

                <x-left.two-level-menu name="{{ __('Overdue') }}" symbol="layers"
                                       collapseSymbol="menu-arrow"
                                       collapseNumber="">
                    <x-left.end-level-item name="{{ __('Today') }}" route="#"/>
                    <x-left.end-level-item name="{{ __('This Weak') }}" route="#"/>
                    <x-left.end-level-item name="{{ __('This Month') }}" route="#"/>
                </x-left.two-level-menu>

                <x-left.single-level-item name="{{ __('Un Assigned') }}" route="#" symbol="package"/>
                <!-- End Follow up -->



                <!-- Start Permit To Work -->
                <li class="menu-title mt-2">{{ __('Permit To Work') }}</li>

                <x-left.two-level-menu name="{{ __('Assign-Task') }}" symbol="file-text" collapseNumber=""
                                       collapseSymbol="menu-arrow">
                    <x-left.end-level-item name="{{ __('Assign New') }}" route="#"/>
                    <x-left.end-level-item name="{{ __('Re-Assign Task') }}" route="#"/>
                </x-left.two-level-menu>

                <x-left.two-level-menu name="{{ __('Give-privilege') }}" symbol="package" collapseSymbol="menu-arrow"
                                       collapseNumber="">
                    <x-left.end-level-item name="{{ __('Set New Privilege') }}" route="#"/>
                    <x-left.end-level-item name="{{ __('Edit Existing Privilege') }}" route="#"/>
                    <x-left.end-level-item name="{{ __('Remove Given Privilege') }}" route="#"/>
                </x-left.two-level-menu>

                <x-left.two-level-menu name="{{ __('Manage-Team') }}" symbol="layout" collapseSymbol="menu-arrow"
                                       collapseNumber="">
                    <x-left.end-level-item name="{{ __('Add New Role') }}" route="#"/>
                    <x-left.end-level-item name="{{ __('Assign New Role') }}" route="#"/>
                    <x-left.end-level-item name="{{ __('Edit Existing Role') }}" route="#"/>
                </x-left.two-level-menu>
                <!-- End Permit To Work -->



                <!-- Start KPI's Dashboard -->
                <li class="menu-title mt-2">{{ __("KPI's Dashboard") }}</li>

                <x-left.two-level-menu name="{{ __('Morris-Chart') }}" symbol="map" collapseNumber=""
                                  collapseSymbol="menu-arrow">
                    <x-left.end-level-item name="{{ __('Paity Chart') }}" route="#"/>
                    <x-left.end-level-item name="{{ __('C3 Chart') }}" route="#"/>
                    <x-left.end-level-item name="{{ __('Sparklines Chart') }}" route="#"/>
                </x-left.two-level-menu>

                <x-left.single-level-item name="{{ __('Apex Chart') }}" symbol="map" route="apps-calendar.html"/>
                <x-left.single-level-item name="{{ __('Float Chart') }}" symbol="map" route="apps-chat.html"/>
                <!-- End KPI's Dashboard -->



            </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
