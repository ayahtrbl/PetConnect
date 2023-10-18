<x-guest-layout>
    <div class = "hidden lg:block flex-1 p-6 justify-center items-center">
        <img src="{{asset('images/photo-deco-3.png')}}" alt="happy dog">
    </div>

    <div class = "flex flex-col flex-1 justify-center">
        <form method="POST" action="{{ route('password.store') }}">
            @csrf
            <h1 class = "text-4xl mb-5">
                Reset Password
            </h1>
            <div class="mb-4 text-sm">
                Make sure to not forget it this time. Raur
            </div>
            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <!-- Email Address -->
            <div>
                <x-text-input id="email" placeholder="Email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <!-- Password -->
            <div class="mt-4">
                <x-text-input id="password" placeholder="Password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <!-- Confirm Password -->
            <div class="mt-4">
                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    placeholder="Confirmed Password"
                                    name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            <div class="flex items-center justify-end mt-4">
                <x-primary-button>
                    {{ __('Reset Password') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
