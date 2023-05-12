@extends ('layout')

@section('css')
    <link rel="stylesheet" href="/css/blog.css">
@endsection

@section('title')
    Article
@endsection

@section ('content')
    <main>
        <h1>{{$article->title}}</h1>
        <br>
        <p>{{$article->body}}</p>
        <br>
            <a href="{{ route('articles.edit', $article) }}">
                <button>Edit</button>
            </a>
    </main>
@endsection