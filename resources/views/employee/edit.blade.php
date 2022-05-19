<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                    <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{ route('employee.update', $employee)}}">
                        @csrf
                        @method('PUT')
                        <div class="mt-8 px-4 max-w-md">
                            <div class="grid grid-cols-1 gap-8">
                            <label class="block">
                                <span class="text-gray-700">First Name</span>
                                <input type="text" id="name" name="first_name" class="mt-1 block w-full rounded" required="" value="{{ $employee->first_name }}">
                                @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </label>
                            <label class="block">
                                <span class="text-gray-700">Last Name</span>
                                <input type="text" id="name" name="last_name" class="mt-1 block w-full rounded" required="" value="{{ $employee->last_name }}">
                                @error('last_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </label>
                            <label class="block">
                                <span class="text-gray-700">Practice</span>
                                <select name="practice_id" id="practice" class="mt-1 block w-full rounded">
                                    @foreach($practices as $practice)
                                        <option value="{{ $practice->id }}" @if($practice->id == $employee->practice->id)selected="selected"@endif>{{ $practice->name }}</option>
                                    @endforeach
                                </select>
                                @error('practice_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </label>
                            <label class="block">
                                <span class="text-gray-700">Email</span>
                                <input type="text" id="email" name="email" class="mt-1 block w-full rounded"  value="{{ $employee->email }}">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </label>
                            <label class="block">
                                <span class="text-gray-700">Phone</span>
                                <input type="text" id="phone" name="phone" class="mt-1 block w-full rounded" value="{{ $employee->phone }}">
                                @error('phone')
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