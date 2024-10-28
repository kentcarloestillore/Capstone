@extends('layouts.app')

@section('content')
    <div class="header flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Cluster>Create
        </h2>
    </div>

    <div class="max-w-2xl mx-auto mt-10 bg-white p-8 shadow-md rounded-lg">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Create Cluster</h2>
        <form action="/cluster/create" method="POST" class="space-y-4">
            @csrf

            <!-- Cluster Number -->
            <div class="w-full">
                <label for="cluster_number" class="text-gray-700 font-medium mb-2">Cluster Number:</label>
                <input type="text" name="cluster_number" id="cluster_number" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" >
            </div>

            <!-- Cluster_leader -->
            <div class="flex flex-col">
                <label for="cluster_leader" class="text-gray-700 font-medium mb-2">Cluster_leader:</label>
                <input type="text" id="cluster_leader" name="cluster_leader" required class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
            </div>

            <!-- Chapel -->
            <div class="flex flex-col">
                <label for="chapel_id" class="text-gray-700 font-medium mb-2">Chapel:</label>
                <select name="chapel_id" id="chapel_id" class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm p-2">
                    @foreach ( $chapels as $chapel)
                        <option value="{{ $chapel->id }}">{{ $chapel->name_of_chapel }} - {{ $chapel->address }}</option>
                    @endforeach
                </select>
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
