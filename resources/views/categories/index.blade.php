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
                    {{ __('Categories') }}
                </h2>
            </x-slot>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <!-- Add Category Button -->
                        <div class="mt-4">
                            <a href="{{ route('categories.create') }}"
                               class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Category</a>
                        </div>

                        <!-- Categories Table -->
                        <table class="table-auto w-full mt-4">
                            <thead>
                            <tr>
                                <th class="border px-4 py-2">ID</th>
                                <th class="border px-4 py-2">Title</th>
                                <th class="border px-4 py-2">Description</th>
                                <th class="border px-4 py-2">Created At</th>
                                <th class="border px-4 py-2">Updated At</th>
                                <th class="border px-4 py-2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td class="border px-4 py-2">{{ $category->id }}</td>
                                    <td class="border px-4 py-2">{{ $category->title }}</td>
                                    <td class="border px-4 py-2">{{ $category->description }}</td>
                                    <td class="border px-4 py-2">{{ $category->created_at }}</td>
                                    <td class="border px-4 py-2">{{ $category->updated_at }}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('categories.show', $category->id) }}"
                                           class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">View</a>
                                        <a href="{{ route('categories.edit', $category->id) }}"
                                           class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    onclick="return confirm('Are you sure you want to delete this category?');"
                                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- Pagination Links -->
                        <div class="p-5">
                            {{ $categories->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

