<x-app-layout>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ ('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                {{ ("You're logged in!") }}

                <!-- Container for the buttons with a card style -->
                <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Card 1 - Manage Academicians -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:scale-105 transform transition duration-200">
                        <a href="{{ route('academicians.index') }}" class="block text-center text-blue-600 font-semibold text-xl">
                            <div class="mb-4">
                                <i class="fas fa-users text-4xl mb-2"></i>
                            </div>
                            Manage Academicians
                        </a>
                    </div>

                    <!-- Card 2 - Manage Research Grants -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:scale-105 transform transition duration-200">
                        <a href="{{ route('researchGrants.index') }}" class="block text-center text-green-600 font-semibold text-xl">
                            <div class="mb-4">
                                <i class="fas fa-clipboard-list text-4xl mb-2"></i>
                            </div>
                            Manage Research Grants
                        </a>
                    </div>

                    <!-- Card 3 - Manage Project Milestones -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:scale-105 transform transition duration-200">
                        <a href="{{ route('projectMilestones.index') }}" class="block text-center text-yellow-600 font-semibold text-xl">
                            <div class="mb-4">
                                <i class="fas fa-tasks text-4xl mb-2"></i>
                            </div>
                            Manage Project Milestones
                        </a>
                    </div>

                    <!-- Card 4 - Manage Project Members -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:scale-105 transform transition duration-200">
                        <a href="{{ route('projectMembers.index') }}" class="block text-center text-red-600 font-semibold text-xl">
                            <div class="mb-4">
                                <i class="fas fa-users-cog text-4xl mb-2"></i>
                            </div>
                            Manage Project Members
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
