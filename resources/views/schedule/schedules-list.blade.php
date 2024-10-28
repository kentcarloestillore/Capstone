<table class="min-w-64 bg-white shadow-md rounded-lg mt-3 mx-auto">
    <thead>
        <tr>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Date</th>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Description</th>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-center text-gray-600">Time</th>
            {{-- <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Action</th> --}}
        </tr>
    </thead>
    <tbody id="scheduleTableList">
        @foreach ($schedules as $schedule)
            <tr class="bg-gray-100 border-b border-gray-200">
                <td class="px-4 py-2">{{ $schedule->date }}</td>
                <td class="px-4 py-2">{{ $schedule->description }}</td>
                <td class="px-4 py-2">{{ $schedule->time_start }} - {{ $schedule->time_end }}</td>
                {{-- <td class="px-4 py-2"><a href="/retrieve/schedule/{{$schedule->id}}"><img src="{{ asset('icons/open.svg') }}" alt="open" class="h-8"></a></td> --}}
            </tr>
        @endforeach
    </tbody>
</table>
