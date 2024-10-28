@extends('layouts.app')

@section('content')
    <div class="header flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Receipts>Pamisa>Create
        </h2>
    </div>

    <div class="max-w-2xl mx-auto mt-10 bg-white p-8 shadow-md rounded-lg">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Pamisa Form</h2>
        <form action="/pamisa/create" method="POST" class="space-y-6">
            @csrf
            @method('POST')

            <!-- name -->
            <div class="mb-4">
                <label for="name" class="block mb-2">Name</label>
                <input type="text" id="name" class="w-full p-2 border border-gray-300 rounded" name="name">
            </div>

            <!-- prayer_intention -->
            <div class="mb-4">
                <label for="prayer_intention" class="block mb-2">Prayer Intention</label>
                <input type="text" id="prayer_intention" class="w-full p-2 border border-gray-300 rounded" name="prayer_intention">
            </div>

            <!-- prayer_intention_to -->
            <div class="mb-4">
                <label for="prayer_intention_to" class="block mb-2">Prayer Intention To</label>
                <input type="text" id="prayer_intention_to" class="w-full p-2 border border-gray-300 rounded" name="prayer_intention_to">
            </div>

            <!-- date -->
            <div class="mb-4">
                <label for="date" class="block mb-2">Date</label>
                <input type="date" id="date" class="w-full p-2 border border-gray-300 rounded" name="date">
            </div>

            <!-- mass_schedule -->
            <div class="mb-4">
                <label for="mass_schedule" class="block mb-2">Mass Schedule</label>
                <input type="string" id="mass_schedule" class="w-full p-2 border border-gray-300 rounded" name="mass_schedule">
            </div>

            <!-- receipt -->
            <div class="hidden">
                <label for="receipt_id" class="block text-sm font-medium text-gray-700">Receipt</label>
                <input type="number" name="receipt_id" id="receipt_id" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" value="{{$receipt_id}}">
            </div>

            <!-- church -->
            <div class="hidden">
                <label for="church_id" class="block text-sm font-medium text-gray-700">Church</label>
                <input type="number" name="church_id" id="church_id" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" value="{{ Auth::user()->church->id }}">
            </div>

            <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Submit
            </button>
        </form>
    </div>

@endsection

