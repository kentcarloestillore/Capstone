@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-md mt-8">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Create Confirmation Record</h2>
        <form action="/register/confirmation/sponsor" method="POST" class="space-y-6">
            @csrf

            <!-- Fullname -->
            <div class="flex flex-col">
                <label for="fullname" class="text-sm font-medium text-gray-700 mb-1">Fullname</label>
                <input type="text" id="fullname" name="fullname" class="form-input border-gray-300 rounded-lg p-2 focus:border-indigo-500 focus:ring-indigo-500" required>
            </div>

            <!-- Confirmation ID -->
            <div class="flex flex-col">
                <label for="confirmation_id" class="text-sm font-medium text-gray-700 mb-1">Confirmation ID</label>
                <input type="number" id="confirmation_id" name="confirmation_id" class="form-input border-gray-300 rounded-lg p-2 focus:border-indigo-500 focus:ring-indigo-500" required>
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
