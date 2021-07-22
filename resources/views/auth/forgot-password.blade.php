<x-auth-layout>

    <!-- title-->
    <h4 class="mt-0">{{ __('Recover Password') }}</h4>
    <p class="text-muted mb-4">{{ __("Enter your email address and we'll send you an email with instructions to reset your password") }}
        .</p>
    <!-- End title-->


    <!-- Session Status -->
    <x-auth-session-status class="mb-4 text-danger" :status="session('status')"/>


    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors"/>


    <!-- form -->
    <form method="POST" action="{{ route('password.email') }}">
    @csrf

    <!-- Email Address -->
        <div class="form-group mb-3">
            <label for="email">{{ __('Email address') }}</label>
            <input class="form-control" type="email" id="email" name="email" required=""
                   placeholder="{{ __('Enter your email') }}" value="{{old('email')}}">
        </div>
        <!-- End  Email Address -->

        <!-- Submit Button -->
        <div class="form-group mb-0 text-center">
            <button class="btn btn-primary waves-effect waves-light btn-block" type="submit"> {{ __('Reset
                Password') }}
            </button>
        </div>
        <!-- End Submit Button -->

    </form>
    <!-- End form-->


    <!-- Footer-->
    <footer class="footer footer-alt">
        <p class="text-muted">{{ __('Back to') }} <a href="{{route('login')}}" class="text-muted ml-1"><b>{{ __('Log in') }}</b></a>
        </p>
    </footer>

</x-auth-layout>
