@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-md mt-8">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Create Baptismal Record</h2>
        <form action="/register/baptismal/godparent" method="POST" class="space-y-6">
            @csrf

            <!-- Fullname -->
            <div class="flex flex-col">
                <label for="fullname" class="text-sm font-medium text-gray-700 mb-1">Fullname</label>
                <input type="text" id="fullname" name="fullname" class="form-input border-gray-300 rounded-lg p-2 focus:border-indigo-500 focus:ring-indigo-500" required>
            </div>

            <!-- Baptismal ID -->
            <div class="flex flex-col">
                <label for="baptismal_id" class="text-sm font-medium text-gray-700 mb-1">Baptismal ID</label>
                <input type="number" id="baptismal_id" name="baptismal_id" class="form-input border-gray-300 rounded-lg p-2 focus:border-indigo-500 focus:ring-indigo-500" required>
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
