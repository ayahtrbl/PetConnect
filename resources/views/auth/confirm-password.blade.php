<x-guest-layout>
    
    <div class = "hidden lg:block flex-1 p-6 justify-center items-center">
        <img src="{{asset('images/photo-deco-1.png')}}" alt="happy dog">
    </div>

    <div class = "flex flex-col flex-1 justify-center">
        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf
            <div class="mb-4 ">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </div>
            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="flex justify-end mt-4">
                <x-primary-button>
                    {{ __('Confirm') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
