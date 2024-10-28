@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-md mt-8">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Donation's Form</h2>
        <form action="/donation/create" method="POST" class="space-y-4">
            @csrf

            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" >
            </div>

            <!-- Date Donated -->
            <div>
                <label for="date_donated" class="block text-sm font-medium text-gray-700">Date</label>
                <input type="date" name="date_donated" id="date_donated" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" >
            </div>

            <!-- Amount -->
            <div>
                <label for="amount" class="block text-sm font-medium text-gray-700">Amount</label>
                <input type="number" name="amount" id="amount" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" step="0.1">
            </div>

            <!-- remarks -->
            <div>
                <label for="remarks" class="block text-sm font-medium text-gray-700">Remarks</label>
                <input type="text" name="remarks" id="remarks" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" >
            </div>

            <!-- church -->
            <div class="hidden">
                <label for="church_id" class="block text-sm font-medium text-gray-700">Church</label>
                <input type="number" name="church_id" id="church_id" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" value="{{ Auth::user()->church->id }}">
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
