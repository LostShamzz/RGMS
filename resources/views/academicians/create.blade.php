<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Academician') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="p-6 text-gray-900 dark:text-gray-100">
            <form action="{{ route('academicians.store') }}" method="POST">
                @csrf

                <!-- User Dropdown -->
                <div class="mb-4">
                    <label for="name" class="block font-medium text-sm text-white">Name</label>
                    <select name="users_id" id="name" class="form-select rounded-md shadow-sm mt-1 block w-full bg-blue-100 text-black" required>
                        <option value="" disabled selected>Select a name</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}" data-email="{{ $user->email }}" data-name="{{ $user->name }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Selected Name Field -->
                <div class="mb-4">
                    <label for="selected_name" class="block font-medium text-sm text-white">Selected Name</label>
                    <input type="text" name="name" id="selected_name" class="form-input rounded-md shadow-sm mt-1 block w-full bg-blue-100 text-black" required readonly>
                </div>

                <!-- Email Field -->
                <div class="mb-4">
                    <label for="email" class="block font-medium text-sm text-white">Email</label>
                    <input type="email" name="email" id="email" class="form-input rounded-md shadow-sm mt-1 block w-full bg-blue-100 text-black" required readonly>
                </div>

                <!-- Staff Number Field -->
                <div class="mb-4">
                    <label for="staff_number" class="block font-medium text-sm text-white">Staff Number</label>
                    <input type="text" name="staff_number" id="staff_number" class="form-input rounded-md shadow-sm mt-1 block w-full bg-blue-100 text-black" required>
                </div>

                <!-- College Field -->
                <div class="mb-4">
                    <label for="college" class="block font-medium text-sm text-white">College</label>
                    <input type="text" name="college" id="college" class="form-input rounded-md shadow-sm mt-1 block w-full bg-blue-100 text-black" required>
                </div>

                <!-- Department Field -->
                <div class="mb-4">
                    <label for="department" class="block font-medium text-sm text-white">Department</label>
                    <input type="text" name="department" id="department" class="form-input rounded-md shadow-sm mt-1 block w-full bg-blue-100 text-black" required>
                </div>

                <!-- Position Dropdown -->
                <div class="mb-4">
                    <label for="position" class="block font-medium text-sm text-white">Position</label>
                    <select name="position" id="position" class="form-input rounded-md shadow-sm mt-1 block w-full bg-blue-100 text-black" required>
                        <option value="Professor">Professor</option>
                        <option value="Associate Professor">Associate Professor</option>
                        <option value="Senior Lecturer">Senior Lecturer</option>
                        <option value="Lecturer">Lecturer</option>
                    </select>
                </div>

                <!-- Submit Button -->
                <div class="mb-4">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded shadow">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- JavaScript to dynamically update name and email fields based on selected user -->
    <script>
        document.getElementById('name').addEventListener('change', function () {
            const selectedOption = this.options[this.selectedIndex];
            const name = selectedOption.getAttribute('data-name');
            const email = selectedOption.getAttribute('data-email');

            // Update name and email fields dynamically
            document.getElementById('selected_name').value = name;
            document.getElementById('email').value = email;
        });
    </script>
</x-app-layout>