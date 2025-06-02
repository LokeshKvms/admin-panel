<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 ">
                    <form method="POST" action="{{ route('posts.update', $post)}}">
                        @csrf
                        @method('PUT')
                        <div class="flex flex-col space-y-4">
                            
                            <div class="flex flex-col mb-4">
                                <x-input-label for="title">Title of the post</x-input-label>
                                <x-text-input name="title" type="text" value="{{ $post->title }}" required/>
                            </div>

                            <div class="flex flex-col mb-4">
                                <x-input-label for="post_text">Post Description</x-input-label>
                                <x-text-input name="post_text" type="text" value="{{ $post->post_text }}" required/>
                            </div>

                            <div class="flex flex-col mb-4">
                                <x-input-label for="post_text">Category</x-input-label>
                                <select name="category_id" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                    
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            @selected($category->id == $post->category_id)>{{ $category->name }}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
                            
                            <x-primary-button>Save</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>