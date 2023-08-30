<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Clase') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if(Auth::user()->role_id == 1)
                    <a href="{{route('classes.add')}}"><x-primary-button> add </x-primary-button></a>
                    @endif
                    <br>
                    <br>
                    @for($i=0;$i<10;$i++)
                    <br>
                    {{ __("Here will be listed all classes") }}
                    @endfor
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
