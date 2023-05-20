@extends('layouts.app')

@section('content')
    @include('inc.alert')
    @section('title', 'Register')
    <form action="{{ route('register.store') }}" method="POST">
        @csrf
        <div class="form-outline mb-4">
            <label class="form-label">Full name</label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control form-control-lg @error('name') is-invalid @enderror"
                   placeholder="Enter name" required/>
            @error('name')
            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" >Email address</label>
            <input type="email" name="email" value="{{ old('email') }}" class="form-control form-control-lg @error('email') is-invalid @enderror"
                   placeholder="Enter email"required />
            @error('email')
            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" >University</label>
            <select name="university_id" id="university_id" class="form-control form-control-lg @error('university_id') is-invalid @enderror" required>
                @foreach($universities as $university)
                    <option value="{{$university->id}}" {{old('university_id') == $university->id ? 'selected' : ''}}>{{$university->name}}</option>
                @endforeach
            </select>
            @error('university_id')
            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>

        <div class="form-outline mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror "
                   placeholder="Enter password" required/>
            @error('password')
            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>

        <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Register
            </button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Do you already have an account?
                <a href="{{route('index')}}" class="link-danger">Login</a>
            </p>
        </div>

    </form>
@endsection
