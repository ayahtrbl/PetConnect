<x-guest-layout>
    
    <div class = "hidden lg:block flex-1 p-6 justify-center items-center">
        <img src="{{asset('images/photo-deco-3.png')}}" alt="happy dog">
    </div>

    <div class = "flex flex-col flex-1 justify-center">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <!-- Email Address -->
            <h1 class = "text-4xl mb-5">
                Reset Password
            </h1>
            <div class="mb-4 text-sm">
                Forgot your password? No problem. Just let us know your <span class="font-bold">email address</span> and we will email you a password reset link that will allow you to choose a new one.
            </div>
            <div>
                <x-text-input id="email" placeholder="Email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
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
    </div>
</x-guest-layout>
