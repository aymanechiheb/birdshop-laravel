<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemStore;
use App\Http\Requests\ItemUpdate;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();
        return view('item.index',['items' => $items]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Addproduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ItemStore $request)
    {

    extract($request->validated());
    $picture->store('public');
    $item = new Item;
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->Stock=$request->Stock;
        $item->picture = $picture->hashName();

        $item->save();

        if (Auth::user()->role === 1) {
            $items = Item::OrderByDesc('name')->get();
        }

        return view('admin.home', ['items' => $items]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $item = Item::find($id);
        return view('item.Details', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Item::find($id);
        return view('item.Details', compact('item'));    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ItemUpdate $request, $id)
    {
        extract($request->validated());

        // Find the item by ID
        $item = Item::findOrFail($id);

        // Update the item properties
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;

        // Check if a new image was uploaded
        if ($request->hasFile('picture')) {

            $picture->store('public');
            $item->picture = $picture->hashName();
        }

        // Save the updated item
        $item->save();

        if (Auth::user()->role === 1) {
            $items = Item::OrderByDesc('id')->get();
        }

        return view('admin.home', ['items' => $items]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

        if (Auth::user()->role === 1) {
            $items = Item::OrderByDesc('id')->get();
        }

        return view('admin.home', ['items' => $items])
            ->with('status', 'Item deleted successfully.');
    }
}
