<x-main-layout>

    <x-slot name="pageTitle">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">HSSE</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                            <li class="breadcrumb-item active">Home</li>
                        </ol>
                    </div>
                    <h4 class="page-title">{{ __('Home') }}</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
    </x-slot>

    <div class="d-flex justify-content-center align-items-center" style=" height: 650px;">
        @auth
            <h1 class="text-center">{{ __('Welcome Home') }} {{Auth::user()->name}}!</h1>
        @endauth
        @guest
            <h1>{{ __('Welcome Home Guest!') }}</h1>
        @endguest
    </div>


</x-main-layout>
