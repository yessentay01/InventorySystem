@extends('layouts.main')

@section('content')
    @section('title', 'Add new category')

    @include('inc.alert')
    <div class="container">
        <a href="{{ route('category') }}" class="btn btn-secondary mt-3">Back</a>

        <div class="border border-secondary rounded  mt-3 p-3">
            <form action="{{ route('category.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Category Name</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
