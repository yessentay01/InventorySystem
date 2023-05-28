@extends('layouts.main')

@section('content')
    @section('title', 'Bookings')

    @include('inc.alert')
    <div class="container">
        <table
            id="table"
            data-show-columns="true"
            data-search="true"
            data-mobile-responsive="true"
            data-check-on-init="true">

            <thead>
            <tr>
                <th data-field="id" data-sortable="true" scope="col">#</th>
                <th data-field="User" data-sortable="true" scope="col">User</th>
                <th data-field="Book" data-sortable="true" scope="col">Book</th>
                <th data-field="Time" data-sortable="true" scope="col">Time</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($bookings as $booking)
                <tr>
                    <th scope="row">{{ $booking->id }}</th>
                    <td>{{ $booking->user->name ?? 'N/A' }}</td>
                    <td>{{ $booking->item->name ?? 'N/A' }}</td>
                    <td>{{ $booking->created_at ?? 'N/A' }}</td>
                    <td>
                        <a href="{{ route('booking.destroy', ['id' => $booking->id]) }}"
                           class="btn btn-primary">Delete</a>
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
