@extends('layouts.app')

@section('content')
    <div class="header flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            User>Create
        </h2>
    </div>

    <div class="max-w-2xl mx-auto mt-10 bg-white p-8 shadow-md rounded-lg">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Create User</h2>
        <form method="POST" action="/user/create">
            @csrf

            <!-- Name -->
            <div>
                <label for="name" class="block font-medium text-sm dark:text-gray-300">Name</label>
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Username -->
            <div class="mt-4">
                <label for="username" class="block font-medium text-sm dark:text-gray-300">Username</label>
                <x-text-input id="username" class="block mt-1 w-full p-2" type="text" name="username" :value="old('username')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('username')" class="mt-2" />
            </div>

            <!-- Church_id -->
            <div class="mt-4 hidden">
                <label for="church_id" class="block font-medium text-sm dark:text-gray-300">Church_id</label>
                <x-text-input id="church_id" class="block mt-1 w-full p-2" type="number" name="church_id" value="{{ Auth::user()->church->id }}" required autocomplete="church_id" />
                <x-input-error :messages="$errors->get('church_id')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password" class="block font-medium text-sm dark:text-gray-300">Password</label>

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <label for="password_confirmation" class="block font-medium text-sm dark:text-gray-300">Confirm Password</label>

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-primary-button class="ms-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>

@endsection
