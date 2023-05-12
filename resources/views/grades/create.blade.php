@extends('layout')

@section('title')
  Create Grade
@endsection

@section('css')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
@endsection

@section('content')
  <main>
    <h1 class="has-text-weight-semibold is-size-1">Create Grade</h1>
    <div id="wrapper">
      <br>
      <form method="POST" action="{{ route('grades.index') }}">
        @csrf
        <label class="label" for="course_name">Course Name</label>
        
        <div class="control">
          <input
              class="input @error('course_name') is-danger @enderror"
              type="text"
              name="course_name"
              id="course_name"
              value="{{ old('course_name') }}">
          @error('course_name')
            <p class="help is-danger">{{ $errors->first('course_name') }}</p>
          @enderror
        </div>
        
        <div class="field">
          <label class="label" for="test_name">Test Name</label>
          
          <div class="control">
            <input
                class="input @error('test_name') is-danger @enderror"
                type="text"
                name="test_name"
                id="test_name"
                value="{{ old('test_name') }}">
            @error('test_name')
              <p class="help is-danger">{{ $errors->first('test_name') }}</p>
            @enderror
          </div>
        </div>
  
        <div class="field">
          <label class="label" for="lowest_passing_grade">Lowest Passing Grade</label>
    
          <div class="control">
            <input
                class="input @error('lowest_passing_grade') is-danger @enderror"
                type="text"
                name="lowest_passing_grade"
                id="lowest_passing_grade"
                value="{{ old('lowest_passing_grade') }}">
            @error('lowest_passing_grade')
              <p class="help is-danger">{{ $errors->first('lowest_passing_grade') }}</p>
            @enderror
          </div>
        </div>
  
        <div class="field">
          <label class="label" for="best_grade">Best Grade</label>
    
          <div class="control">
            <input
                class="input @error('best_grade') is-danger @enderror"
                type="text"
                name="best_grade"
                id="best_grade"
                value="{{ old('best_grade') }}">
            @error('best_grade')
              <p class="help is-danger">{{ $errors->first('best_grade') }}</p>
            @enderror
          </div>
        </div>
        
        <div class="field">
          <div class="control">
            <button class="button is-link" type="submit">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </main>
@endsection
