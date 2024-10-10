<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Appointment') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <form action="{{ route('appointments.store') }}" method="POST">
                    @csrf

                    <!-- Name Field -->
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Name') }}</label>
                        <input type="text" name="name" id="name" value="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>

                    <!-- Email Field -->
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Email') }}</label>
                        <input type="email" name="email" id="email" value="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>

                    <!-- Date Field -->
                    <div class="mb-4">
                        <label for="date" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Date') }}</label>
                        <input type="date" name="date" id="date" value="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>

                    <!-- Time Field -->
                    <label for="time">Time:</label>
                    <input type="time" name="time" id="time" value="{{ old('time') }}" required>


                    <!-- Description Field -->
                    <div class="mb-4">
                        <label for="description" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Description') }}</label>
                        <textarea name="description" id="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            {{ __('Create Appointment') }}
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
