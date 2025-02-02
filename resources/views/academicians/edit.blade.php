<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Academician') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('academicians.update', $academician->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-4">
                            <label for="name" class="block font-medium text-sm text-white">Name</label>
                            <input type="text" name="name" id="name" value="{{ $academician->name }}" class="form-input rounded-md shadow-sm mt-1 block w-full bg-blue-100 text-black" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="staff_number" class="block font-medium text-sm text-white">Staff Number</label>
                            <input type="text" name="staff_number" id="staff_number" value="{{ $academician->staff_number }}" class="form-input rounded-md shadow-sm mt-1 block w-full bg-blue-100 text-black" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="email" class="block font-medium text-sm text-white">Email</label>
                            <input type="email" name="email" id="email" value="{{ $academician->email }}" class="form-input rounded-md shadow-sm mt-1 block w-full bg-blue-100 text-black" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="college" class="block font-medium text-sm text-white">College</label>
                            <input type="text" name="college" id="college" value="{{ $academician->college }}" class="form-input rounded-md shadow-sm mt-1 block w-full bg-blue-100 text-black" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="department" class="block font-medium text-sm text-white">Department</label>
                            <input type="text" name="department" id="department" value="{{ $academician->department }}" class="form-input rounded-md shadow-sm mt-1 block w-full bg-blue-100 text-black" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="position" class="block font-medium text-sm text-white">Position</label>
                            <select name="position" id="position" class="form-select rounded-md shadow-sm mt-1 block w-full bg-blue-100 text-black" required>
                                <option value="Professor" {{ $academician->position == 'Professor' ? 'selected' : '' }}>Professor</option>
                                <option value="Associate Professor" {{ $academician->position == 'Associate Professor' ? 'selected' : '' }}>Associate Professor</option>
                                <option value="Senior Lecturer" {{ $academician->position == 'Senior Lecturer' ? 'selected' : '' }}>Senior Lecturer</option>
                                <option value="Lecturer" {{ $academician->position == 'Lecturer' ? 'selected' : '' }}>Lecturer</option>
                            </select>
                        </div>
                        
                        <div class="mb-4">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg shadow-md">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>