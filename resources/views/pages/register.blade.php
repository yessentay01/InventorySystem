@extends('layouts.app')

@section('content')
    @include('inc.alert')
    @section('title', 'Register')
    <form action="{{ route('register.store') }}" method="POST">
        @csrf
        <div class="form-outline mb-4">
            <label class="form-label">Full name</label>
            <input type="text" name="name" class="form-control form-control-lg"
                   placeholder="Enter name" required/>
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" >Email address</label>
            <input type="email" name="email" class="form-control form-control-lg"
                   placeholder="Enter email"required />
        </div>

        <div class="form-outline mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control form-control-lg"
                   placeholder="Enter password" required/>
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
