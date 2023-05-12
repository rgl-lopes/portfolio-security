@extends('layout')

@section('title')
    Edit Article
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
@endsection

@section('content')
    <main>
        <h1 class="has-text-weight-semibold is-size-1">Update Article</h1>
        <div id="wrapper">
            <br>
            <form method="POST" action="{{ route('articles.show', $article) }}">
                @csrf
                @method('PUT')
                <label class="label" for="title">Title</label>
                
                <div class="control">
                    <input
                        class="input @error('title') is-danger @enderror"
                        type="text"
                        name="title"
                        id="title"
                        value="{{ $article->title }}">
                </div>
                
                @error('title')
                    <p class="help is-danger">{{ $errors->first('title') }}</p>
                @enderror
                
                <div class="field">
                    <label class="label" for="excerpt">Excerpt</label>
                    
                    <div class="control">
                        <textarea
                            class="textarea @error('excerpt') is-danger @enderror"
                            name="excerpt"
                            id="excerpt"
                        >{{ $article->excerpt }}</textarea>
                    </div>
    
                    @error('excerpt')
                        <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
                    @enderror
                </div>
                
                <div class="field">
                    <label class="label" for="body">Body</label>
                    
                    <div class="control">
                        <textarea
                            class="textarea @error('body') is-danger @enderror"
                            name="body"
                            id="body"
                        >{{ $article->body }}</textarea>
                    </div>
    
                    @error('body')
                        <p class="help is-danger">{{ $errors->first('body') }}</p>
                    @enderror
                </div>
                
                <div class="field">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>
            </form>
            <br>
            <form method="POST" action="{{ route('articles.show', $article) }}">
                @csrf
                @method('DELETE')
                <button class="button is-danger is-outlined" type="submit">Delete</button>
            </form>
        </div>
    </main>
@endsection