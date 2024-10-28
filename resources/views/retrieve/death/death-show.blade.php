@extends('layouts.app')

@section('content')
    <div class="header flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Register>Death>
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
                        <td class="border p-2 font-semibold" colspan="2">BOOK_NO:{{$death->book_number}}/PAGE_NO:{{$death->page_number}}/SERIAL_NO:{{$death->serial_number}}</td>
                    </tr>
                    <tr>
                        <td class="border p-2 font-semibold max-w-12 min-w-16">Name</td>
                        <td class="border p-2">{{$death->parishioner->fullname}}</td>
                    </tr>
                    <tr>
                        <td class="border p-2 font-semibold max-w-12 min-w-16">Address</td>
                        <td class="border p-2">{{$death->parishioner->residence}}</td>
                    </tr>
                    <tr>
                        <td class="border p-2 font-semibold max-w-12 min-w-16">Date of Birth</td>
                        <td class="border p-2">{{$death->parishioner->date_of_birth}}</td>
                    </tr>
                    <tr>
                        <td class="border p-2 font-semibold max-w-12 min-w-16">Place of Birth</td>
                        <td class="border p-2">{{$death->parishioner->place_of_birth}}</td>
                    </tr>
                    <tr>
                        <td class="border p-2 font-semibold max-w-12 min-w-16">Partner's Name</td>
                        <td class="border p-2">{{$death->partner_name}}</td>
                    </tr>
                    <tr>
                        <td class="border p-2 font-semibold max-w-12 min-w-16">Father's Name</td>
                        <td class="border p-2">{{$death->parishioner->name_of_father}}</td>
                    </tr>
                    <tr>
                        <td class="border p-2 font-semibold max-w-12 min-w-16">Mother's Name</td>
                        <td class="border p-2">{{$death->parishioner->name_of_mother}}</td>
                    </tr>
                    <tr>
                        <td class="border p-2 font-semibold max-w-12 min-w-16">Date of Death</td>
                        <td class="border p-2">{{$death->date_of_death}}</td>
                    </tr>
                    <tr>
                        <td class="border p-2 font-semibold max-w-12 min-w-16">Date of Burial</td>
                        <td class="border p-2">{{$death->date_of_burial}}</td>
                    </tr>
                    <tr>
                        <td class="border p-2 font-semibold max-w-12 min-w-16">Place of Burial</td>
                        <td class="border p-2">{{$death->name_of_cemetery}}</td>
                    </tr>
                    <tr>
                        <td class="border p-2 font-semibold max-w-12 min-w-16">Age</td>
                        <td class="border p-2">{{$age}}</td>
                    </tr>
                    <tr>
                        <td class="border p-2 font-semibold max-w-12 min-w-16">Cause of Death</td>
                        <td class="border p-2">{{$death->cause_of_death}}</td>
                    </tr>
                    <tr>
                        <td class="border p-2 font-semibold max-w-12 min-w-16">Received any Sacraments before Death</td>
                        <td class="border p-2">
                            @if($death->received_any_sacrament)
                                <div class="">✔</div>
                            @else
                                <div class="">❌</div>
                            @endif
                        </td>
                    </tr>
                </table>

                <div class="mt-4 flex justify-end">
                    <a href="/retrieve/deaths" class="bg-gray-500 text-white py-2 px-4 rounded mr-2">
                        Back
                    </a>
                    <a href="/retrieve/death/pdf/{{ $death->id }}" class="bg-blue-500 text-white py-2 px-4 rounded">
                        Export PDF
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
