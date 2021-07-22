<div>

    @if($passwordSuccess)
        <div class="alert alert-success alert-dismissible fade show"
             style="position: fixed; top: 80px; right: 10px; z-index: 1; margin-top:8%;"
             role="alert">
            <i class="mdi mdi-check-all mr-2"></i> {{$passwordSuccess}}
            <button wire:click="$set('passwordSuccess',null)" type="button" class="close" data-dismiss="alert"
                    aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
@endif


        @if($passwordFailed)
            <div class="alert alert-danger alert-dismissible fade show"
                 style="position: fixed; top: 80px; right: 10px; z-index: 1;  margin-top:4%;"
                 role="alert">
                <i class="mdi mdi-alert-circle-outline mr-2"></i> {{$passwordFailed}}
                <button wire:click="$set('passwordFailed',null)" type="button" class="close" data-dismiss="alert"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
    @endif


    <!-- Password Reset -->
    <div class="card-box ribbon-box">

        <!-- Card Title -->
        <div class="ribbon ribbon-blue float-left"><i class="mdi mdi-access-point mr-1"></i>
            {{ __('Password Reset') }}
        </div>

        <!-- Password Reset Form-->
        <div class="ribbon-content">

            <!-- Personal Info Form -->
            <form wire:submit.prevent="saveUpdate" method="POST" action="">
            @csrf
            @method('PUT')

            <!-- Current Password -->
                <div class="form-group mt-3 col-md-12 mt-5">
                    <label><strong>{{ __('Current Password') }}</strong></label>
                    <input wire:model.lazy="current_password" style="@error('name') border:1px solid red; @enderror" name="current_password" type="password" class="form-control">
                    @error('current_password') <span class="error text-danger">{{ $message }}</span> @enderror
                </div>

                <!-- New Password -->
                <div class="form-group mt-3 col-md-12 ">
                    <label><strong>{{ __('New Password') }}</strong></label>
                    <input wire:model.lazy="password" style="@error('name') border:1px solid red; @enderror" name="password" type="password" class="form-control">
                    @error('password') <span class="error text-danger">{{ $message }}</span> @enderror
                </div>

                <!-- Confirm New Password -->
                <div class="form-group mt-3 col-md-12 ">
                    <label><strong>{{ __('Confirm Password') }}</strong></label>
                    <input wire:model.lazy="password_confirmation" style="@error('name') border:1px solid red; @enderror" name="password_confirmation" type="password" class="form-control">
                    @error('password_confirmation') <span class="error text-danger">{{ $message }}</span> @enderror
                </div>

                <!-- Update Button -->
                <div class="mt-4 col-sm-6 col-xl-12 text-right">
                    <div class="">
                        <span class="text-success mr-1">{{ session('password_success') }}</span>
                        <span class="text-danger mr-1">{{ session('password_failed') }}</span>
                        <button type="submit" class="ladda-button btn btn-blue js--triggerAnimation" dir="ltr"
                                data-style="zoom-in">{{ __('Update Password') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Password Reset -->
</div>
