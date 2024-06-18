<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $books = Book::paginate();

        return view('book.index', compact('books'))
            ->with('i', ($request->input('page', 1) - 1) * $books->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $book = new Book();

        return view('book.create', compact('book'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookRequest $request): RedirectResponse
    {
        Book::create($request->validated());

        return Redirect::route('books.index')
            ->with('success', 'Book created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $book = Book::find($id);

        return view('book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $book = Book::find($id);

        return view('book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookRequest $request, Book $book): RedirectResponse
    {
        $book->update($request->validated());

        return Redirect::route('books.index')
            ->with('success', 'Book updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Book::find($id)->delete();

        return Redirect::route('books.index')
            ->with('success', 'Book deleted successfully');
    }
}
