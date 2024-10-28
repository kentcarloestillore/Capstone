@extends('layouts.app')

@section('content')
    <div class="header flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Retrieve>Baptismal
        </h2>
        <div class="flex border border-gray-300 rounded-full w-max overflow-hidden">
            <form class="flex"
                hx-get="/api/baptismals"
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

    {{-- need ug mas readable nga code --}}
    <div id="table"
        hx-get="/api/baptismals"
        hx-trigger="load"
        hx-swap="innerHTML">
        {{-- <table class="min-w-3/5 bg-white shadow-md rounded-lg mt-3 mx-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Fullname</th>
                    <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Address</th>
                    <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Sex</th>
                    <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Birthdate</th>
                    <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Date of Baptism</th>
                    <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Action</th>
                </tr>
            </thead>
            <tbody id="baptismalTableList">
                @foreach ($baptismals as $baptismal)
                    <tr class="bg-gray-100 border-b border-gray-200">
                        <td class="px-4 py-2">{{ $baptismal->parishioner->fullname }}</td>
                        <td class="px-4 py-2">{{ $baptismal->parishioner->residence }}</td>
                        <td class="px-4 py-2">{{ $baptismal->parishioner->sex }}</td>
                        <td class="px-4 py-2">{{ $baptismal->parishioner->date_of_birth }}</td>
                        <td class="px-4 py-2">{{ $baptismal->date_of_baptism }}</td>
                        <td class="px-4 py-2"><a href="/retrieve/baptismal/{{$baptismal->id}}">open</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table> --}}
    </div>
@endsection
