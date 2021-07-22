<div>

    <!-- Success Toast -->
    @if($informationSuccess)
        <div class="alert alert-success alert-dismissible fade show"
             style="position: fixed; top: 80px; right: 10px; z-index: 1;  "
             role="alert">
            <i class="mdi mdi-check-all mr-2"></i> {{$informationSuccess}}
            <button wire:click="$set('informationSuccess',null)" type="button" class="close" data-dismiss="alert"
                    aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


<!-- Personal Information -->
    <div class="card-box ribbon-box">

        <!-- Card Title -->
        <div class="ribbon ribbon-blue float-left"><i class="mdi mdi-access-point mr-1"></i>
            {{ __('Personal Details') }}
        </div>

        <div class="ribbon-content">

            <!-- profile image -->
            <div class="col-md-4 mt-5">
                <img src="{{asset('images/users/user-12.jpg')}}" alt="image"
                     class="img-fluid avatar-xl rounded-circle"/>
            </div>


            <!-- Personal Info Form -->
            <form wire:submit.prevent="saveUpdate" method="POST" action="">
            @csrf
            @method('PUT')

            <!-- profile Name -->
                <div class="form-group mt-3 col-md-12">
                    <label><strong>{{ __('Name') }}</strong></label>
                    <input wire:model.lazy="name" name="name" type="text"
                           style="@error('name') border:1px solid red; @enderror" class=" form-control"
                           value="{{$user->name}}">
                    @error('name') <span class="error text-danger">{{ $message }}</span> @enderror

                </div>

                <!-- profile Email -->
                <div class="form-group col-md-12 mt-3">
                    <label><strong>{{ __('Email') }}</strong></label>
                    <input wire:model.lazy="email" name="email" type="email"
                           style="@error('email') border:1px solid red; @enderror" class="form-control"
                           value="{{$user->email}}">
                    @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
                </div>

                <!-- profile Phone -->
                <div class="form-group col-md-12 mt-3">
                    <label><strong>{{ __('Phone') }}</strong></label>
                    <input wire:model.lazy="phone" name="phone" type="text"
                           style="@error('phone') border:1px solid red; @enderror" class="form-control"
                           value="{{$user->phone}}">
                    @error('phone') <span class="error text-danger">{{ $message }}</span> @enderror
                </div>


                <!-- Save Button -->
                <div class="mt-4 col-sm-6 col-xl-12 text-right">
                    <div class="">
                        <span class="text-success mr-1">{{ session('personal_success') }}</span>
                        <button type="submit" class="ladda-button btn btn-blue " dir="ltr"
                                data-style="zoom-in">{{ __('Save') }}
                            info
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Personal Information -->


</div>
