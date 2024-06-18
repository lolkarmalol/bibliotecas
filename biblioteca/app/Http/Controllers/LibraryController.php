<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\LibraryRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $libraries = Library::paginate();

        return view('library.index', compact('libraries'))
            ->with('i', ($request->input('page', 1) - 1) * $libraries->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $library = new Library();

        return view('library.create', compact('library'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LibraryRequest $request): RedirectResponse
    {
        Library::create($request->validated());

        return Redirect::route('libraries.index')
            ->with('success', 'Library created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $library = Library::find($id);

        return view('library.show', compact('library'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $library = Library::find($id);

        return view('library.edit', compact('library'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LibraryRequest $request, Library $library): RedirectResponse
    {
        $library->update($request->validated());

        return Redirect::route('libraries.index')
            ->with('success', 'Library updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Library::find($id)->delete();

        return Redirect::route('libraries.index')
            ->with('success', 'Library deleted successfully');
    }
}
