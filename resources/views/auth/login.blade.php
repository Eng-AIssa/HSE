<x-auth-layout>

    <!-- title-->
    <h4 class="mt-0">{{ __('Sign In') }}</h4>
    <p class="text-muted mb-4">{{ __('Enter your email address and password to access account') }}.</p>
    <!-- End title-->


    <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors"/>


    <!-- form -->
    <form id="loginForm" method="POST" action="/login">
    @csrf

    <!-- Email Address -->
        <div class="form-group">
            <label for="email">{{ __('Email address') }}</label>
            <input class="form-control" type="email" id="email" name="email" required="" placeholder="{{ __('Enter your email') }}"
                   value="{{old('email')}}">
        </div>
        <!-- End  Email Address -->

        <!-- Password -->
        <div class="form-group">
            <a href="{{route('password.request')}}" class="text-muted float-right"><small>{{ __('Forgot your
                password?') }}</small></a>
            <label for="password">{{ __('Password') }}</label>
            <div class="input-group input-group-merge">
                <input type="password" id="password" name="password" class="form-control"
                       placeholder="{{ __('Enter your password') }}">
                <div class="input-group-append" data-password="false">
                    <div class="input-group-text">
                        <span class="password-eye font-12"></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Password -->

        <!-- Remember Me -->
        <div class="form-group mb-3">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                <label class="custom-control-label" for="checkbox-signin">{{ __('Remember me') }}</label>
            </div>
        </div>
        <!-- End Remember Me -->

        <!-- Submit Button -->
        <div class="form-group mb-0 text-center">
            <button form="loginForm" class="btn btn-primary btn-block" type="submit">{{ __('Log In') }}</button>
        </div>
        <!-- End Submit Button -->

    </form>
    <!-- End form-->

    <!-- Footer-->
    <footer class="footer footer-alt">
        <p class="text-muted">{{ __("Don't have an account?") }} <a href="{{route('register')}}" class="text-muted ml-1"><b>{{ __('Sign
            Up') }}</b></a></p>
    </footer>


</x-auth-layout>
