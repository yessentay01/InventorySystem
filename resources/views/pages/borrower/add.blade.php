@extends('layouts.main')

@section('content')
    @section('title', 'Add Borrower')

    @include('inc.alert')
    <div class="container">
        <a href="{{ route('borrower') }}" class="btn btn-secondary mt-3">Back</a>

        <div class="border border-secondary rounded  mt-3 p-3">
            <form action="{{ route('borrower.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="user_id" class="form-label">Borrower Name</label>
                    <select name="user_id" class="form-control" id="user_id">
                    @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                    </select>
                    <input  type="hidden" name="name" class="form-control" id="name" value="null" required>

                    {{--                    <input type="text" class="form-control" value="{{ Auth::user()->name }}" disabled>--}}
{{--                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">--}}

                    @error('user_id')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="student_id" class="form-label">Student ID</label>
                    <input type="text" name="student_id" class="form-control" id="student_id" required>

                    @error('student_id')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="item_id" class="form-label">Book</label>
                    <select class="form-select" name="item_id" required>
                        @foreach ($items as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    @error('item_id')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="department_id" class="form-label">Department</label>
                    <select class="form-select" name="department_id" required>
                        @foreach ($departments as $department)
                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                        @endforeach
                    </select>
                    @error('department_id')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
