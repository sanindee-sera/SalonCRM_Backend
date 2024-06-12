<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h3 class="text-2xl font-bold mb-4">Welcome to your Dashboard!</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Example Card 1 -->
                    <div class="bg-gray-100 p-4 rounded-lg shadow">
                        <h4 class="font-semibold text-lg">Card Title 1</h4>
                        <p class="mt-2 text-gray-600">Card content goes here...</p>
                    </div>

                    <!-- Example Card 2 -->
                    <div class="bg-gray-100 p-4 rounded-lg shadow">
                        <h4 class="font-semibold text-lg">Card Title 2</h4>
                        <p class="mt-2 text-gray-600">Card content goes here...</p>
                    </div>

                    <!-- Example Card 3 -->
                    <div class="bg-gray-100 p-4 rounded-lg shadow">
                        <h4 class="font-semibold text-lg">Card Title 3</h4>
                        <p class="mt-2 text-gray-600">Card content goes here...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
