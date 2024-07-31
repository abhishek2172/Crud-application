<!-- resources/views/categories/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="col border bg-light mt-5 p-3 rounded-4">
    <h1 class="text-center">Categories</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary mt-3">Add Category</a>
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
                            style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection