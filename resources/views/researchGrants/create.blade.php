<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Research Grant') }}
        </h2>
    </x-slot>

    <div class="py-12">
        
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('researchGrants.store') }}" method="POST">
                        @csrf

                        <!-- Project Title -->
                        <div class="mb-4">
                            <label for="project_title" class="block text-sm font-medium text-white">Project Title</label>
                            <input type="text" name="project_title" id="project_title" class="form-input rounded-md shadow-sm mt-1 block w-full bg-green-200 text-black" required>
                        </div>

                        <!-- Project Leader -->
                        <div class="mb-4">
                            <label for="project_leader_id" class="block text-sm font-medium text-white">Project Leader</label>
                            <select name="project_leader_id" id="project_leader_id" class="form-input rounded-md shadow-sm mt-1 block w-full bg-green-200 text-black" required>
                                @foreach ($academicians as $academician)
                                    <option value="{{ $academician->id }}">{{ $academician->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Grant Amount -->
                        <div class="mb-4">
                            <label for="grant_amount" class="block text-sm font-medium text-white">Grant Amount</label>
                            <input type="number" name="grant_amount" id="grant_amount" class="form-input rounded-md shadow-sm mt-1 block w-full bg-green-200 text-black" required>
                        </div>

                        <!-- Grant Provider -->
                        <div class="mb-4">
                            <label for="grant_provider" class="block text-sm font-medium text-white">Grant Provider</label>
                            <input type="text" name="grant_provider" id="grant_provider" class="form-input rounded-md shadow-sm mt-1 block w-full bg-green-200 text-black" required>
                        </div>

                        <!-- Start Date -->
                        <div class="mb-4">
                            <label for="start_date" class="block text-sm font-medium text-white">Start Date</label>
                            <input type="date" name="start_date" id="start_date" class="form-input rounded-md shadow-sm mt-1 block w-full bg-green-200 text-black" required>
                        </div>

                        <!-- Duration in Months -->
                        <div class="mb-4">
                            <label for="duration_months" class="block text-sm font-medium text-white">Duration (Months)</label>
                            <input type="number" name="duration_months" id="duration_months" class="form-input rounded-md shadow-sm mt-1 block w-full bg-green-200 text-black" required>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn bg-green-600 text-white rounded-lg hover:bg-green-700 py-2 px-4 mt-4">Create Research Grant</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>