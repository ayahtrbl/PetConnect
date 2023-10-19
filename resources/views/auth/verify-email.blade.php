<x-guest-layout>
    <div class = "h-full w-full sm:rounded-lg text-white flex flex-col align-center">

        <div class = "flex items-center justify-center">
            <img src="{{asset('images/email-check.png')}}" alt="">
        </div>

        <h1 class ="text-center text-4xl my-3">
            Verify your Email
        </h1>

        <div class="mb-4 text-lg text-center mb-4 text-[#ffb845]">
            Thank you for registering with PetConnect. To complete the registration process and ensure the security of
                your account, we require you to verify your email address. We have sent you an email on the email that you provided.
                If it was not sent, try resending it by clicking the button below.
        </div>


        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-lime-400 text-center">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif
        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <div>
                    <x-primary-button>
                        {{ __('Resend Verification Email') }}
                    </x-primary-button>
                </div>
            </form>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="underline text-sm text-white hover:text-[#ffb845] rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>
