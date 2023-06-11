@extends('layouts.main')

@section('content')
    @section('title', 'Feedbacks')

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
                <th  data-field="id" data-sortable="true" scope="col">#</th>
                <th  data-field="Name" data-sortable="true" scope="col">Name</th>
                <th  data-field="Email" data-sortable="true" scope="col">Email</th>
                <th  data-field="Phone" data-sortable="true" scope="col">Phone</th>
                <th  data-field="Message" data-sortable="true" scope="col">Message</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($feedbacks as $feedback)
                <tr>
                    <th scope="row">{{ $feedback->id }}</th>
                    <td>{{ $feedback->name }}</td>
                    <td>{{ $feedback->email }}</td>
                    <td>{{ $feedback->phone }}</td>
                    <td>{{ $feedback->message }}</td>
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
