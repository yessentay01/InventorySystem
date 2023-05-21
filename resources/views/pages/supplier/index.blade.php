@extends('layouts.main')

@section('content')
    @section('title', 'List of Suppliers')

    @include('inc.alert')
    <div class="container">
        <a href="{{ route('supplier.showAdd') }}" class="btn btn-primary mt-3">Add new supplier</a>
        <table
            id="table"
            data-show-columns="true"
            data-search="true"
            data-mobile-responsive="true"
            data-check-on-init="true">
            <thead>
            <tr>
                <th  data-field="id" data-sortable="true" scope="col">#</th>
                <th  data-field="Brand Name" data-sortable="true" scope="col">Name</th>
                <th  data-field="Person in charge" data-sortable="true" scope="col">Person</th>
                <th  data-field="Contact" data-sortable="true" scope="col">Contact</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($suppliers as $supplier)
                <tr>
                    <th scope="row">{{ $supplier->id }}</th>
                    <td>{{ $supplier->name }}</td>
                    <td>{{ $supplier->incharge_name }}</td>
                    <td>{{ $supplier->contact_number }}</td>
                    <td>
                        <a href="{{ route('supplier.destroy', ['id'=>$supplier->id]) }}"
                           class="btn btn-primary">Delete</a>
                        <a href="{{ route('supplier.showEdit', ['id'=>$supplier->id]) }}"
                           class="btn btn-primary">Edit</a>
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
