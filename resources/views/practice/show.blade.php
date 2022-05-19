<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="block">
                        <span class="text-gray-700">Name</span>
                        <div>{{ $practice->name }}</div>
                    </div>
                    <div class="block">
                        <span class="text-gray-700">Email</span>
                        <div>{{ $practice->email }}</div>
                    </div>
                    <div class="block">
                        <span class="text-gray-700">Website URL</span>
                        <div>{{ $practice->website_url }}</div>
                    </div>
                    <div><img src="{{ Storage::url($practice->logo) }}" alt="" style="width: 100px"></div>
                    <a class="inline-flex items-center mt-4 px-4 py-2 bg-gray-800 
                        border border-transparent rounded-md font-semibold text-xs text-white uppercase 
                        tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 
                        focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3"
                        href="{{ route('practice.edit', $practice) }}">
                        Edit
                    </a>
                </div>
                
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                   <h3  >Employees</h3>
                   <ul class="list-none p-6">
                        @foreach($practice->employees as $employee)
                        <li>
                            <a href="{{ url('employee', [$employee]) }}">
                                {{ $employee->first_name }} {{ $employee->last_name }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                    <h3>Fields</h3>
                    <ul class="list-none p-6">
                    @foreach($practice->fields as $field)
                        <li>
                            <a href="{{ url('field', [$field]) }}">
                                {{ $field->name }}
                            </a>
                        </li>
                   @endforeach
                    </ul>
                </div>
            </div>
        </div>

</x-app-layout>