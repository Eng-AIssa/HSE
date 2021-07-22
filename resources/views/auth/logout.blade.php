<x-auth-layout>


    <!-- Logout Success Logo And Message -->
    <div class="text-center">
        <div class="mt-4">
            <div class="logout-checkmark">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                    <circle class="path circle" fill="none" stroke="#4bd396" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
                    <polyline class="path check" fill="none" stroke="#4bd396" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
                </svg>
            </div>
        </div>

        <h3>{{ __('See you again') }} !</h3>

        <p class="text-muted"> {{ __('You are now successfully sign out') }}. </p>
    </div>
    <!-- End Logout Success Logo And Message -->


    <!-- Footer-->
    <footer class="footer footer-alt">
        <p class="text-muted">{{ __('Back to') }} <a href="{{route('login')}}" class="text-muted ml-1"><b>{{ __('Sign In') }}</b></a></p>
    </footer>

</x-auth-layout>
