<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Project Milestone Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="space-y-6">
                        <div class="bg-red-200 dark:bg-red-800 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-black dark:text-black">Milestone Name:</h3>
                            <p class="text-black dark:text-black">{{ $projectMilestone->milestone_name }}</p>
                        </div>

                        <div class="bg-red-200 dark:bg-red-800 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-black dark:text-black">Research Grant:</h3>
                            <p class="text-black dark:text-black">{{ $projectMilestone->researchGrant->project_title }}</p>
                        </div>

                        <div class="bg-red-200 dark:bg-red-800 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-black dark:text-black">Target Completion Date:</h3>
                            <p class="text-black dark:text-black">{{ $projectMilestone->target_completion_date }}</p>
                        </div>

                        <div class="bg-red-200 dark:bg-red-800 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-black dark:text-black">Deliverable:</h3>
                            <p class="text-black dark:text-black">{{ $projectMilestone->deliverable }}</p>
                        </div>

                        <div class="bg-red-200 dark:bg-red-800 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-black dark:text-black">Status:</h3>
                            <p class="text-black dark:text-black">{{ $projectMilestone->status }}</p>
                        </div>

                        <div class="bg-red-200 dark:bg-red-800 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-black dark:text-black">Remarks:</h3>
                            <p class="text-black dark:text-black">{{ $projectMilestone->remark }}</p>
                        </div>

                        <div class="bg-red-200 dark:bg-red-800 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-black dark:text-black">Last Updated:</h3>
                            <p class="text-black dark:text-black">{{ $projectMilestone->date_updated ? $projectMilestone->date_updated->format('Y-m-d H:i:s') : 'Not Updated' }}</p>
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('projectMilestones.index') }}" class="px-6 py-2 bg-black text-white rounded-md shadow-md hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:ring-offset-2">
                            Back 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
