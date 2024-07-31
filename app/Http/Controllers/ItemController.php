<?php
namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        $query = Item::query();

        if ($request->has('filter')) {
            $query->where('active', $request->input('filter'));
        }

        $items = $query->get();
        $categories = Category::all();

        return view('items.index', compact('items', 'categories'));
    }

     public function create()
    {
        $categories = Category::all();
        return view('items.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category_name' => 'required|string|exists:categories,name',
            'active' => 'required|boolean',
        ]);

        Item::create($request->all());
        return redirect()->route('items.index');
    }

    public function show(Item $item)
    {
        return view('items.show', compact('item'));
    }

    public function edit(Item $item)
    {
        $categories = Category::all();
        return view('items.edit', compact('item', 'categories'));
    }

    public function update(Request $request, Item $item)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category_name' => 'required|string|exists:categories,name',
            'active' => 'required|boolean',
        ]);

        $item->update($request->all());
        return redirect()->route('items.index');
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

        return redirect()->route('items.index');
    }

    public function filter($status)
    {
        $items = Item::where('active', $status)->get();
        return view('items.index', compact('items'));
    }

    public function search(Request $request)
    {

        $search = $request->search;
        if ($search) {
            $data = Item::where('name', 'LIKE', "%$search%")->get();

        } else {
            $data = Item::all();
        }
        return view('items.index', ['items' => $data]);
    }

    public function bulkDestroy(Request $request)
    {
        $ids = $request->input('ids');
        Item::whereIn('id', $ids)->delete();
        return redirect()->route('items.index')->with('success', 'Items deleted successfully.');
    }
}