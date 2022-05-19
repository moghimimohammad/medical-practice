<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <ul class="list-none p-6">
                        @foreach ($fields as $field)
                        <li>
                            <a href="{{ url('field', [$field]) }}">
                            {{ $field->name }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    <a class="inline-flex items-center mt-4 px-4 py-2 bg-gray-800 
                        border border-transparent rounded-md font-semibold text-xs text-white uppercase 
                        tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 
                        focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3"
                        href="{{ route('field.create') }}">
                        New Field
                    </a>
                </div>
            </div>
        </div>

        

        {!! $fields->links() !!}

</x-app-layout>