<?php

namespace App\Http\Controllers;

use App\Models\BookCopy;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\BookCopyRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class BookCopyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $bookCopies = BookCopy::paginate();

        return view('book-copy.index', compact('bookCopies'))
            ->with('i', ($request->input('page', 1) - 1) * $bookCopies->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $bookCopy = new BookCopy();

        return view('book-copy.create', compact('bookCopy'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookCopyRequest $request): RedirectResponse
    {
        BookCopy::create($request->validated());

        return Redirect::route('book-copies.index')
            ->with('success', 'BookCopy created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $bookCopy = BookCopy::find($id);

        return view('book-copy.show', compact('bookCopy'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $bookCopy = BookCopy::find($id);

        return view('book-copy.edit', compact('bookCopy'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookCopyRequest $request, BookCopy $bookCopy): RedirectResponse
    {
        $bookCopy->update($request->validated());

        return Redirect::route('book-copies.index')
            ->with('success', 'BookCopy updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        BookCopy::find($id)->delete();

        return Redirect::route('book-copies.index')
            ->with('success', 'BookCopy deleted successfully');
    }
}
