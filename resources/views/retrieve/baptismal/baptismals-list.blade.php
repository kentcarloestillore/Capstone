<table class="min-w-3/5 bg-white shadow-md rounded-lg mt-3 mx-auto">
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
                <td class="px-4 py-2"><a href="/retrieve/baptismal/{{$baptismal->id}}"><img src="{{ asset('icons/open.svg') }}" alt="open" class="h-8"></a></td>
            </tr>
        @endforeach
    </tbody>
</table>
