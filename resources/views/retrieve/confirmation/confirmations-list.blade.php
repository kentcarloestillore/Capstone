<table class="min-w-3/5 bg-white shadow-md rounded-lg mt-3 mx-auto">
    <thead>
        <tr>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Fullname</th>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Address</th>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Sex</th>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Birthdate</th>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Date of Confirmation</th>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Action</th>
        </tr>
    </thead>
    <tbody id="confirmationTableList">
        @foreach ($confirmations as $confirmation)
            <tr class="bg-gray-100 border-b border-gray-200 fade-me-out">
                <td class="px-4 py-2">{{ $confirmation->parishioner->fullname }}</td>
                <td class="px-4 py-2">{{ $confirmation->parishioner->residence }}</td>
                <td class="px-4 py-2">{{ $confirmation->parishioner->sex }}</td>
                <td class="px-4 py-2">{{ $confirmation->parishioner->date_of_birth }}</td>
                <td class="px-4 py-2">{{ $confirmation->date_of_confirmation }}</td>
                <td class="px-4 py-2"><a href="/retrieve/confirmation/{{$confirmation->id}}"><img src="{{ asset('icons/open.svg') }}" alt="open" class="h-8"></a></td>
            </tr>
        @endforeach
    </tbody>
</table>

