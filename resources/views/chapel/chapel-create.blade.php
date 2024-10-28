@extends('layouts.app')

@section('content')
    <div class="header flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Chapel>Create
        </h2>
    </div>

    <div class="max-w-2xl mx-auto mt-10 bg-white p-8 shadow-md rounded-lg">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Create Chapel</h2>
        <form action="/chapel/create" method="POST" class="space-y-4">
            @csrf

            <!-- Name of Chapel -->
            <div class="w-full">
                <label for="name_of_chapel" class="text-gray-700 font-medium mb-2">Name of Chapel:</label>
                <input type="text" name="name_of_chapel" id="name_of_chapel" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" >
            </div>

            <!-- Address -->
            <div class="flex flex-col">
                <label for="address" class="text-gray-700 font-medium mb-2">Address:</label>
                <input type="text" id="address" name="address" required class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
            </div>

            <!-- Chapel Treasurer -->
            <div class="flex flex-col">
                <label for="chapel_treasurer" class="text-gray-700 font-medium mb-2">Treasurer:</label>
                <input type="text" id="chapel_treasurer" name="chapel_treasurer" required class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
            </div>

            <!-- Chapel Chairman -->
            <div class="flex flex-col">
                <label for="chapel_chairman" class="text-gray-700 font-medium mb-2">Chairman:</label>
                <input type="text" id="chapel_chairman" name="chapel_chairman" required class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
            </div>

            <!-- Submit Button -->
            <div class="text-right">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Save Record
                </button>
            </div>
        </form>
    </div>

@endsection
