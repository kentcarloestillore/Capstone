<table class="min-w-64 bg-white shadow-md rounded-lg mt-3 mx-auto">
    <thead>
        <tr>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Title</th>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Description</th>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Date Paid</th>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Amount</th>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Receiver's Name</th>
            {{-- <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Action</th> --}}
        </tr>
    </thead>
    <tbody id="receiptTableList">
        @foreach ($receipts as $receipt)
            <tr class="bg-gray-100 border-b border-gray-200">
                <td class="px-4 py-2">{{ $receipt->title }}</td>
                <td class="px-4 py-2">{{ $receipt->description }}</td>
                <td class="px-4 py-2">{{ $receipt->date_paid }}</td>
                <td class="px-4 py-2">{{ $receipt->amount }}</td>
                <td class="px-4 py-2">{{ $receipt->receivers_name }}</td>
                {{-- <td class="px-4 py-2"><a href="/retrieve/receipt/{{$receipt->id}}"><img src="{{ asset('icons/open.svg') }}" alt="open" class="h-8"></a></td> --}}
            </tr>
        @endforeach
    </tbody>
</table>
