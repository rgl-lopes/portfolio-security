@extends('layout')

@section('title')
  Grade
@endsection

@section('content')
  <main>
    <ul>
      @foreach($grades as $grade)
        <li style="
        background-color: white;
        padding: 30px;
        border-radius: 10px;
        ">
          Course name:{{ $grade->course_name }}
          <br>
          Test name: {{ $grade->test_name }}
          <br>
          Lowest passing grade: {{ $grade->lowest_passing_grade }}
          <br>
          Best grade: {{ $grade->best_grade }}
          <form method="POST" action="{{ route('grades.show', $grade) }}">
            @csrf
            @method('DELETE')
            <button class="button is-danger is-outlined" type="submit">Delete</button>
          </form>
        </li>
        <br>
      @endforeach
    </ul>
  </main>
@endsection
