@extends('layout')

@section('title')
    Create Article
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
@endsection

@section('content')
    <main>
        <h1 class="has-text-weight-semibold is-size-1">Create Article</h1>
        <div id="wrapper">
            <br>
            <form method="POST" action="{{ route('articles.index') }}">
                @csrf
                <label class="label" for="title">Title</label>
                
                <div class="control">
                    <input
                        class="input @error('title') is-danger @enderror"
                        type="text"
                        name="title"
                        id="title"
                        value="{{ old('title') }}">
                    @error('title')
                        <p class="help is-danger">{{ $errors->first('title') }}</p>
                    @enderror
                </div>
                
                <div class="field">
                    <label class="label" for="excerpt">Excerpt</label>
                    
                    <div class="control">
                        <textarea
                            class="textarea @error('excerpt') is-danger @enderror"
                            name="excerpt"
                            id="excerpt"
                        >{{ old('excerpt') }}</textarea>
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
                        >{{ old('body') }}</textarea>
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
        </div>
    </main>
@endsection