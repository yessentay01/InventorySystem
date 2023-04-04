@extends('layouts.main')

@section('content')
    @section('title', 'List of Items')

    @include('inc.alert')
    <div class="container">
        <a href="{{ route('item.showAdd') }}" class="btn btn-primary mt-3">Add new item</a>
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
                <th data-field="Supplier" data-sortable="true" scope="col">Supplier</th>
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
                    <td>{{ $item->supplier->name }}</td>
                    @if ($item->status == '1')
                        <td>
                            <span class="btn bg-success text-white">Available</span>
                        </td>
                    @else
                        <td>Unavailable</td>
                    @endif
                    <td>
                        <a href="{{ route('item.destroy', ['id' => $item->id]) }}" class="btn btn-danger">Delete</a>
                        <a href="{{ route('item.showEdit' , ['id' => $item->id]) }}" class="btn btn-warning">Edit</a>
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
