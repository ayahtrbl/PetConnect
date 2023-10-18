<x-guest-layout>
    
    
    <form method="POST" action="{{ route('password.email') }}">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        @csrf
        <!-- Email Address -->
        <div class="mb-4 text-sm">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>
        <div>
            <x-text-input id="email" placehold="Email" title="Email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="flex items-center justify-end mt-4 gap-6">
            <a href="{{route('login')}}" class = "text-white hover:text-[#ffb845] underline text-sm">
                Go back to login
            </a>
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
