<x-app-layout>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Research Grants') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="p-6 text-gray-900 dark:text-gray-100">
            <!-- Add Research Grant Button -->
            <a href="{{ route('researchGrants.create') }}" class="btn btn-primary mb-4 inline-block px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
                Add Research Grant
            </a>

            <!-- Research Grants Table -->
            <table class="min-w-full table-auto bg-gray-50 dark:bg-gray-700 rounded-lg shadow-md overflow-hidden">
                <thead>
                    <tr class="bg-green-200 dark:bg-green-600 text-left text-sm text-gray-800 dark:text-gray-300">
                        <th class="px-6 py-3">Project Title</th>
                        <th class="px-6 py-3">Project Leader</th>
                        <th class="px-6 py-3">Grant Amount</th>
                        <th class="px-6 py-3">Start Date</th>
                        <th class="px-6 py-3">Duration (Months)</th>
                        <th class="px-6 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($researchGrants as $grant)
                        <tr class="bg-white dark:bg-gray-800">
                            <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">{{ $grant->project_title }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">{{ $grant->projectLeader->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">${{ number_format($grant->grant_amount, 2) }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">{{ \Carbon\Carbon::parse($grant->start_date)->format('M d, Y') }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">{{ $grant->duration_months }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200 flex space-x-8">
                                <!-- View Icon -->
                                <a href="{{ route('researchGrants.show', $grant->id) }}" class="text-green-600 hover:text-green-800">
                                    <i class="fas fa-eye text-xl"></i> <!-- Eye icon for view -->
                                </a>

                                <!-- Edit Icon -->
                                <a href="{{ route('researchGrants.edit', $grant->id) }}" class="text-yellow-600 hover:text-yellow-800">
                                    <i class="fas fa-edit text-xl"></i> <!-- Edit icon -->
                                </a>

                                <!-- Delete Icon -->
                                <form action="{{ route('researchGrants.destroy', $grant->id) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Are you sure?')">
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
