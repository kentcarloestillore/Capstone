@extends('layouts.app')

@section('content')
    <div class="header flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Retrieve>Deaths
        </h2>
        <div class="flex border border-gray-300 rounded-full w-max overflow-hidden">
            <form class="flex"
                hx-get="/api/deaths"
                hx-swap="innerHTML"
                hx-trigger="keyup, submit, change"
                hx-target="#table">
                <select id="field" name="field" required class="p-2 px-4 border-0 outline-none">
                    <option value="fullname">by name</option>
                    <option value="date_of_birth">by birthdate</option>
                    <option value="residence">by address</option>
                    <option value="more">...more</option>
                </select>
                <div class="border-l border-gray-300"></div>
                <input type="text" name="filter" placeholder="Search..." class="py-2 px-6 border-0 outline-none" autocomplete="off">
            </form>
        </div>
    </div>

    <div id="table"
        hx-get="/api/deaths"
        hx-trigger="load delay:500ms"
        hx-swap="innerHTML">
    </div>
@endsection
