<x-app-layout>
    <!-- Navigation Bar -->
    <nav class="bg-gray-800 p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div>
                <a href="{{ route('dashboard') }}" class="text-white text-xl font-bold">Dashboard</a>
            </div>
            <div class="flex space-x-6">
                <a href="{{ route('categories.index') }}" class="text-gray-300 hover:text-white font-medium">Categories</a>
                <a href="{{ route('appointments.index') }}" class="text-gray-300 hover:text-white font-medium">Appointments</a>
                <!-- Add more links here if needed -->
            </div>
        </div>
    </nav>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Statistics Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-6">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <h3 class="text-lg font-medium">Total Sales</h3>
                    <p class="mt-2 text-2xl">$12,000</p>
                </div>
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <h3 class="text-lg font-medium">New Users</h3>
                    <p class="mt-2 text-2xl">150</p>
                </div>
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <h3 class="text-lg font-medium">Active Sessions</h3>
                    <p class="mt-2 text-2xl">75</p>
                </div>
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <h3 class="text-lg font-medium">Bounce Rate</h3>
                    <p class="mt-2 text-2xl">20%</p>
                </div>
            </div>

            <!-- Simple Table -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 mb-6">
                <h3 class="text-lg font-medium mb-4">Recent Transactions</h3>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">2024-06-12</td>
                        <td class="px-6 py-4 whitespace-nowrap">John Doe</td>
                        <td class="px-6 py-4 whitespace-nowrap">$100</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">2024-06-11</td>
                        <td class="px-6 py-4 whitespace-nowrap">Jane Smith</td>
                        <td class="px-6 py-4 whitespace-nowrap">$150</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">2024-06-10</td>
                        <td class="px-6 py-4 whitespace-nowrap">Alice Johnson</td>
                        <td class="px-6 py-4 whitespace-nowrap">$200</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <!-- Detailed Analytics Table -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 mb-6">
                <h3 class="text-lg font-medium mb-4">User Engagement</h3>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Page Views</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Session Duration</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Conversions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">John Doe</td>
                        <td class="px-6 py-4 whitespace-nowrap">120</td>
                        <td class="px-6 py-4 whitespace-nowrap">15 mins</td>
                        <td class="px-6 py-4 whitespace-nowrap">3</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">Jane Smith</td>
                        <td class="px-6 py-4 whitespace-nowrap">90</td>
                        <td class="px-6 py-4 whitespace-nowrap">10 mins</td>
                        <td class="px-6 py-4 whitespace-nowrap">2</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">Alice Johnson</td>
                        <td class="px-6 py-4 whitespace-nowrap">150</td>
                        <td class="px-6 py-4 whitespace-nowrap">20 mins</td>
                        <td class="px-6 py-4 whitespace-nowrap">5</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
