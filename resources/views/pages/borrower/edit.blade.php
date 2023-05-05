@extends('layouts.main')

@section('content')
    @section('title', 'Edit Borrower')
    @include('inc.alert')
    <div class="container">
        <a href="{{ route('borrower') }}" class="btn btn-secondary mt-3">Back</a>

        <div class="border border-secondary rounded  mt-3 p-3">
            <form action="{{ route('borrower.update', ['id'=>request()->route('id')]) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="user_id"  class="form-label">Borrower Name</label>
                    <select name="user_id" class="form-control" id="user_id">
                        @foreach($users as $user)
                            <option value="{{$user->id}}" {{ $user->id == $borrower->user_id ? 'selected' :
                        ''}}>{{$user->name}}</option>
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
                    <input type="text" name="student_id" class="form-control" id="student_id"
                           value="{{ $borrower->student_id }}"
                           required>

                    @error('student_id')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="item_id" class="form-label">Book</label>
                    <select class="form-select" name="item_id" required>
                        @if ($items->isEmpty())
                            <option value="{{ $borrower->item_id }}" selected>{{
                        $borrower->item->name }}</option>
                        @else
                            @foreach ($items as $item)
                                <option value="{{ $item->id }}" {{ $item->id == $borrower->item_id ? 'selected' : ''}} >{{
                        $item->name }}</option>
                            @endforeach
                            <option value="{{ $borrower->item_id }}" selected>{{
                        $borrower->item->name }}</option>
                        @endif
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
                            <option value="{{ $department->id }}" {{ $department->id == $borrower->department_id ? 'selected' :
                        ''}}>{{ $department->name }}</option>
                        @endforeach
                    </select>
                    @error('department_id')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" name="status" required>
                        <option value="1" {{ '1'==$borrower->status ? 'selected' : ''}}>
                            Active
                        </option>
                        <option value="0" {{ '0'==$borrower->status ? 'selected' : ''}}>
                            Returned
                        </option>
                    </select>
                    @error('status')
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
