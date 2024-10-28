<table class="min-w-64 bg-white shadow-md rounded-lg mt-3 mx-auto">
    <thead>
        <tr>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Name</th>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Prayer Intentions</th>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Prayer Intentions To</th>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Date</th>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Schedule</th>
            {{-- <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Action</th> --}}
        </tr>
    </thead>
    <tbody id="pamisaTableList">
        @foreach ($pamisas as $pamisa)
            <tr class="bg-gray-100 border-b border-gray-200">
                <td class="px-4 py-2">{{ $pamisa->name }}</td>
                <td class="px-4 py-2">{{ $pamisa->prayer_intention }}</td>
                <td class="px-4 py-2">{{ $pamisa->prayer_intention_to }}</td>
                <td class="px-4 py-2">{{ $pamisa->date }}</td>
                <td class="px-4 py-2">{{ $pamisa->mass_schedule }}</td>
                {{-- <td class="px-4 py-2"><a href="/retrieve/pamisa/{{$pamisa->id}}"><img src="{{ asset('icons/open.svg') }}" alt="open" class="h-8"></a></td> --}}
            </tr>
        @endforeach
    </tbody>
</table>
