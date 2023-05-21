@extends('layouts.main')

@section('content')
    @section('title', 'Profile')

    @include('inc.alert')
    <div class="container">
        <a href="{{ route('profile.showEdit') }}" class="btn btn-primary mt-3">Edit</a>
        <div class="border p-4 mt-3">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="email" class="form-control" id="name" name="name" value="{{ $profile->name }}" disabled>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" value="{{ $profile->email }}" disabled>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">University</label>
                <input type="email" class="form-control" value="{{ $university->name }}" disabled>
            </div>
        </div>
        @if(!auth()->user()->is_admin)
        <table
            id="table"
            data-show-columns="true"
            data-search="true"
            data-mobile-responsive="true"
            data-check-on-init="true">

            <thead>
            <tr>
                <th data-sortable="true" scope="col">Book</th>
                <th data-sortable="true" scope="col">Status</th>
                <th data-sortable="true" scope="col">Borrow Date</th>
                <th data-sortable="true" scope="col">Department</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($borrowers as $borrower)
                <tr>
                    <td>{{ $borrower->item->name }}</td>
                    <td>
                        @if ($borrower->status == 1)
                            <span class="bg-success btn text-white">Active</span>
                        @else

                            <span class="bg-warning btn">Returned</span>
                        @endif
                    </td>
                    <td>{{ $borrower->created_at->format('d-M-Y') }}</td>
                    <td>{{ $borrower->department->name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @endif
    </div>
    <script>
        $(function () {
            $('#table').bootstrapTable()
        })
    </script>
@endsection
