@extends('layouts.app')

@section('content')
    @include('inc.alert')
    @section('title', 'Login')
    <form action="{{ route('index.login') }}" method="POST">
        @csrf
        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Email address</label>
            <input type="email" id="form3Example3" value="{{ old('email') }}"  name="email" class="form-control form-control-lg @error('email') is-invalid @enderror"
                   placeholder="Enter a valid email address"/>
            @error('email')
            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>

        <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Password</label>
            <input type="password" id="form3Example4" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror "
                   placeholder="Enter password"/>
            @error('password')
            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3"/>
                <label class="form-check-label" for="form2Example3">
                    Remember me
                </label>
            </div>
            <a href="#!" class="text-body">Forgot password?</a>
        </div>

        <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Login
            </button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account?
                <a href="{{route('register')}}" class="link-danger">Register</a>
            </p>
        </div>

    </form>
@endsection
