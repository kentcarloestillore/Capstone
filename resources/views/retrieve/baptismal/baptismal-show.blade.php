@extends('layouts.app')

@section('content')
    <div class="header flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Register>Baptismal>
        </h2>
        <div class="">

        </div>
    </div>

    <div class="bg-gray-200 p-4 rounded-lg mt-4">
        <div class="border border-gray-300 rounded-lg bg-white">
            <div class="p-2 bg-gray-300 rounded-t-lg font-bold">
                Personal Information
            </div>

            <div class="p-4">
                <table class="w-full text-left border-collapse">
                    <tr>
                        <td class="border p-2 font-semibold" colspan="2">BOOK_NO:{{$baptismal->book_number}}/PAGE_NO:{{$baptismal->page_number}}/SERIAL_NO:{{$baptismal->serial_number}}</td>
                    </tr>
                    <tr>
                        <td class="border p-2 font-semibold max-w-12 min-w-16">Name</td>
                        <td class="border p-2">{{$baptismal->parishioner->fullname}}</td>
                    </tr>
                    <tr>
                        <td class="border p-2 font-semibold max-w-12 min-w-16">Address</td>
                        <td class="border p-2">{{$baptismal->parishioner->residence}}</td>
                    </tr>
                    <tr>
                        <td class="border p-2 font-semibold max-w-12 min-w-16">Date of Birth</td>
                        <td class="border p-2">{{$baptismal->parishioner->date_of_birth}}</td>
                    </tr>
                    <tr>
                        <td class="border p-2 font-semibold max-w-12 min-w-16">Place of Birth</td>
                        <td class="border p-2">{{$baptismal->parishioner->place_of_birth}}</td>
                    </tr>
                    <tr>
                        <td class="border p-2 font-semibold max-w-12 min-w-16">Officiating Priest</td>
                        <td class="border p-2">{{$baptismal->officiating_clergy}}</td>
                    </tr>
                    <tr>
                        <td class="border p-2 font-semibold max-w-12 min-w-16">Date of Baptism</td>
                        <td class="border p-2">{{$baptismal->date_of_baptism}}</td>
                    </tr>
                    <tr>
                        <td class="border p-2 font-semibold max-w-12 min-w-16">Sex</td>
                        <td class="border p-2">{{$baptismal->parishioner->sex}}</td>
                    </tr><tr>
                        <td class="border p-2 font-semibold max-w-12 min-w-16">Nationality</td>
                        <td class="border p-2">{{$baptismal->parishioner->citizenship}}</td>
                    </tr>
                    <tr>
                        <td class="border p-2 font-semibold max-w-12 min-w-16">Name of Church</td>
                        <td class="border p-2">{{$baptismal->church->name_of_church}}</td>
                    </tr>
                    <tr>
                        <td class="border p-2 font-semibold max-w-12 min-w-16">Place of Baptism</td>
                        <td class="border p-2">{{$baptismal->place_of_baptism}}</td>
                    </tr>
                </table>

                <table class="w-full mt-4 text-left border-collapse">
                    <tr>
                        <th class="border p-2 bg-gray-100 w-1/2">Parents</th>
                        <th class="border p-2 bg-gray-100 w-1/2">Godparents</th>
                    </tr>
                    <tr>
                        <td class="border w-1/2">
                            <div class="p-2 font-semibold">Name of Father</div>
                            <hr>
                            <div class="p-2">{{$baptismal->parishioner->name_of_father}}</div>
                            <hr>
                            <div class="p-2 font-semibold">Name of Mother</div>
                            <hr>
                            <div class="p-2">{{$baptismal->parishioner->name_of_mother}}</div>
                        </td>
                        <td class="border p-2 w-1/2">
                            <div class="max-h-40 overflow-auto">
                                @php
                                    $counter = 1;
                                @endphp
                                @foreach ($baptismal->godparents as $godparent)
                                    <div class="p-2"> {{ $counter }}. {{ $godparent->fullname }}</div>
                                    @php
                                        $counter++;
                                    @endphp
                                @endforeach
                            </div>
                        </td>
                    </tr>
                </table>


                <div class="mt-4 flex justify-end">
                    <a href="/retrieve/baptismals" class="bg-gray-500 text-white py-2 px-4 rounded mr-2">
                        Back
                    </a>
                    <a href="/retrieve/baptismal/pdf/{{ $baptismal->id }}" class="bg-blue-500 text-white py-2 px-4 rounded">
                        Export PDF
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
