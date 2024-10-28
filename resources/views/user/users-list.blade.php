<table class="min-w-3/5 bg-white shadow-md rounded-lg mt-3 mx-auto">
    <thead>
        <tr>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Name</th>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Username</th>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Church</th>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Action</th>
        </tr>
    </thead>
    <tbody id="userTableList">
        @foreach ($users as $user)
            <tr class="bg-gray-100 border-b border-gray-200">
                <td class="px-4 py-2">{{ $user->name }}</td>
                <td class="px-4 py-2">{{ $user->username }}</td>
                <td class="px-4 py-2">{{ $user->church->name_of_church }}</td>
                <td class="px-4 py-2"><a href="/retrieve/user/{{$user->id}}"><img src="{{ asset('icons/open.svg') }}" alt="open" class="h-8"></a></td>
            </tr>
        @endforeach
    </tbody>
</table>
