<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class ArticleController extends Controller
{
    /**
     * Returns a view with a list of articles
     */
    public function index()
    {
        return view('articles.index', [
            'articles' => Article::take(3)->latest()->get()
        ]);
    }
    
    /**
     * Renders a single article
     *
     * @param Article $article
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }
    
    /**
     * Shows a view to create a new resource
     */
    public function create()
    {
        return view('articles.create');
    }
    
    /**
     * Creates a new Article after validation in the database.
     * Redirects user to articles index page
     *
     * @param Request $request
     */
    public function store(Request $request)
    {
        Article::create($this->validateArticle($request));
        
        return redirect(route('articles.index'));
    }
    
    /**
     * Returns a view to edit the current article
     *
     * @param Article $article
     */
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }
    
    /**
     * Updates the edited article after validation.
     * Redirects the user to the edited article
     *
     * @param Request $request
     * @param Article $article
     */
    public function update(Request $request, Article $article)
    {
        $article->update($this->validateArticle($request));
        
        return redirect(route('articles.show', $article));
    }
    
    /**
     * Deletes the current article in the database.
     * Redirects the user to the articles index page
     *
     * @param Article $article
     */
    public function destroy(Article $article)
    {
        // Delete the resource
        $article->delete();
        
        return redirect(route('articles.index'));
    }
    
    /**
     * Validates the request. Code keeps running if rules are met.
     * If rules are not met, an exception occurs, user gets redirected and an error response will be given.
     *
     * @param $request
     */
    public function validateArticle($request)
    {
        return $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
