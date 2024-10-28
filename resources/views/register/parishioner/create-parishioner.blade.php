@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto mt-10 bg-white p-8 shadow-md rounded-lg">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Parishioner's Information Form</h2>
        <form action="/register/parishioner/{{$type}}" method="POST" class="space-y-6">
            @csrf

            <!-- Fullname -->
            <div class="flex flex-col">
                <label for="fullname" class="text-gray-700 font-medium mb-2">Full Name:</label>
                <input type="text" id="fullname" name="fullname" required class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
            </div>

            <!-- Residence -->
            <div class="flex flex-col">
                <label for="residence" class="text-gray-700 font-medium mb-2">Residence:</label>
                <input type="text" id="residence" name="residence" required class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
            </div>

            <!-- Date of Birth -->
            <div class="flex flex-col">
                <label for="date_of_birth" class="text-gray-700 font-medium mb-2">Date of Birth:</label>
                <input type="date" id="date_of_birth" name="date_of_birth" required class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
            </div>

            <!-- Place of Birth -->
            <div class="flex flex-col">
                <label for="place_of_birth" class="text-gray-700 font-medium mb-2">Place of Birth:</label>
                <input type="text" id="place_of_birth" name="place_of_birth" required class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
            </div>

            <!-- Sex -->
            <div class="flex flex-col">
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

            {{-- <input type="hidden" id="church_id" name="church_id" required class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm" value="1"> --}}

            <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Submit
            </button>
        </form>
    </div>
@endsection
