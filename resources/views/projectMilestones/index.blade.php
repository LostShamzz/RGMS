<x-app-layout>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Project Milestones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <form action="{{ route('projectMilestones.create') }}" method="GET" style="display: inline;">
                    <button type="submit" class="px-4 py-2 mb-4 bg-black text-white font-semibold rounded-md shadow hover:bg-gray-800 transition">
                        Add Project Milestone
                    </button>
                </form>
                <table class="min-w-full table-auto bg-gray-100 dark:bg-gray-700 rounded-lg shadow-md overflow-hidden">
                    <thead>
                        <tr class="bg-red-500 text-left text-sm text-white">
                            <th class="px-6 py-3">Milestone Name</th>
                            <th class="px-6 py-3">Research Grant</th>
                            <th class="px-6 py-3">Target Completion Date</th>
                            <th class="px-6 py-3">Status</th>
                            <th class="px-6 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projectMilestones as $milestone)
                            <tr class="bg-white dark:bg-gray-800">
                                <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">{{ $milestone->milestone_name }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">{{ $milestone->researchGrant->project_title }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">{{ $milestone->target_completion_date }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">{{ $milestone->status }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200 flex space-x-8">
                                    <!-- View Icon -->
                                    <a href="{{ route('projectMilestones.show', $milestone->id) }}" class="text-blue-600 hover:text-blue-800">
                                        <i class="fas fa-eye text-xl"></i> <!-- Eye icon for view -->
                                    </a>

                                    <!-- Edit Icon -->
                                    <a href="{{ route('projectMilestones.edit', $milestone->id) }}" class="text-yellow-600 hover:text-yellow-800">
                                        <i class="fas fa-edit text-xl"></i> <!-- Edit icon -->
                                    </a>

                                    <!-- Delete Icon -->
                                    <form action="{{ route('projectMilestones.destroy', $milestone->id) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800">
                                            <i class="fas fa-trash-alt text-xl"></i> <!-- Trash icon for delete -->
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</x-app-layout>

<!-- CSS -->
<style>
    /* Ensure spacing is consistent throughout */
    .btn {
        padding: 10px 24px;
        font-size: 14px;
        border-radius: 8px;
    }

    .btn:hover {
        transition: background-color 0.3s ease-in-out;
    }

    .text-lg {
        font-size: 1.125rem;
    }

    .text-xl {
        font-size: 1.25rem;
    }

    .font-bold {
        font-weight: 700;
    }

    /* Additional spacing for content sections */
    .mb-4 {
        margin-bottom: 1rem;
    }

    .mb-6 {
        margin-bottom: 1.5rem;
    }

    .mb-8 {
        margin-bottom: 2rem;
    }

    .pb-4 {
        padding-bottom: 1rem;
    }

    .pb-6 {
        padding-bottom: 1.5rem;
    }

    .space-x-4 > * {
        margin-right: 1rem;
    }

    /* Align table contents more appropriately */
    table td,
    table th {
        padding: 12px;
        text-align: left;
    }

    /* Responsive tables with sufficient spacing */
    table {
        width: 100%;
        margin-top: 1rem;
        margin-bottom: 1rem;
    }

    /* Adjust button padding and spacing */
    
</style>
