@extends('layouts.app')

<style>
    .inline-form {
        display: inline-block;
        margin-right: 10px;
    }
</style>

@section('content')
<div class="col border bg-light mt-5 p-3 rounded-4">
    <h1 class="text-center">Items</h1>
    <a href="{{ route('items.create') }}" class="btn btn-primary inline-form">Add Item</a>

    <form action="{{ route('items.index') }}" method="GET" class="inline-form">
        <input type="hidden" name="filter" value="1">
        <button type="submit" class="btn btn-success">Show Active</button>
    </form>
    <form action="{{ route('items.index') }}" method="GET" class="inline-form">
        <input type="hidden" name="filter" value="0">
        <button type="submit" class="btn btn-secondary">Show Inactive</button>
    </form>
    <form action="/search" method="GET" class="inline-form">
        <input type="text" name="search">
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
    <form action="/deleteBulk" method="POST">
        @csrf
        <table class="table table-bordered rounded-4">
            <thead>
                <tr>
                    <th>Select</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Active</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr id="item-{{ $item->id }}">
                        <td><input type="checkbox" name="ids[]" class="bulk-delete-checkbox" value="{{ $item->id }}"></td>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->category_name }}</td>
                        <td>{{ $item->active ? 'Yes' : 'No' }}</td>
                        <td>
                            <a href="{{ route('items.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('items.delete', $item->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <button type="submit" class="btn btn-danger">Bulk Delete</button>
    </form>
</div>
@endsection