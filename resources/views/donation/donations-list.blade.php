<table class="min-w-64 bg-white shadow-md rounded-lg mt-3 mx-auto">
    <thead>
        <tr>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Name</th>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Date</th>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Amount</th>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Remarks</th>
            {{-- <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Action</th> --}}
        </tr>
    </thead>
    <tbody id="donationTableList">
        @foreach ($donations as $donation)
            <tr class="bg-gray-100 border-b border-gray-200">
                <td class="px-4 py-2">{{ $donation->name }}</td>
                <td class="px-4 py-2">{{ $donation->date_donated }}</td>
                <td class="px-4 py-2">₱ {{ $donation->amount }}</td>
                <td class="px-4 py-2">{{ $donation->remarks }}</td>
                <td class="px-4 py-2">{{ $donation->receivers_name }}</td>
                {{-- <td class="px-4 py-2"><a href="/retrieve/donation/{{$donation->id}}"><img src="{{ asset('icons/open.svg') }}" alt="open" class="h-8"></a></td> --}}
            </tr>
        @endforeach
    </tbody>
</table>
