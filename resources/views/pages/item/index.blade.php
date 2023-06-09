@extends('layouts.main')

@section('content')
    @section('title', 'List of Books')

    @include('inc.alert')
    <div class="container">
        <a href="{{ route('item.showAdd') }}" class="btn btn-primary mt-3">Add new book</a>
        <a href="{{ route('item.report') }}" target="_blank" class="btn btn-primary mt-3">Download Report</a>
        <table
            id="table"
            data-show-columns="true"
            data-search="true"
            data-mobile-responsive="true"
            data-check-on-init="true">
            <thead>
            <tr>
                <th data-field="id" data-sortable="true" scope="col">#</th>
                <th data-field="name" data-sortable="true" scope="col">Name</th>
                <th data-field="Serial Number" data-sortable="true" scope="col">Serial Number</th>
                <th data-field="Category" data-sortable="true" scope="col">Category</th>
                <th data-field="Quantity" data-sortable="true" scope="col">Quantity</th>
                <th data-field="Status" data-sortable="true" scope="col">Status</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($items as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->serial_number }}</td>
                    <td>{{ $item->category->name ?? 'N/A' }}</td>
                    <td>{{ $item->quantity }}</td>
                    @if ($item->status == '1')
                        <td>
                            <span class="btn bg-success text-white">Available</span>
                        </td>
                    @else
                        <td>Unavailable</td>
                    @endif
                    <td>
                        <a href="{{ route('item.destroy', ['id' => $item->id]) }}" class="btn btn-primary mb-2">Delete</a>
                        <a href="{{ route('item.showEdit' , ['id' => $item->id]) }}" class="btn btn-primary mb-2">Edit</a>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <script>
        $(function() {
            $('#table').bootstrapTable()
        })
    </script>
@endsection
