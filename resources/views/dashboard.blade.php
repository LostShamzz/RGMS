<x-app-layout>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ ('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Centered and enlarged "You're logged in!" text -->
            <div class="text-center text-lg font-medium text-white dark:text-gray-200 mb-12 unique-heading-style">
                {{ "You're logged in!" }}
            </div>

            <!-- Grid for cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1 - Manage Academicians -->
                <div class="bg-grey dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:scale-105 transform transition duration-300 unique-card-style">
                    <a href="{{ route('academicians.index') }}" class="block text-center text-blue-600 dark:text-blue-400 font-semibold text-xl">
                        <div class="mb-4">
                            <i class="fas fa-users text-5xl mb-3"></i>
                        </div>
                        Manage Academicians
                    </a>
                </div>

                <!-- Card 2 - Manage Research Grants -->
                <div class="bg-grey dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:scale-105 transform transition duration-300 unique-card-style">
                    <a href="{{ route('researchGrants.index') }}" class="block text-center text-green-600 dark:text-green-400 font-semibold text-xl">
                        <div class="mb-4">
                            <i class="fas fa-clipboard-list text-5xl mb-3"></i>
                        </div>
                        Manage Research Grants
                    </a>
                </div>

                <!-- Card 3 - Manage Project Milestones -->
                <div class="bg-grey dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:scale-105 transform transition duration-300 unique-card-style">
                    <a href="{{ route('projectMilestones.index') }}" class="block text-center text-yellow-600 dark:text-yellow-400 font-semibold text-xl">
                        <div class="mb-4">
                            <i class="fas fa-tasks text-5xl mb-3"></i>
                        </div>
                        Manage Project Milestones
                    </a>
                </div>

                <!-- Card 4 - Manage Project Members -->
                <div class="bg-grey dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:scale-105 transform transition duration-300 unique-card-style">
                    <a href="{{ route('projectMembers.index') }}" class="block text-center text-red-600 dark:text-red-400 font-semibold text-xl">
                        <div class="mb-4">
                            <i class="fas fa-users-cog text-5xl mb-3"></i>
                        </div>
                        Manage Project Members
                    </a>
                </div>
            </div>

            <!-- System Users Section -->
            <div class="mt-12">
                <div class="text-center text-lg font-medium text-white dark:text-gray-200 mb-12 unique-heading-style">System Users</div>
                <div class="space-y-4">
                    <!-- User Role 1: Admin Executive -->
                    <div class="flex items-center space-x-4 bg-grey dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:scale-105 transform transition duration-300 unique-card-style">
                        <i class="fas fa-user-shield text-5xl text-white"></i>
                        <span class="text-white font-semibold text-xl">Admin Executive</span>
                    </div>

                    <!-- User Role 2: IRMC Staff -->
                    <div class="flex items-center space-x-4 bg-grey dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:scale-105 transform transition duration-300 unique-card-style">
                        <i class="fas fa-user-tie text-5xl text-white"></i>
                        <span class="text-white font-semibold text-xl">IRMC Staff</span>
                    </div>

                    <!-- User Role 3: Project Leader -->
                    <div class="flex items-center space-x-4 bg-grey dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:scale-105 transform transition duration-300 unique-card-style">
                        <i class="fas fa-project-diagram text-5xl text-white"></i>
                        <span class="text-white font-semibold text-xl">Project Leader</span>
                    </div>

                    <!-- User Role 4: Project Members -->
                    <div class="flex items-center space-x-4 bg-grey dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:scale-105 transform transition duration-300 unique-card-style">
                        <i class="fas fa-user-friends text-5xl text-white"></i>
                        <span class="text-white font-semibold text-xl">Project Members</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .unique-heading-style {
            font-family: 'Roboto', sans-serif;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .unique-card-style {
            transition: all 0.3s ease-in-out;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
        }

        .unique-card-style:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
        }

        h3 {
    margin-top: 1rem; /* Adjust this value as needed */
}
    </style>
</x-app-layout>
