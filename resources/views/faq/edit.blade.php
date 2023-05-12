@extends('layout')

@section('title')
    Edit FAQ
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
@endsection

@section('content')
    <main>
        <h1 class="has-text-weight-semibold is-size-1">Create FAQ</h1>
        <div id="wrapper">
            <br>
            <form method="POST" action="{{ route('faq.show', $faq) }}">
                @csrf
                @method('PUT')
                <label class="label" for="question">Question</label>
                
                <div class="control">
                    <input
                        class="input @error('question') is-danger @enderror"
                        type="text"
                        name="question"
                        id="question"
                        value="{{ $faq->question }}">
                </div>
                @error('question')
                    <p class="help is-danger">{{ $errors->first('question') }}</p>
                @enderror
                
                <div class="field">
                    <label class="label" for="answer">Answer</label>
                    
                    <div class="control">
                        <textarea
                            class="textarea @error('answer') is-danger @enderror"
                            name="answer"
                            id="answer"
                        >{{ $faq->answer }}</textarea>
                    </div>
                    @error('answer')
                        <p class="help is-danger">{{ $errors->first('answer') }}</p>
                    @enderror
                </div>
                
                <div class="field">
                    <label class="label" for="body">Link</label>
                    
                    <div class="control">
                        <textarea
                            class="textarea"
                            name="link"
                            id="link"
                        >{{ $faq->link }}</textarea>
                    </div>
                </div>
                
                <div class="field">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>
            </form>
            <br>
            <form method="POST" action="{{ route('faq.show', $faq) }}">
                @csrf
                @method('DELETE')
                <button class="button is-danger is-outlined" type="submit">Delete</button>
            </form>
        </div>
    </main>
@endsection