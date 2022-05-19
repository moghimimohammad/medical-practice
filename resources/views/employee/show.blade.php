<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 ">
                    <div class="block">
                        <span class="text-gray-700">First Name</span>
                        <div>{{ $employee->first_name }}</div>
                    </div>
                    <div class="block">
                        <span class="text-gray-700">Last Name</span>
                        <div>{{ $employee->last_name }}</div>
                    </div>
                    <div class="block">
                        <span class="text-gray-700">Email</span>
                        <div>{{ $employee->email }}</div>
                    </div>
                    <div class="block">
                        <span class="text-gray-700">Phone</span>
                        <div>{{ $employee->phone }}</div>
                    </div>
                    <a href="{{ route('employee.edit', $employee) }}"
                        class="inline-flex items-center mt-4 px-4 py-2 bg-gray-800 
                        border border-transparent rounded-md font-semibold text-xs text-white uppercase 
                        tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 
                        focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3">
                        Edit
                    </a>
                </div>
            </div>
        </div>

</x-app-layout>