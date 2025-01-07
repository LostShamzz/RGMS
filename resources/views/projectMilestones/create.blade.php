<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Project Milestone') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('projectMilestones.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="research_grant_id" class="block text-sm font-medium text-white dark:text-white">Research Grant</label>
                            <select name="research_grant_id" id="research_grant_id" class="mt-1 block w-full bg-red-200 dark:bg-red-800 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:border-gray-600 dark:text-black">
                                @forelse ($researchGrants as $grant)
                                    <option value="{{ $grant->id }}">{{ $grant->project_title }}</option>
                                @empty
                                    <option value="" disabled>No Research Grants available</option>
                                @endforelse
                            </select>
                            @error('research_grant_id')
                                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="milestone_name" class="block text-sm font-medium text-white dark:text-white">Milestone Name</label>
                            <input type="text" name="milestone_name" id="milestone_name" class="mt-1 block w-full bg-red-200 dark:bg-red-800 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:border-gray-600 dark:text-black" required>
                            @error('milestone_name')
                                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="target_completion_date" class="block text-sm font-medium text-white dark:text-white">Target Completion Date</label>
                            <input type="date" name="target_completion_date" id="target_completion_date" class="mt-1 block w-full bg-red-200 dark:bg-red-800 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:border-gray-600 dark:text-black" required>
                            @error('target_completion_date')
                                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="deliverable" class="block text-sm font-medium text-white dark:text-white">Deliverable</label>
                            <textarea name="deliverable" id="deliverable" rows="3" class="mt-1 block w-full bg-red-200 dark:bg-red-800 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:border-gray-600 dark:text-black" required></textarea>
                            @error('deliverable')
                                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="status" class="block text-sm font-medium text-white dark:text-white">Status</label>
                            <select name="status" id="status" class="mt-1 block w-full bg-red-200 dark:bg-red-800 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:border-gray-600 dark:text-black" required>
                                <option value="Not Started">Not Started</option>
                                <option value="In Progress">In Progress</option>
                                <option value="Completed">Completed</option>
                            </select>
                            @error('status')
                                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="remark" class="block text-sm font-medium text-white dark:text-white">Remarks (Optional)</label>
                            <textarea name="remark" id="remark" rows="3" class="mt-1 block w-full bg-red-200 dark:bg-red-800 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:border-gray-600 dark:text-black"></textarea>
                        </div>

                        <button type="submit" class="px-6 py-2 bg-black text-white rounded-md shadow-md hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:ring-offset-2">Save Milestone</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
