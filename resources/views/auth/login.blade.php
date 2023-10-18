<x-guest-layout>
    
    <div class = "hidden lg:block flex-1 p-6 justify-center items-center">
        <img src="{{asset('images/photo-deco-1.png')}}" alt="happy dog">
    </div>
    
    
    <div class = "flex flex-col flex-1 justify-center items-center">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-10">
                <h2 class = "text-3xl font-bold">Login</h2>
                <br>
                <p>Welcome back, some of our furry friends are looking <br>for their forever home!</p>
            </div>
            <!-- Email Address -->
            
            <div>
                <x-text-input id="email" placeholder="Email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <!-- Password -->
            <div class="mt-4">
                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                placeholder="Password"
                                required />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <!-- Remember Me -->
            <div class="flex justify-between items-center">
                <div class="my-4 ">
                    <label for="remember_me" class="inline-flex items-center ">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ml-2 text-sm">{{ __('Remember me') }}</span>
                    </label>
                </div>
                <div class = "my-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm hover:text-[#ffb845] rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
            </div>
            <x-primary-button class="w-full">
                {{ __('Log in') }}
            </x-primary-button>

            <div class = "mt-5">
                Have an account? <a href="{{route('register')}}" class = "text-[#ffb845]">Sign up</a>
            </div>
        </form>
    </div>
</x-guest-layout>
