<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ThemeRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $themes = Theme::paginate();

        return view('theme.index', compact('themes'))
            ->with('i', ($request->input('page', 1) - 1) * $themes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $theme = new Theme();

        return view('theme.create', compact('theme'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ThemeRequest $request): RedirectResponse
    {
        Theme::create($request->validated());

        return Redirect::route('themes.index')
            ->with('success', 'Theme created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $theme = Theme::find($id);

        return view('theme.show', compact('theme'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $theme = Theme::find($id);

        return view('theme.edit', compact('theme'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ThemeRequest $request, Theme $theme): RedirectResponse
    {
        $theme->update($request->validated());

        return Redirect::route('themes.index')
            ->with('success', 'Theme updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Theme::find($id)->delete();

        return Redirect::route('themes.index')
            ->with('success', 'Theme deleted successfully');
    }
}
