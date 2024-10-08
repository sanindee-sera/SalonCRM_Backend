<x-app-layout>
    <div class="min-h-screen flex">
        <!-- Left side with form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center relative bg-gray-100">
            <div class="w-full max-w-md px-10 py-8 bg-white shadow-lg rounded-lg relative border border-gray-200">

                <!--    <x-authentication-card>
                         <x-slot name="logo">
                             <x-authentication-card-logo />
                         </x-slot>
                </x-authentication-card>-->
                    <!-- Validation Errors -->
                    <x-validation-errors class="mb-4" />

                    <!-- Registration Form -->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name Field -->
                        <div>
                            <x-label for="name" value="{{ __('Name') }}" />
                            <x-input id="name" class="block mt-1 w-full border border-gray-300 rounded-lg py-2 px-3 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:outline-none transition duration-300 ease-in-out" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>

                        <!-- Email Field -->
                        <div class="mt-4">
                            <x-label for="email" value="{{ __('Email') }}" />
                            <x-input id="email" class="block mt-1 w-full border border-gray-300 rounded-lg py-2 px-3 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:outline-none transition duration-300 ease-in-out" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        </div>

                        <!-- Phone Field -->
                        <div class="mt-4">
                            <x-label for="phone" value="{{ __('Phone') }}" />
                            <x-input id="phone"
                                     x-data
                                     x-mask="0799999999" placeholder="07"
                                     class="block mt-1 w-full border border-gray-300 rounded-lg py-2 px-3 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:outline-none transition duration-300 ease-in-out" type="tel" name="phone" :value="old('phone')" required autocomplete="phone" />
                        </div>

                        <!-- Password Field -->
                        <div class="mt-4">
                            <x-label for="password" value="{{ __('Password') }}" />
                            <x-input id="password" class="block mt-1 w-full border border-gray-300 rounded-lg py-2 px-3 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:outline-none transition duration-300 ease-in-out" type="password" name="password" required autocomplete="new-password" />
                        </div>

                        <!-- Confirm Password Field -->
                        <div class="mt-4">
                            <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                            <x-input id="password_confirmation" class="block mt-1 w-full border border-gray-300 rounded-lg py-2 px-3 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:outline-none transition duration-300 ease-in-out" type="password" name="password_confirmation" required autocomplete="new-password" />
                        </div>

                        <!-- Terms and Privacy Policy -->
                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="mt-4">
                                <x-label for="terms">
                                    <div class="flex items-center">
                                        <x-checkbox name="terms" id="terms" required />
                                        <div class="ml-2">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">'.__('Terms of Service').'</a>',
                                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">'.__('Privacy Policy').'</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </x-label>
                            </div>
                        @endif

                        <!-- Register Button -->
                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>

                            <x-button class="ml-4 bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                {{ __('Register') }}
                            </x-button>
                        </div>
                    </form>

            </div>
        </div>

        <!-- Right side background with image -->
        <div class="hidden lg:flex w-1/2 bg-cover bg-center"
             style="background-image: url('{{ asset('images/salonregister.jpg') }}');">
        </div>
    </div>
</x-app-layout>
