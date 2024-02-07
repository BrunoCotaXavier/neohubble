<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{

    /* public function __construct()
    {
        $this->authorizeResource(Blog::class, 'blog');
    } */

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('blog.index', [
            'blog' => Blog::with('user')->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Verifica se o usuário tem a permissão 'create_blog'
        if ($request->user()->hasRole('admin')) {
            $validated = $request->validate([
                'message' => 'required|string',
            ]);

            $request->user()->blog()->create($validated);

            return redirect(route('blog.index'));
        } else {
            // Retorne uma resposta de erro ou redirecione para algum lugar
            return redirect()->back()->with('error', 'Você não tem permissão para criar blogs.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog): View
    {
        $this->authorize('update', $blog);

        return view('blog.edit', [
            'blog' => $blog,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog): RedirectResponse
    {
        $this->authorize('update', $blog);

        $validated = $request->validate([
            'message' => 'required|string',
        ]);

        $blog->update($validated);

        return redirect(route('blog.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog): RedirectResponse
    {
        $this->authorize('delete', $blog);

        $blog->delete();

        return redirect(route('blog.index'));
    }
}
