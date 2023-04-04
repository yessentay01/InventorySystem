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
    </div>
</div>
@endsection
