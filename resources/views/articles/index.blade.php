@extends ('layout')

@section('css')
    <link rel="stylesheet" href="/css/blog.css">
@endsection

@section('title')
    Articles
@endsection

@section ('content')
    <main>
        @foreach($articles as $article)
            <article>
                <h3>{{ $article->title }}</h3>
                <p>
                    <a href=" {{ route('articles.show', $article) }}">
                        {{ $article->excerpt }}
                    </a>
                </p>
            </article>
        @endforeach
        <a href="{{ route("articles.create") }}">
            <button>Create Blog</button>
        </a>
    </main>
@endsection
