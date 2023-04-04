@extends('layouts.main')

@section('content')
    @section('title', 'List of Categories')
    @include('inc.alert')
    <div class="container">
        <a href="{{ route('category.showAdd') }}" class="btn btn-primary mt-3">Add new Category</a>
        <table
            id="table"
            data-show-columns="true"
            data-search="true"
            data-mobile-responsive="true"
            data-check-on-init="true">

            <thead>
            <tr>
                <th data-sortable="true" scope="col">#</th>
                <th data-sortable="true" scope="col">Name</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('category.destroy', ['id'=>$category->id]) }}"
                           class="btn btn-danger">Delete</a>
                        <a href="{{ route('category.showEdit', ['id'=> $category->id]) }}"
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
