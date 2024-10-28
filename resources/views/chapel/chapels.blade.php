@extends('layouts.app')

@section('content')
    <div class="header flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Chapels
        </h2>
        {{-- <div class="flex border border-gray-300 rounded-full w-max overflow-hidden">
            <form class="flex"
                hx-get="/users/{{ Auth::user()->church->id }}"
                hx-swap="innerHTML"
                hx-trigger="keyup, submit, change"
                hx-target="#table">
                <select id="field" name="field" required class="p-2 px-4 border-0 outline-none w-40">
                    <option value="name">by name</option>
                    <option value="username">by username</option>
                </select>
                <div class="border-l border-gray-300"></div>
                <input type="text" name="filter" placeholder="Search..." class="py-2 px-6 border-0 outline-none" autocomplete="off">
            </form>
        </div> --}}
    </div>

    <div class="mt-2">
        <a href="/chapel/create">
            <button class="bg-teal-950 text-white text-center p-2 rounded w-20">+Add</button>
        </a>
    </div>

    @include('chapel.chapel-list', ['chapels' => $chapels])

@endsection
