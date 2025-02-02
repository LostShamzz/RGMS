<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('View Academician') }}
        </h2>
    </x-slot>

    <div class="py-12">
        
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="space-y-6">
                        <div class="bg-blue-100 dark:bg-blue-700 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Name:</h3>
                            <p class="text-gray-700 dark:text-gray-300">{{ $academician->name }}</p>
                        </div>

                        <div class="bg-blue-100 dark:bg-blue-700 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Staff Number:</h3>
                            <p class="text-gray-700 dark:text-gray-300">{{ $academician->staff_number }}</p>
                        </div>

                        <div class="bg-blue-100 dark:bg-blue-700 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Email:</h3>
                            <p class="text-gray-700 dark:text-gray-300">{{ $academician->email }}</p>
                        </div>

                        <div class="bg-blue-100 dark:bg-blue-700 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">College:</h3>
                            <p class="text-gray-700 dark:text-gray-300">{{ $academician->college }}</p>
                        </div>

                        <div class="bg-blue-100 dark:bg-blue-700 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Department:</h3>
                            <p class="text-gray-700 dark:text-gray-300">{{ $academician->department }}</p>
                        </div>

                        <div class="bg-blue-100 dark:bg-blue-700 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Position:</h3>
                            <p class="text-gray-700 dark:text-gray-300">{{ $academician->position }}</p>
                        </div>
                    </div>
                    
                    <div class="mt-6">
                        <a href="{{ route('academicians.index') }}" class="btn btn-secondary mt-4 px-6 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg shadow-md">
                            Back to List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>