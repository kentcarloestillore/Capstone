@extends('layouts.app')

@section('content')
    <div class="header flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Donations>
        </h2>
        <div class="flex border border-gray-300 rounded-full w-max overflow-hidden">
            <form class="flex"
                hx-get="/api/donations/{{ Auth::user()->church->id }}"
                hx-swap="innerHTML"
                hx-trigger="keyup, submit, change"
                hx-target="#table">
                <select id="field" name="field" required class="p-2 px-4 border-0 outline-none">
                    <option value="name">by name</option>
                    <option value="date">by date</option>
                </select>
                <div class="border-l border-gray-300"></div>
                <input type="text" name="filter" placeholder="Search..." class="py-2 px-6 border-0 outline-none" autocomplete="off">
            </form>
        </div>
    </div>

    <a href="/donation/create">
        <button class="bg-teal-950 text-white text-center p-2 rounded w-20">+Add</button>
    </a>

    <div id="table"
    hx-get="/api/donations/{{ Auth::user()->church->id }}"
    hx-trigger="load"
    hx-swap="innerHTML"
    class="w-full"></div>

@endsection