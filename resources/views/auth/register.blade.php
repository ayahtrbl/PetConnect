<x-guest-layout>

    <div class = "hidden lg:block flex-1 p-6 justify-center items-center">
        <img src="{{asset('images/photo-deco-2.png')}}" alt="angry cat">
    </div>

    <div class = "flex flex-col flex-1 justify-center">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-10">
                <h2 class = "text-4xl font-bold">Register</h2>
                <br>
                <p class =>Let's Get Started!
                    <br>Create an account to login.</p>
            </div>

            <!-- Name -->
            <div>
                <x-text-input  id="name" placeholder="Name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <!-- Email Address -->
            <div class="mt-4">
                <x-text-input id="email" placeholder="Email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <!-- Birthday-->
            <div class="mt-4">
                <x-text-input type="text" onfocus="(this.type='date')" id="birthday" placeholder="Birthday" class="block mt-1 w-full"  name="birthday" :value="old('birthday')" required />
                <x-input-error :messages="$errors->get('birthday')" class="mt-2" />
            </div>
            <!-- Password -->
            <div class="mt-4">
                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                placeholder="Password"
                                required/>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <!-- Confirm Password -->
            <div class="mt-4">
                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required placeholder="Confirmed Password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm hover:text-[#ffb845] rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
