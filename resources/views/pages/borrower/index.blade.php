@extends('layouts.main')

@section('content')
    @section('title', 'List of Borrowers')
    @include('inc.alert')
    <div class="container">
        <a href="{{ route('borrower.showAdd') }}" class="btn btn-primary mt-3">Add New Borrower</a>
        <table
            id="table"
            data-show-columns="true"
            data-search="true"
            data-mobile-responsive="true"
            data-check-on-init="true">

            <thead>
            <tr>
                <th data-sortable="true" scope="col">#</th>
                <th data-sortable="true" scope="col">Borrower Name</th>
                <th data-sortable="true" scope="col">Status</th>
                <th data-sortable="true" scope="col">Borrow Date</th>
                <th data-sortable="true" scope="col">Staff Id</th>
                <th data-sortable="true" scope="col">Item</th>
                <th data-sortable="true" scope="col">Department</th>
                <th data-sortable="true" scope="col">Authorized By</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($borrowers as $borrower)
                <tr>
                    <th scope="row">{{ $borrower->id }}</th>
                    <td>{{ $borrower->name }}</td>
                    <td>
                        @if ($borrower->status == 1)
                            <span class="bg-success btn text-white">Active</span>
                        @else

                            <span class="bg-warning btn">Returned</span>
                        @endif
                    </td>
                    <td>{{ $borrower->created_at->format('d-M-Y') }}</td>
                    <td>{{ $borrower->staff_id }}</td>
                    <td>{{ $borrower->item->name }}</td>
                    <td>{{ $borrower->department->name }}</td>
                    <td>{{ $borrower->user->name }}</td>
                    <td>
                        <a href="{{ route('borrower.destroy', ['id' => $borrower->id]) }}"
                           class="btn btn-danger">Delete</a>
                        <a href="{{ route('borrower.showEdit', ['id' => $borrower->id]) }}"
                           class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <script>
        $(function () {
            $('#table').bootstrapTable()
        })
    </script>
@endsection
