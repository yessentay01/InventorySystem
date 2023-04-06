@extends('layouts.main')

@section('content')
    @section('title', 'Add new book')

    @include('inc.alert')
    <div class="container">
        <a href="{{ route('item') }}" class="btn btn-secondary mt-3">Back</a>
        <div class="border border-secondary rounded mt-3 p-3">
            <form action="{{ route('item.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="serial_number" class="form-label">Book ID</label>
                    <input type="text" name="serial_number" class="form-control" id="serial_number" required>

                    @error('serial_number')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Book Name</label>
                    <input type="text" name="name" class="form-control" id="name" required>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" name="author" class="form-control" id="author" required>

                    @error('author')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="description" cols="30" rows="10" required></textarea>
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" name="price" class="form-control" id="price" required>

                    @error('price')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
{{--                    <input type="file"  name="image" class="form-control" id="image" required>--}}
                    <input type="text" name="image" id="image" class="form-control" required>
                    @error('image')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>



                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" name="status" required>
                        <option disabled selected>Select status</option>
                        <option value="0">Unavailable</option>
                        <option value="1">Available</option>
                    </select>
                    @error('status')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">Category</label>
                    <select class="form-select" name="category_id" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="supplier_id" class="form-label">Supplier</label>
                    <select class="form-select" name="supplier_id" required>
                        @foreach ($suppliers as $supplier)
                            <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                        @endforeach
                    </select>
                    @error('supplier_id')
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
