@extends('layouts.app')

@section('content')
    <div class="max-w-full mx-auto p-6 bg-white rounded-lg shadow-md mt-8">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Create Baptismal Record</h2>
        <form action="/register/baptismal/create" method="POST" class="space-y-4">
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


            <!-- Fullname -->
            <div class="flex justify-between gap-4">
                <div class="flex flex-col w-full">
                    <label for="fullname" class="text-gray-700 font-medium mb-2">Lastname:</label>
                    <input type="text" id="fullname" name="fullname" required class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
                </div>
                <div class="flex flex-col w-full">
                    <label for="fullname" class="text-gray-700 font-medium mb-2">Firstname:</label>
                    <input type="text" id="fullname" name="fullname" required class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
                </div>
                <div class="flex flex-col w-48">
                    <label for="fullname" class="text-gray-700 font-medium mb-2">Middlename:</label>
                    <input type="text" id="fullname" name="fullname" required class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
                </div>
            </div>

            <!-- Residence -->
            <div class="flex justify-between gap-4">
                <div class="flex flex-col w-full">
                    <label for="residence" class="text-gray-700 font-medium mb-2">Barangay:</label>
                    <input type="text" id="residence" name="residence" required class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
                </div>
                <div class="flex flex-col w-full">
                    <label for="residence" class="text-gray-700 font-medium mb-2">Municipal/City:</label>
                    <input type="text" id="residence" name="residence" required class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
                </div>
                <div class="flex flex-col w-full">
                    <label for="residence" class="text-gray-700 font-medium mb-2">Province:</label>
                    <input type="text" id="residence" name="residence" required class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
                </div>
            </div>
            
            <!-- Place of Birth -->
            <div class="flex flex-col">
                <label for="place_of_birth" class="text-gray-700 font-medium mb-2">Place of Birth:</label>
                <input type="text" id="place_of_birth" name="place_of_birth" required class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
            </div>

            <div class="flex justify-between gap-4">
                <!-- Date of Birth -->
                <div class="flex flex-col w-full">
                    <label for="date_of_birth" class="text-gray-700 font-medium mb-2">Date of Birth:</label>
                    <input type="date" id="date_of_birth" name="date_of_birth" required class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
                </div>
                
                <!-- Sex -->
                <div class="flex flex-col w-48">
                    <label for="sex" class="text-gray-700 font-medium mb-2">Sex:</label>
                    <select id="sex" name="sex" required class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm p-2">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
    
                <!-- Citizenship -->
                <div class="flex flex-col">
                    <label for="citizenship" class="text-gray-700 font-medium mb-2">Citizenship:</label>
                    <input type="text" id="citizenship" name="citizenship" required class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
                </div>

            </div>



            <!-- Name of Father -->
            <div class="flex flex-col">
                <label for="name_of_father" class="text-gray-700 font-medium mb-2">Name of Father:</label>
                <input type="text" id="name_of_father" name="name_of_father" required class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
            </div>

            <!-- Name of Mother -->
            <div class="flex flex-col">
                <label for="name_of_mother" class="text-gray-700 font-medium mb-2">Name of Mother:</label>
                <input type="text" id="name_of_mother" name="name_of_mother" required class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
            </div>

            <!-- Officiating Clergy -->
            <div>
                <label for="officiating_clergy" class="block text-sm font-medium text-gray-700">Officiating Clergy</label>
                <input type="text" name="officiating_clergy" id="officiating_clergy" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" >
            </div>

            <!-- Date of Baptism -->
            <div>
                <label for="date_of_baptism" class="block text-sm font-medium text-gray-700">Date of Baptism</label>
                <input type="date" name="date_of_baptism" id="date_of_baptism" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" >
            </div>

            <!-- Church ID -->
            <div class="hidden">
                <label for="church_id" class="block text-sm font-medium text-gray-700">Church ID</label>
                <input type="number" name="church_id" id="church_id" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"  value="{{ Auth::user()->church->id }}">
            </div>

            <!-- Place of Baptism -->
            <div>
                <label for="place_of_baptism" class="block text-sm font-medium text-gray-700">Place of Baptism</label>
                <input type="text" name="place_of_baptism" id="place_of_baptism" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" >
            </div>

            <!-- Button to add another Godparent input -->
            <!-- Godparents -->
            <div id="godparents-container">
                <div class="flex items-center gap-2">
                    <label for="godparent" class="block text-sm font-medium text-gray-700">Godparent</label>
                    <button type="button" id="add-godparent" class=" bg-blue-500 text-white rounded px-2">+</button>
                </div>
                <input type="text" name="godparents[]" id="godparent" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" >
            </div>

            <!-- Submit Button -->
            <div class="text-right">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Save Record
                </button>
            </div>
        </form>
    </div>

    <script>
        // Get the container where we want to add new godparent fields
        const container = document.getElementById('godparents-container');
        const addButton = document.getElementById('add-godparent');

        // Event listener for the button click
        addButton.addEventListener('click', function() {
            // Create a new div to hold the label and input field
            const newGodparentDiv = document.createElement('div');

            // Add some spacing before the new input
            newGodparentDiv.classList.add('mt-4');

            // Create a label
            const newLabel = document.createElement('label');
            newLabel.textContent = 'Godparent';
            newLabel.classList.add('block', 'text-sm', 'font-medium', 'text-gray-700');

            // Create an input field
            const newInput = document.createElement('input');
            newInput.type = 'text';
            newInput.name = 'godparents[]';
            newInput.classList.add('mt-1', 'block', 'w-full', 'p-2', 'border', 'border-gray-300', 'rounded-md', 'focus:ring-blue-500', 'focus:border-blue-500');

            // Append the label and input to the new div
            newGodparentDiv.appendChild(newLabel);
            newGodparentDiv.appendChild(newInput);

            // Append the new div to the container
            container.appendChild(newGodparentDiv);
        });
    </script>
@endsection