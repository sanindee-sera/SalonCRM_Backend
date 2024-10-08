<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <!-- Include your CSS here (Tailwind or Bootstrap) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

<div class="flex">
    <!-- Sidebar -->
    <div class="w-1/4 h-screen bg-gray-900 text-white p-6">
        <div class="mb-6">
            <h2 class="text-2xl font-bold text-center mb-4">Dashboard</h2>
        </div>
        <!-- Sidebar Links -->
        <ul class="space-y-4">
            <li>
                <a href="{{ route('categories.index') }}" class="flex items-center space-x-3 p-2 rounded-lg bg-gray-800 hover:bg-gray-700 transition duration-300">
                    <!-- Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l6-6m-6 6l6 6" />
                    </svg>
                    <span class="text-gray-300 group-hover:text-white font-semibold">Categories</span>
                </a>
            </li>
            <li>
                <a href="{{ route('appointments.index') }}" class="flex items-center space-x-3 p-2 rounded-lg bg-gray-800 hover:bg-gray-700 transition duration-300">
                    <!-- Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 0v4m-9 4h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span class="text-gray-300 group-hover:text-white font-semibold">Appointments</span>
                </a>
            </li>
        </ul>
        <!-- Logout -->
        <div class="mt-auto">
            <a href="#" class="flex items-center space-x-3 p-2 rounded-lg bg-red-600 hover:bg-red-500 transition duration-300">
                <!-- Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1m-6-1V9a4 4 0 014-4h4" />
                </svg>
                <span class="text-white font-semibold">Logout</span>
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="w-3/4 p-8 bg-gray-100">
        @yield('content')
    </div>
</div>

</body>
</html>
