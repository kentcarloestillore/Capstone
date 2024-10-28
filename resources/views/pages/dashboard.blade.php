@extends('layouts.app')

@section('content')
    <header name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Dashboard
        </h2>
    </header>

    <div class="py-12 flex justify-evenly">
        <div class="h-36 w-max-content bg-teal-950 rounded-lg p-3 flex justify-between">
            <img src="{{ asset('images/message-icon.svg') }}" alt="Your SVG" class="h-full w-full object-contain text-white">
            <div class="text-white text-center pl-2">
                <h1 class="text-2xl font-medium">Announcements</h1>
                <h1 class="text-3xl font-medium">1</h1>
            </div>
        </div>
        <div class="h-36 w-max-content bg-teal-950 rounded-lg p-3 flex justify-between">
            <img src="{{ asset('images/chapel-icon.svg') }}" alt="Your SVG" class="h-full w-full object-contain text-white">
            <div class="text-white text-center">
                <h1 class="text-3xl font-medium">Chapels</h1>
                <h1 class="text-3xl font-medium">15</h1>
            </div>
        </div>
        <div class="h-36 w-max-content bg-teal-950 rounded-lg p-3 flex justify-between">
            <img src="{{ asset('images/member-icon.svg') }}" alt="Your SVG" class="h-full w-full object-contain text-white">
            <div class="text-white text-center">
                <h1 class="text-3xl font-medium">Clusters</h1>
                <h1 class="text-3xl font-medium">202</h1>
            </div>
        </div>
    </div>
@endsection
