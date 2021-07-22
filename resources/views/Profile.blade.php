<x-main-layout>

@push('css')
    <!-- Loading button css -->
        <link href="{{asset('libs/ladda/ladda-themeless.min.css')}}" rel="stylesheet" type="text/css"/>

        <!-- Jquery Toast css -->
        <link href="{{asset('libs/jquery-toast-plugin/jquery.toast.min.css')}}" rel="stylesheet" type="text/css"/>

        @livewireStyles
    @endpush


    <x-slot name="pageTitle">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">HSSE</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>
                    <h4 class="page-title">{{ __('Profile') }}</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
    </x-slot>

    <div class="row">
        <div class="col-lg-8">

            <livewire:update-profile-form :user="$user"/>
            <livewire:update-password-form :user="$user"/>

        </div>
    </div>
    </div>

    @push('scripts')
    <!-- Loading buttons js -->
        <script src="{{asset('libs/ladda/spin.min.js')}}"></script>
        <script src="{{asset('libs/ladda/ladda.min.js')}}"></script>

        <!-- Buttons init js-->
        <script src="{{asset('js/pages/loading-btn.init.js')}}"></script>

        <!-- Tost-->
        <script src="{{asset('libs/jquery-toast-plugin/jquery.toast.min.js')}}"></script>

        <!-- toastr init js-->
        <script src="{{asset('js/pages/toastr.init.js')}}"></script>

        @livewireScripts

        $.toast('Here you can put the text of the toast')
    @endpush
</x-main-layout>
