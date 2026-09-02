<h1>Role Manage Page</h1>

{{-- @php
echo "<pre>";
print_r($roles);
echo "</pre>";
@endphp --}}

<table class="table" border="1" width="300">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($roles as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item['name'] }}</td>
        </tr>            
        @endforeach
    </tbody>
</table>