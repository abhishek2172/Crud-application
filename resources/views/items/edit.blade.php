@extends('layouts.app')

@section('content')

<div class="col border bg-light mt-5 p-3 rounded-4">
    <h1 class="text-center">Edit Item</h1>
    <form action="{{ route('items.update', $item->id) }}" method="POST" class="mt-3 p-3">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $item->name) }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control"
                required>{{ old('description', $item->description) }}</textarea>
        </div>
        <div class="form-group">
            <label for="category_name">Category</label>
            <select name="category_name" class="form-control" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->name }}" {{ old('category_name', $item->category_name) == $category->name ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group form-check form-switch mt-2">
            <label class="form-check-label" for="active">Active</label>
            <input type="hidden" name="active" value="0">
            <input class="form-check-input" type="checkbox" id="active" name="active" value="1" {{ old('active', $item->active) ? 'checked' : '' }}>
        </div>
        <button type="submit" class="btn btn-success mt-3">Update</button>
    </form>
</div>
@endsection