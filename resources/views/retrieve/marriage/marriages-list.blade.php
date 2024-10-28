<table class="min-w-3/5 bg-white shadow-md rounded-lg mt-3 mx-auto">
    <thead>
        <tr>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Husband</th>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Wife</th>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Address</th>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Place of Marriage</th>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Date of Marriage</th>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Action</th>
        </tr>
    </thead>
    <tbody id="marriageTableList">
        @foreach ($marriages as $marriage)
            <tr class="bg-gray-100 border-b border-gray-200 fade-me-out">
                <td class="px-4 py-2">{{ $marriage->husband->fullname ?? 'N/A'}}</td>
                <td class="px-4 py-2">{{ $marriage->wife->fullname ?? 'N/A'}}</td>
                <td class="px-4 py-2">{{ $marriage->husband->residence }}</td>
                <td class="px-4 py-2">{{ $marriage->place_of_marriage }}</td>
                <td class="px-4 py-2">{{ $marriage->date_of_marriage }}</td>
                <td class="px-4 py-2"><a href="/retrieve/marriage/{{$marriage->id}}"><img src="{{ asset('icons/open.svg') }}" alt="open" class="h-8"></a></td>
            </tr>
        @endforeach
    </tbody>
</table>
