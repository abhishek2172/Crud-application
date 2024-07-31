<!-- resources/views/categories/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="col border bg-light mt-5 p-3 rounded-4">
    <h1 class="text-center">Add Category</h1>
    <form action="{{ route('categories.store') }}" method="POST" class="mt-3">
        @csrf
        <div class="form-group">
            <label for="name">Name Of Category</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success mt-3">Add</button>
    </form>
</div>
@endsection