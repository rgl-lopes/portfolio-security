@extends ('layout')

@section('title')
    FAQ
@endsection

@section ('content')
<main>
    <section>
        @foreach($faqs as $faq)
            <details>
                <summary>{{ $faq->question }}</summary>
                <p class="faqp">{{ $faq->answer }}</p>
                <p class="faqp" style="font-weight: bold">Link: {{ $faq->link }}</p>
                <br>
                <a href="{{ route("faq.edit", $faq) }}">
                    <button>Edit</button>
                </a>
            </details>
        @endforeach
    </section>
    <br>
    <a href="{{ route("faq.create") }}">
        <button>Create FAQ</button>
    </a>
</main>
@endsection