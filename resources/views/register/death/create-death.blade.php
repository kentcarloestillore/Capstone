@extends('layouts.app')

@section('content')
    <div class="max-w-full mx-auto p-6 bg-white rounded-lg shadow-md mt-8">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Create Death Record</h2>
        <form action="/register/death/create" method="POST" class="space-y-6">
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

            <!-- Name Of Clergy -->
            <div>
                <label for="name_of_clergy" class="block text-sm font-medium text-gray-700">Name Of Clergy</label>
                <input type="text" name="name_of_clergy" id="name_of_clergy" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" >
            </div>

            <!-- Partner's Name -->
            <div>
                <label for="partner_name" class="block text-sm font-medium text-gray-700">Partner's Name</label>
                <input type="text" name="partner_name" id="partner_name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" >
            </div>

            <!-- Church ID -->
            <div class="hidden">
                <label for="church_id" class="block text-sm font-medium text-gray-700">Church ID</label>
                <input type="number" name="church_id" id="church_id" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"  value="{{ Auth::user()->church->id }}">
            </div>

            <!-- Date Of Death -->
            <div>
                <label for="date_of_death" class="block text-sm font-medium text-gray-700">Date Of Death</label>
                <input type="date" name="date_of_death" id="date_of_death" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" >
            </div>

            <!-- Date Of Burial -->
            <div>
                <label for="date_of_burial" class="block text-sm font-medium text-gray-700">Date Of Burial</label>
                <input type="date" name="date_of_burial" id="date_of_burial" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" >
            </div>

            <!-- Cause of Death -->
            <div>
                <label for="cause_of_death" class="block text-sm font-medium text-gray-700">Cause of Death</label>
                <input type="text" name="cause_of_death" id="cause_of_death" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" >
            </div>

            <!-- Name Of Cemetery -->
            <div>
                <label for="name_of_cemetery" class="block text-sm font-medium text-gray-700">Name Of Cemetery</label>
                <input type="text" name="name_of_cemetery" id="name_of_cemetery" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" >
            </div>

            <div>
                <label for="received_any_sacrament" class="block text-sm font-medium text-gray-700">Received Any Sacrament Before Death (Confession etc..)</label>
                <!-- Hidden field to send 0 if checkbox is not checked -->
                <input type="hidden" name="received_any_sacrament" value="0">
                <input type="checkbox" id="received_any_sacrament" name="received_any_sacrament" value="1" class="mt-1 block p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 w-6 h-6">
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Submit
                </button>
            </div>
        </form>
    </div>
@endsection
