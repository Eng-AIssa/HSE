<x-auth-layout>

    <!-- title-->
    <h4 class="mt-0">{{ __('Reset Password') }}</h4>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors"/>

    <!-- form -->
    <form id="resetForm" method="POST" action="{{ route('password.update') }}">
    @csrf

    <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div class="form-group">
            <label for="email">{{ __('Email address') }}</label>
            <input class="form-control" type="email" id="email" name="email" value="{{old('email', $request->email)}}"
                   required placeholder="{{ __('Enter your email') }}">
        </div>

        <!-- Password -->
        <div class="form-group">
            <label for="password">{{ __('New Password') }}</label>
            <div class="input-group input-group-merge">
                <input type="password" id="password" name="password" class="form-control"
                       placeholder="{{ __('Enter your new password') }}">
                <div class="input-group-append" data-password="false">
                    <div class="input-group-text">
                        <span class="password-eye font-12"></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Confirm Password -->
        <div class="form-group">
            <label for="password_confirmation">{{ __('New Password Confirmation') }}</label>
            <div class="input-group input-group-merge">
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"
                       placeholder="{{ __('Confirm your new password') }}">
                <div class="input-group-append" data-password="false">
                    <div class="input-group-text">
                        <span class="password-eye font-12"></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group mb-0 text-center">
            <button form="resetForm" class="btn btn-primary waves-effect waves-light btn-block"
                    type="submit"> {{ __('Reset Password') }} </button>
        </div>

    </form>
    <!-- end form-->

    <!-- Footer-->
    <footer class="footer footer-alt">
        <p class="text-muted">{{ __('Do not share this link with anyone!') }} </p>
    </footer>

</x-auth-layout>
