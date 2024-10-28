@extends('layouts.app')

@section('content')
    <div class="max-w-full mx-auto p-6 bg-white rounded-lg shadow-md mt-8">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Create Marriage Record</h2>
        <form action="/register/marriage/create" method="POST" class="space-y-6">
            @csrf

            <div class="flex gap-5">

                <!-- Book Number -->
                <div class="w-full">
                    <label for="book_number" class="block text-sm font-medium text-gray-700">Book Number</label>
                    <input type="text" name="book_number" id="book_number" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" >
                </div>

                <!-- Page Number -->
                <div class="w-full">
                    <label for="page_number" class="block text-sm font-medium text-gray-700">Page Number</label>
                    <input type="text" name="page_number" id="page_number" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" >
                </div>

                <!-- Serial Number -->
                <div class="w-full">
                    <label for="serial_number" class="block text-sm font-medium text-gray-700">Serial Number</label>
                    <input type="text" name="serial_number" id="serial_number" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" >
                </div>

            </div>

            <div class="flex w-full gap-10">

                <!-- Husband -->
                <div class="w-full space-y-4">

                    <h1 class="text-2xl font-bold">Husband</h1>

                    <!-- Fullname -->
                    <div class="flex flex-col">
                        <label for="fullname_husband" class="text-gray-700 font-medium mb-2">Full Name:</label>
                        <input type="text" id="fullname_husband" name="fullname_husband" required class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
                    </div>

                    <!-- Residence -->
                    <div class="flex flex-col">
                        <label for="residence_husband" class="text-gray-700 font-medium mb-2">Residence:</label>
                        <input type="text" id="residence_husband" name="residence_husband" required class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
                    </div>

                    <!-- Date of Birth -->
                    <div class="flex flex-col">
                        <label for="date_of_birth_husband" class="text-gray-700 font-medium mb-2">Date of Birth:</label>
                        <input type="date" id="date_of_birth_husband" name="date_of_birth_husband" required class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
                    </div>

                    <!-- Place of Birth -->
                    <div class="flex flex-col">
                        <label for="place_of_birth_husband" class="text-gray-700 font-medium mb-2">Place of Birth:</label>
                        <input type="text" id="place_of_birth_husband" name="place_of_birth_husband" required class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
                    </div>

                    <!-- Citizenship -->
                    <div class="flex flex-col">
                        <label for="citizenship_husband" class="text-gray-700 font-medium mb-2">Citizenship:</label>
                        <input type="text" id="citizenship_husband" name="citizenship_husband" required class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
                    </div>

                    <!-- Name of Father -->
                    <div class="flex flex-col">
                        <label for="name_of_father_husband" class="text-gray-700 font-medium mb-2">Name of Father:</label>
                        <input type="text" id="name_of_father_husband" name="name_of_father_husband" required class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
                    </div>

                    <!-- Name of Mother -->
                    <div class="flex flex-col">
                        <label for="name_of_mother_husband" class="text-gray-700 font-medium mb-2">Name of Mother:</label>
                        <input type="text" id="name_of_mother_husband" name="name_of_mother_husband" required class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
                    </div>
                </div>

                <!-- Wife -->
                <div class="w-full space-y-4">
                    <h1 class="text-2xl font-bold">Wife</h1>
                    <!-- Fullname -->
                    <div class="flex flex-col">
                        <label for="fullname_wife" class="text-gray-700 font-medium mb-2">Full Name:</label>
                        <input type="text" id="fullname_wife" name="fullname_wife" required class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
                    </div>

                    <!-- Residence -->
                    <div class="flex flex-col">
                        <label for="residence_wife" class="text-gray-700 font-medium mb-2">Residence:</label>
                        <input type="text" id="residence_wife" name="residence_wife" required class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
                    </div>

                    <!-- Date of Birth -->
                    <div class="flex flex-col">
                        <label for="date_of_birth_wife" class="text-gray-700 font-medium mb-2">Date of Birth:</label>
                        <input type="date" id="date_of_birth_wife" name="date_of_birth_wife" required class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
                    </div>

                    <!-- Place of Birth -->
                    <div class="flex flex-col">
                        <label for="place_of_birth_wife" class="text-gray-700 font-medium mb-2">Place of Birth:</label>
                        <input type="text" id="place_of_birth_wife" name="place_of_birth_wife" required class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
                    </div>

                    <!-- Citizenship -->
                    <div class="flex flex-col">
                        <label for="citizenship_wife" class="text-gray-700 font-medium mb-2">Citizenship:</label>
                        <input type="text" id="citizenship_wife" name="citizenship_wife" required class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
                    </div>

                    <!-- Name of Father -->
                    <div class="flex flex-col">
                        <label for="name_of_father_wife" class="text-gray-700 font-medium mb-2">Name of Father:</label>
                        <input type="text" id="name_of_father_wife" name="name_of_father_wife" required class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
                    </div>

                    <!-- Name of Mother -->
                    <div class="flex flex-col">
                        <label for="name_of_mother_wife" class="text-gray-700 font-medium mb-2">Name of Mother:</label>
                        <input type="text" id="name_of_mother_wife" name="name_of_mother_wife" required class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
                    </div>
                </div>
            </div>

            <!-- Church ID -->
            <div class="hidden">
                <label for="church_id" class="block text-sm font-medium text-gray-700">Church ID</label>
                <input type="number" name="church_id" id="church_id" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"  value="{{ Auth::user()->church->id }}">
            </div>

            <!-- Name of Clergy -->
            <div class="flex flex-col">
                <label for="name_of_clergy" class="text-sm font-medium text-gray-700 mb-1">Name of Clergy</label>
                <input type="text" id="name_of_clergy" name="name_of_clergy" class="form-input border-gray-300 rounded-lg p-2 focus:border-indigo-500 focus:ring-indigo-500" required>
            </div>

            <!-- Date of Marriage -->
            <div class="flex flex-col">
                <label for="date_of_marriage" class="text-sm font-medium text-gray-700 mb-1">Date of Marriage</label>
                <input type="date" id="date_of_marriage" name="date_of_marriage" class="form-input border-gray-300 rounded-lg p-2 focus:border-indigo-500 focus:ring-indigo-500" required>
            </div>

            <!-- Place of Marriage -->
            <div class="flex flex-col">
                <label for="place_of_marriage" class="text-sm font-medium text-gray-700 mb-1">Place of Marriage</label>
                <input type="text" id="place_of_marriage" name="place_of_marriage" class="form-input border-gray-300 rounded-lg p-2 focus:border-indigo-500 focus:ring-indigo-500" required>
            </div>

            <!-- Name of Church -->
            <div class="flex flex-col">
                <label for="name_of_church" class="text-sm font-medium text-gray-700 mb-1">Name of Church</label>
                <input type="text" id="name_of_church" name="name_of_church" class="form-input border-gray-300 rounded-lg p-2 focus:border-indigo-500 focus:ring-indigo-500" required>
            </div>

            <!-- Sponsors -->
            <div id="sponsors-container">
                <div class="flex items-center gap-2">
                    <label for="sponsor" class="block text-sm font-medium text-gray-700">Sponsor</label>
                    <button type="button" id="add-sponsor" class=" bg-blue-500 text-white rounded px-2">+</button>
                </div>
                <input type="text" name="sponsors[]" id="sponsor" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" >
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Submit
                </button>
            </div>
        </form>
    </div>

    <script>
        // Get the container where we want to add new sponsor fields
        const container = document.getElementById('sponsors-container');
        const addButton = document.getElementById('add-sponsor');

        // Event listener for the button click
        addButton.addEventListener('click', function() {
            // Create a new div to hold the label and input field
            const newSponsorDiv = document.createElement('div');

            // Add some spacing before the new input
            newSponsorDiv.classList.add('mt-4');

            // Create a label
            const newLabel = document.createElement('label');
            newLabel.textContent = 'Sponsor';
            newLabel.classList.add('block', 'text-sm', 'font-medium', 'text-gray-700');

            // Create an input field
            const newInput = document.createElement('input');
            newInput.type = 'text';
            newInput.name = 'sponsors[]';
            newInput.classList.add('mt-1', 'block', 'w-full', 'p-2', 'border', 'border-gray-300', 'rounded-md', 'focus:ring-blue-500', 'focus:border-blue-500');

            // Append the label and input to the new div
            newSponsorDiv.appendChild(newLabel);
            newSponsorDiv.appendChild(newInput);

            // Append the new div to the container
            container.appendChild(newSponsorDiv);
        });
    </script>
@endsection
