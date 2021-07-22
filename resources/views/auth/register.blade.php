<x-auth-layout>

    <!-- title-->
    <h4 class="mt-0">{{ __('Sign Up') }}</h4>
    <p class="text-muted mb-4">{{ __("Don't have an account? Create your account, it takes less than a minute") }}</p>


    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors"/>

    <!-- form -->
    <form id="registerForm" method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
        <div class="form-group">
            <label for="name">{{ __('Full Name') }}</label>
            <input class="form-control" type="text" id="name" name="name" placeholder="{{ __('Enter your name') }}" required
                   value="{{old('name')}}">
        </div>

        <!--Email Address -->
        <div class="form-group">
            <label for="email">{{ __('Email address') }}</label>
            <input class="form-control" type="email" id="email" name="email" required placeholder="{{ __('Enter your email') }}"
                   value="{{old('email')}}">
        </div>

        <!-- Password -->
        <div class="form-group">
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

        <!-- Password Confirmation -->
        <div class="form-group">
            <label for="password_confirmation">{{ __('Password Confirmation') }}</label>
            <div class="input-group input-group-merge">
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"
                       placeholder="{{ __('Confirm your password') }}">
                <div class="input-group-append" data-password="false">
                    <div class="input-group-text">
                        <span class="password-eye font-12"></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="form-group mb-0 text-center">
            <button form="registerForm" class="btn btn-primary waves-effect waves-light btn-block" type="submit"> {{ __('Sign
                Up') }}
            </button>
        </div>

    </form>
    <!-- end form-->

    <!-- Footer-->
    <footer class="footer footer-alt">
        <p class="text-muted">{{ __('Already have account?') }} <a href="{{route('login')}}" class="text-muted ml-1"><b>{{ __('Log
            In') }}</b></a></p>
    </footer>

</x-auth-layout>
