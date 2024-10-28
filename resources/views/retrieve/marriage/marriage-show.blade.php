@extends('layouts.app')

@section('content')
    <div class="header flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Register>Marriage>
        </h2>
        <div class="">

        </div>
    </div>

    <div class="bg-gray-200 p-4 rounded-lg mt-4">
        <div class="border border-gray-300 rounded-lg bg-white">
            <!-- Header -->
            <div class="p-2 bg-gray-300 rounded-t-lg font-bold">
                Personal Information
            </div>

            <div class="p-4">
                <!-- Main Table with Personal Information -->
                <table class="w-full text-left border-collapse">
                    <tr>
                        <td class="border p-2 font-semibold" colspan="2">
                            BOOK_NO:{{$marriage->book_number}}/PAGE_NO:{{$marriage->page_number}}/SERIAL_NO:{{$marriage->serial_number}}
                        </td>
                    </tr>
                    <tr>
                        <th class="border p-2 font-bold bg-gray-50">Husband</th>
                        <th class="border p-2 font-bold bg-gray-50">Wife</th>
                    </tr>
                    <tr>
                        <td class="border p-2">
                            <div class="mb-2"><strong>Name:</strong> {{$marriage->husband->fullname}}</div>
                        </td>
                        <td class="border p-2">
                            <div class="mb-2"><strong>Name:</strong> {{$marriage->wife->fullname}}</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="border p-2">
                            <div class="mb-2"><strong>Address:</strong> {{$marriage->husband->residence}}</div>
                        </td>
                        <td class="border p-2">
                            <div class="mb-2"><strong>Address:</strong> {{$marriage->wife->residence}}</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="border p-2">
                            <div class="mb-2"><strong>Date of Birth:</strong> {{$marriage->husband->date_of_birth}}</div>
                        </td>
                        <td class="border p-2">
                            <div class="mb-2"><strong>Date of Birth:</strong> {{$marriage->wife->date_of_birth}}</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="border p-2">
                            <div class="mb-2"><strong>Place of Birth:</strong> {{$marriage->husband->place_of_birth}}</div>
                        </td>
                        <td class="border p-2">
                            <div class="mb-2"><strong>Place of Birth:</strong> {{$marriage->wife->place_of_birth}}</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="border p-2">
                            <div class="mb-2"><strong>Date of Marriage:</strong> {{$marriage->date_of_marriage}}</div>
                        </td>
                        <td class="border p-2">
                            <div class="mb-2"><strong>Date of Marriage:</strong> {{$marriage->date_of_marriage}}</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="border p-2">
                            <div class="mb-2"><strong>Venue:</strong> {{$marriage->church->name_of_church}}</div>
                        </td>
                        <td class="border p-2">
                            <div class="mb-2"><strong>Venue:</strong> {{$marriage->church->name_of_church}}</div>
                        </td>
                    </tr>
                </table>

                <!-- Parents and Sponsors Table -->
                <table class="w-full mt-4 text-left border-collapse">
                    <tr>
                        <th class="border p-2 bg-gray-100 w-1/2">Parents</th>
                        <th class="border p-2 bg-gray-100 w-1/2">Sponsors</th>
                    </tr>
                    <tr>
                        <td class="border">
                            <div class="p-2 font-semibold pb-0">Name of Husband’s Father:</div>
                            <div class="p-2 pt-0">{{$marriage->husband->name_of_father}}</div>
                            <hr class="">
                            <div class="p-2 font-semibold pb-0">Name of Husband’s Mother:</div>
                            <div class="p-2 pt-0">{{$marriage->husband->name_of_mother}}</div>
                            <hr class="">
                            <div class="p-2 font-semibold pb-0">Name of Wife’s Father:</div>
                            <div class="p-2 pt-0">{{$marriage->wife->name_of_father}}</div>
                            <hr class="">
                            <div class="p-2 font-semibold pb-0">Name of Wife’s Mother: </div>
                            <div class="p-2 pt-0">{{$marriage->wife->name_of_mother}}</div>
                        </td>
                        <td class="border p-2">
                            <div class="max-h-40 overflow-auto">
                                @foreach ($marriage->sponsors as $index => $sponsor)
                                    <div class="p-2">{{ $index + 1 }}. {{ $sponsor->fullname }}</div>
                                @endforeach
                            </div>
                        </td>
                    </tr>
                </table>

                <!-- Action Buttons -->
                <div class="mt-4 flex justify-end">
                    <a href="/retrieve/marriages" class="bg-gray-500 text-white py-2 px-4 rounded mr-2">
                        Back
                    </a>
                    <a href="/retrieve/marriage/pdf/{{ $marriage->id}}" class="bg-blue-500 text-white py-2 px-4 rounded">
                        Export PDF
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
