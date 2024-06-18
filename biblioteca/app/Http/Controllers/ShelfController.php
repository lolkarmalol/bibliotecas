<?php

namespace App\Http\Controllers;

use App\Models\Shelf;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ShelfRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ShelfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $shelves = Shelf::paginate();

        return view('shelf.index', compact('shelves'))
            ->with('i', ($request->input('page', 1) - 1) * $shelves->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $shelf = new Shelf();

        return view('shelf.create', compact('shelf'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ShelfRequest $request): RedirectResponse
    {
        Shelf::create($request->validated());

        return Redirect::route('shelves.index')
            ->with('success', 'Shelf created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $shelf = Shelf::find($id);

        return view('shelf.show', compact('shelf'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $shelf = Shelf::find($id);

        return view('shelf.edit', compact('shelf'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ShelfRequest $request, Shelf $shelf): RedirectResponse
    {
        $shelf->update($request->validated());

        return Redirect::route('shelves.index')
            ->with('success', 'Shelf updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Shelf::find($id)->delete();

        return Redirect::route('shelves.index')
            ->with('success', 'Shelf deleted successfully');
    }
}
