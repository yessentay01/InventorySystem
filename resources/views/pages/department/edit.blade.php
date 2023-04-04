@extends('layouts.main')

@section('content')
    @section('title', 'Edit Department')

    @include('inc.alert')
    <div class="container">
        <a href="{{ route('department') }}" class="btn btn-secondary mt-3">Back</a>

        <div class="border border-secondary rounded  mt-3 p-3">
            <form action="{{ route('department.update', ['id'=>request()->route('id')]) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Department Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $department->name }}"
                           required>
                </div>

                <div class="mb-3">
                    <label for="location" class="form-label">Location</label>
                    <select class="form-select" name="location" required>
                        @for ($i = 1; $i < 7; $i++)
                            <option value="{{ $i }}" {{ $i==$department->location ? 'selected' : ''
                        }}>Level {{ $i }}
                            </option>
                        @endfor
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
