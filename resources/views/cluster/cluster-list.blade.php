<table class="min-w-3/5 bg-white shadow-md rounded-lg mt-3 mx-auto">
    <thead>
        <tr>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Cluster Number</th>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Chapel</th>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Address</th>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Leader</th>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Action</th>
        </tr>
    </thead>
    <tbody id="clusterTableList">
        @foreach ($clusters as $cluster)
            <tr class="bg-gray-100 border-b border-gray-200">
                <td class="px-4 py-2 text-center">{{ $cluster->cluster_number }}</td>
                <td class="px-4 py-2">{{ $cluster->chapel->name_of_chapel }}</td>
                <td class="px-4 py-2">{{ $cluster->chapel->address }}</td>
                <td class="px-4 py-2">{{ $cluster->cluster_leader }}</td>
                <td class="px-4 py-2"><a href="/retrieve/cluster/{{$cluster->id}}"><img src="{{ asset('icons/open.svg') }}" alt="open" class="h-8"></a></td>
            </tr>
        @endforeach
    </tbody>
</table>
