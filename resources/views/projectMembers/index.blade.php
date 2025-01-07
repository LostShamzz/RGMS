<x-app-layout>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Project Members') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                
                <!-- Add/Update Project Member Button -->
                <!-- Add/Update Project Member Button -->
<a href="{{ route('projectMembers.create') }}" class="btn bg-black text-white hover:bg-gray-800 mb-8 px-6 py-3 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-black">
    Add/Update Project Member
</a>
                <!-- Loop through Research Grants -->
                @forelse($researchGrants as $grant)
                    <div class="mb-8">
                        <h3 class="text-lg font-medium text-orange-500 mb-4">  <!-- Added margin-bottom to label -->
                            <span class="font-semibold text-white">Grant:</span>
                            <a href="{{ route('researchGrants.show', $grant->id) }}" class="hover:text-indigo-500">
                                {{ $grant->project_title }}
                            </a>
                        </h3>

                        <!-- Project Leader -->
                        <div class="mb-6">
                            <strong class="text-lg text-white">Project Leader:</strong>
                            <span class="text-lg font-bold text-yellow-500">{{ $grant->projectLeader->name }}</span>
                        </div>

                        <!-- Project Members Table -->
                        @if($grant->projectMembers->where('id', '!=', $grant->projectLeader->id)->count() > 0)
                            <table class="min-w-full table-auto bg-gray-100 dark:bg-gray-700 rounded-lg shadow-md overflow-hidden">
                                <thead>
                                    <tr class="bg-orange-200 dark:bg-orange-800 text-left text-sm text-gray-700 dark:text-gray-300">
                                        <th class="px-6 py-4">Name</th>
                                        <th class="px-6 py-4">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($grant->projectMembers as $member)
                                        @if ($member->id != $grant->projectLeader->id) <!-- Exclude project leader -->
                                            <tr class="bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900">
                                                <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">{{ $member->name }}</td>
                                                <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                    <div class="flex space-x-4">
                                                        <!-- Edit Icon -->
                                                        <a href="{{ route('academicians.edit', $member->id) }}" class="text-blue-500 hover:text-blue-700">
                                                            <i class="fas fa-edit text-xl"></i> <!-- Edit icon -->
                                                        </a>

                                                        <!-- Delete Icon -->
                                                        <form action="{{ route('projectMembers.destroy', $member->pivot->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this member?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="text-red-500 hover:text-red-700">
                                                                <i class="fas fa-trash-alt text-xl"></i> <!-- Trash icon for delete -->
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p class="text-sm text-gray-500 dark:text-gray-400">No project members added yet.</p>
                        @endif
                    </div>
                @empty
                    <p class="text-sm text-gray-500 dark:text-gray-400">No research grants available.</p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>

<!-- CSS Styles -->
<style>
    /* Button styling */
    .btn {
    padding: 10px 24px;
    font-size: 14px;
    border-radius: 8px;
    display: inline-block;  /* Ensures the button aligns itself within the container */
    margin-left: 0;  /* Align the button to the left */
    margin-right: auto;  /* Ensures the button stays on the left side */
}

    .btn:hover {
        transition: background-color 0.3s ease-in-out;
    }

    /* Spacing for various sections */
    .mb-4 {
        margin-bottom: 1rem;
    }

    .mb-6 {
        margin-bottom: 1.5rem;
    }

    .mb-8 {
        margin-bottom: 2rem;
    }

    /* Table styling */
    table td,
    table th {
        padding: 12px;
        text-align: left;
    }

    table {
        width: 100%;
        margin-top: 1rem;
        margin-bottom: 1rem;
    }

    /* Responsive and better spacing */
    .space-x-4 > * {
        margin-right: 1rem;
    }

    /* Hover effects for table rows */
    .table-auto tr:hover {
        background-color: #f5f5f5;
    }
</style>
