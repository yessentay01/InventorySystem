@extends('layouts.main')

@section('content')
    @section('title', 'Dashboard')

    @include('inc.alert')
    <div class="container">
        <div class="p-5 mb-4 rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Dashboard</h1>
                <p class="col-md-8 fs-4">
                    Welcome to Inventory Management System
                </p>
            </div>
        </div>
    </div>
@endsection
