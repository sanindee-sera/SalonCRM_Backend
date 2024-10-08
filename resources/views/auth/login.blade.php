<x-app-layout>
    <div class="min-h-screen flex">
        <!-- Left side background with image -->
        <div class="hidden lg:flex w-1/2 bg-cover bg-center"
             style="background-image: url('{{ asset('images/img_1.png') }}');">
        </div>

        <!-- Right side with form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center relative bg-gray-100">
            <div class="w-full max-w-md px-10 py-8 bg-white shadow-lg rounded-lg relative border border-gray-200">

                <!-- Welcome Text and Description -->
                <div class="text-center mb-6">
                    <h1 class="text-3xl font-bold text-gray-800">Welcome back!</h1>
                    <p class="text-gray-500">Enter your credentials to access your account</p>
                </div>

                <!-- Validation Errors -->
                <x-validation-errors class="mb-4" />

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <!-- Login Form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Field -->
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                        <input id="email" class="block mt-1 w-full border border-gray-300 rounded-lg py-2 px-3 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:outline-none transition duration-300 ease-in-out" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <!-- Password Field -->
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input id="password" class="block mt-1 w-full border border-gray-300 rounded-lg py-2 px-3 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:outline-none transition duration-300 ease-in-out" type="password" name="password" required />
                    </div>

                    <!-- Remember Me and Forgot Password -->
                    <div class="flex items-center justify-between mb-4">
                        <label for="remember_me" class="flex items-center text-sm">
                            <input id="remember_me" type="checkbox" name="remember" class="mr-2 text-green-600">
                            Remember me
                        </label>
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                Forgot your password?
                            </a>
                        @endif
                    </div>

                    <!-- Log In Button -->
                    <div class="mt-6">
                        <button class="w-full bg-green-600 text-white font-bold py-2 px-4 rounded-lg shadow-lg hover:bg-green-700 transition-all duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            Log in
                        </button>
                    </div>

                    <!-- OR Divider -->
                    <div class="mt-4 text-center">
                        <span>OR</span>
                        <div class="flex justify-center mt-2">
                            <button class="w-1/2 bg-gray-100 text-gray-800 py-2 px-4 mr-2 border border-gray-300 rounded-lg hover:bg-gray-200 transition-colors duration-200 ease-in-out shadow-md">
                                Sign in with Google
                            </button>
                            <button class="w-1/2 bg-gray-100 text-gray-800 py-2 px-4 ml-2 border border-gray-300 rounded-lg hover:bg-gray-200 transition-colors duration-200 ease-in-out shadow-md">
                                Sign in with Apple
                            </button>
                        </div>
                    </div>

                    <!-- Sign Up Option -->
                    <div class="mt-4 text-center">
                        <p class="text-gray-600">Don't have an account? <a href="{{ route('register') }}" class="text-green-600 font-bold hover:underline">Sign up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
