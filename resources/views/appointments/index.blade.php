<x-app-layout>
    <div class="flex min-h-screen">
        <!-- Left Sidebar -->
        <div class="w-1/4 bg-gray-800 text-white p-6">
            <h2 class="text-lg font-bold mb-4">Dashboard</h2>
            <ul>
                <li class="mb-2">
                    <a href="{{ route('categories.index') }}" class="text-gray-300 hover:text-white">Categories</a>
                </li>
                <li class="mb-2">
                    <a href="{{ route('appointments.index') }}" class="text-gray-300 hover:text-white">Appointments</a>
                </li>
            </ul>
        </div>

        <!-- Main Content Area -->
        <div class="w-3/4 p-8 bg-gray-100">
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Appointments') }}
                </h2>
            </x-slot>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <!-- Add Appointment Button -->
                        <div class="mt-4">
                            <a href="{{ route('appointments.create') }}"
                               class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Appointment</a>
                        </div>

                        <!-- Appointment Table -->
                        <table class="table-auto w-full mt-4">
                            <thead>
                            <tr>
                                <th class="px-4 py-2">ID</th>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">Email</th>
                                <th class="px-4 py-2">Date</th>
                                <th class="px-4 py-2">Time</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($appointments as $appointment)
                                <tr>
                                    <td class="border px-4 py-2">{{ $appointment->id }}</td>
                                    <td class="border px-4 py-2">{{ $appointment->name }}</td>
                                    <td class="border px-4 py-2">{{ $appointment->email }}</td>
                                    <td class="border px-4 py-2">{{ $appointment->date }}</td>
                                    <td class="border px-4 py-2">{{ $appointment->time }}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('appointments.show', $appointment->id) }}"
                                           class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Show</a>
                                        <a href="{{ route('appointments.edit', $appointment->id) }}"
                                           class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                        <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST"
                                              class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    onclick="return confirm('Are you sure you want to delete this appointment?');"
                                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- FullCalendar -->
                        <div id="calendar" class="mt-8"></div> <!-- Calendar will appear here -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FullCalendar CSS and JS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.9.0/main.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.9.0/main.min.js"></script>

    <!-- FullCalendar Initialization Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',  // You can change this to 'timeGridWeek' for week view
                events: '/appointments/events', // Route to fetch the appointments from the backend
                eventClick: function (info) {
                    alert('Appointment: ' + info.event.title + '\nDescription: ' + info.event.extendedProps.description);
                }
            });

            calendar.render();
        });
    </script>
</x-app-layout>
