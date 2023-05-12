<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Returns a view with a list of FAQ's
     */
    public function index()
    {
        return view("faq.index", [
            'faqs' => Faq::latest()->get()
        ]);
    }
    
    /**
     * Shows a view to create a new resource
     */
    public function create()
    {
        return view('faq.create');
    }
    
    /**
     * Creates a new FAQ after validation in the database.
     * Redirects user to faq index page
     *
     * @param Request $request
     */
    public function store(Request $request)
    {
        // Stores the new resource
        Faq::create($this->validateFaq($request));
        
        return redirect(route('faq.index'));
    }
    
    /**
     * Returns a view to edit the current faq
     *
     * @param Faq $faq
     */
    public function edit(Faq $faq)
    {
        // Show a view to edit an existing resource
        return view('faq.edit', compact('faq'));
    }
    
    /**
     * Updates the edited FAQ after validation
     * Redirects the user to the faq index page
     *
     * @param Faq $faq
     * @param Request $request
     */
    public function update(Faq $faq, Request $request)
    {
        // Stores the edited resource
        $faq->update($this->validateFaq($request));
        
        return redirect(route('faq.index'));
    }
    
    /**
     * Deletes the current faq in the database
     * Redirects the user to the faq index page
     *
     * @param Faq $faq
     */
    public function destroy(Faq $faq)
    {
        // Delete the resource
        $faq->delete();
        
        return redirect(route('faq.index'));
    }
    
    /**
     * Validates the request. Code keeps running if rules are met.
     * If rules are not met, an exception occurs, user gets redirected and an error response will be given.
     *
     * @param $request
     */
    public function validateFaq($request)
    {
        return request()->validate([
            'question' => 'required',
            'answer' => 'required',
            'link' => ''
        ]);
    }
}
