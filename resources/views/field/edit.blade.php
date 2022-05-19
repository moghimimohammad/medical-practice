<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                    <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{ route('field.update', $field)}}">
                        @csrf
                        @method('PUT')
                        <div class="mt-8 px-4 max-w-md">
                            <div class="grid grid-cols-1 gap-8">
                            <label class="block">
                                <span class="text-gray-700">Name</span>
                                <input type="text" id="name" name="name" class="mt-1 block w-full rounded" required="" value="{{ $field->name }}">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </label>
                            
                            </div>
                            <button type="submit" class="inline-flex items-center mt-4 px-4 py-2 bg-gray-800 
                                border border-transparent rounded-md font-semibold text-xs text-white uppercase 
                                tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 
                                focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

</x-app-layout>