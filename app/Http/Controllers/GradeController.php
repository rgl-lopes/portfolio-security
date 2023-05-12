<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('grades.index', [
            'grades' => Grade::get()->all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('grades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     */
    public function store(Request $request)
    {
        Grade::create($this->validateGrade($request));
        
        return redirect(route('grades.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  Grade  $grade
     */
    public function show(Grade $grade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Grade  $grade
     */
    public function edit(Grade $grade)
    {
        return view('grades.edit', compact('grade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request $request
     * @param  Grade $grade
     */
    public function update(Request $request, Grade $grade)
    {
        $grade->update($this->validateGrade($request));
        
        return redirect(route('grades.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Grade  $grade
     */
    public function destroy(Grade $grade)
    {
        $grade->delete();
        
        return redirect(route('grades.index'));
    }
    
    /**
     * Validates the request. Code keeps running if rules are met.
     * If rules are not met, an exception occurs, user gets redirected and an error response will be given.
     *
     * @param $request
     */
    public function validateGrade($request)
    {
        return request()->validate([
            'course_name' => 'required',
            'test_name' => 'required',
            'lowest_passing_grade' => 'numeric|between:1,10',
            'best_grade' => 'numeric|between:1,10'
        ]);
    }
}
