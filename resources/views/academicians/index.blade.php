<x-app-layout>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Academicians') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="p-6 text-gray-900 dark:text-gray-100">

            <!-- Add Academician Button -->
            <div class="flex justify-end mb-4">
                <a href="{{ route('academicians.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded shadow">
                    Add Academician
                </a>
            </div>

            <!-- Table for Academicians -->
            <table class="min-w-full table-auto bg-gray-100 dark:bg-gray-700 rounded-lg shadow-md overflow-hidden">
                <thead>
                    <tr class="bg-blue-200 dark:bg-blue-600 text-left text-sm text-gray-700 dark:text-gray-300">
                        <th class="px-6 py-3">Name</th>
                        <th class="px-6 py-3">Staff Number</th>
                        <th class="px-6 py-3">Email</th>
                        <th class="px-6 py-3">College</th>
                        <th class="px-6 py-3">Department</th>
                        <th class="px-6 py-3">Position</th>
                        <th class="px-6 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($academicians as $academician)
                    <tr class="bg-white dark:bg-gray-800">
                        <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">{{ $academician->name }}</td>
                        <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">{{ $academician->staff_number }}</td>
                        <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">{{ $academician->email }}</td>
                        <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">{{ $academician->college }}</td>
                        <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">{{ $academician->department }}</td>
                        <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">{{ $academician->position }}</td>
                        <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200 flex space-x-8">
                            <!-- View Icon -->
                            <a href="{{ route('academicians.show', $academician->id) }}" class="text-blue-600 hover:text-blue-800">
                                <i class="fas fa-eye text-xl"></i> <!-- Eye icon for view -->
                            </a>

                            <!-- Edit Icon -->
                            <a href="{{ route('academicians.edit', $academician->id) }}" class="text-yellow-600 hover:text-yellow-800">
                                <i class="fas fa-edit text-xl"></i> <!-- Edit icon -->
                            </a>

                            <!-- Delete Icon -->
                            <form action="{{ route('academicians.destroy', $academician->id) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Are you sure?')">
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
</x-app-layout>

<!-- CSS -->
<style>
    /* Ensure spacing is consistent throughout */
    .btn {
    padding: 10px 24px;
    font-size: 14px;
    border-radius: 8px;
    float: right;
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
