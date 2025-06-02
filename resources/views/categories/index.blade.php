<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="flex justify-center items-center mt-4 gap-4">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100">Category List</h3>
                <a href="{{ route('categories.create') }}" style="display: inline-block; padding: 0.5rem 1.25rem; background-color: #4f46e5; color: white; border-radius: 0.375rem; box-shadow: 0 1px 2px rgba(0,0,0,0.1);" class="hover:bg-indigo-700 transition">+ Add Category</a>
            </div>

            <div class="overflow-x-auto mt-4 flex justify-center">
                <table class="min-w-full bg-white dark:bg-gray-800 rounded-lg shadow overflow-hidden">
                    <thead>
                        <tr class="bg-gray-100 dark:bg-gray-700">
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 dark:text-gray-300 uppercase tracking-wider">S.No</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 dark:text-gray-300 uppercase tracking-wider">Name</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 dark:text-gray-300 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-900 transition">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{ $loop->iteration }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{ $category->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">
                                    <a href="{{ route('categories.edit', $category) }}" 
                                       class="text-indigo-600 hover:text-indigo-900 font-medium">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        @if ($categories->isEmpty())
                            <tr>
                                <td colspan="3" class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">No categories found.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>
