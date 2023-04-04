@extends('layouts.main')

@section('content')
    @section('title', 'List of Departments')

    @include('inc.alert')
    <div class="container">
        <a href="{{ route('department.showAdd') }}" class="btn btn-primary mt-3">Add new department</a>
        <table
            id="table"
            data-show-columns="true"
            data-search="true"
            data-mobile-responsive="true"
            data-check-on-init="true">

            <thead>
            <tr>
                <th data-field="id" data-sortable="true" scope="col">#</th>
                <th data-field="Department Name" data-sortable="true" scope="col">Department Name</th>
                <th data-field="Location" data-sortable="true" scope="col">Location</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($departments as $department)
                <tr>
                    <th scope="row">{{ $department->id }}</th>
                    <td>{{ $department->name }}</td>
                    <td>Level {{ $department->location }}</td>
                    <td>
                        <a href="{{ route('department.destroy', ['id' => $department->id]) }}"
                           class="btn btn-danger">Delete</a>
                        <a href="{{ route('department.showEdit', ['id' => $department->id]) }}"
                           class="btn btn-warning">Edit</a>
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
