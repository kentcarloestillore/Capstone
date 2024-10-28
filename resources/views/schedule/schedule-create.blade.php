@extends('layouts.app')

@section('content')
    <div class="header flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Schedule>Create
        </h2>
    </div>

    <div class="max-w-2xl mx-auto mt-10 bg-white p-8 shadow-md rounded-lg">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Schedule Form</h2>
        <form action="/schedule/create" method="POST" class="space-y-6">
            @csrf
            @method('POST')

            <!-- Date -->
            <div class="mb-4">
                <label for="date" class="block mb-2">Date</label>
                <input type="date" id="date" class="w-full p-2 border border-gray-300 rounded" name="date">
            </div>

            <!-- Description -->
            <div class="mb-4">
                <label for="description" class="block mb-2">Description</label>
                <input type="text" id="description" class="w-full p-2 border border-gray-300 rounded" name="description">
            </div>

            <!-- Time Start -->
            <div class="mb-4">
                <label for="time_start" class="block mb-2">Time Start</label>
                <input type="time" id="time_start" class="w-full p-2 border border-gray-300 rounded" name="time_start">
            </div>

            <!-- Time End -->
            <div class="mb-4">
                <label for="time_end" class="block mb-2">Time End</label>
                <input type="time" id="time_end" class="w-full p-2 border border-gray-300 rounded" name="time_end">
            </div>

            <!-- Church ID -->
            <div class="mb-4 hidden">
                <label for="church_id" class="block mb-2">Church ID</label>
                <input type="number" id="church_id" class="w-full p-2 border border-gray-300 rounded" name="church_id" value="{{ Auth::user()->church->id }}">
            </div>

            <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Submit
            </button>
        </form>
    </div>

@endsection
