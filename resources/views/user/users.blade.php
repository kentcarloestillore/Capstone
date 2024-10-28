@extends('layouts.app')

@section('content')
    <div class="header flex justify-left">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Users
        </h2>
    </div>

    <div class="mt-2">
        <a href="/user/create">
            <button class="bg-teal-950 text-white text-center p-2 rounded w-20">+Add</button>
        </a>
    </div>

    <div class="">
        @include('user.users-list', ['users' => $users])
    </div>

@endsection
