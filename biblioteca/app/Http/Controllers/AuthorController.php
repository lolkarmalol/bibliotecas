<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\AuthorRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $authors = Author::paginate();

        return view('author.index', compact('authors'))
            ->with('i', ($request->input('page', 1) - 1) * $authors->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $author = new Author();

        return view('author.create', compact('author'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AuthorRequest $request): RedirectResponse
    {
        Author::create($request->validated());

        return Redirect::route('authors.index')
            ->with('success', 'Author created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $author = Author::find($id);

        return view('author.show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $author = Author::find($id);

        return view('author.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AuthorRequest $request, Author $author): RedirectResponse
    {
        $author->update($request->validated());

        return Redirect::route('authors.index')
            ->with('success', 'Author updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Author::find($id)->delete();

        return Redirect::route('authors.index')
            ->with('success', 'Author deleted successfully');
    }
}
