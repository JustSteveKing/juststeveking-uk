<x-layouts.page title="{{ $article->name }} | {{ config('site.title') }}" description="{{ $article->description }}">
    <p>{{ $article->name }}</p>

    {!! str($article->ai_summary)->markdown() !!}
    <hr />
    {!! $article->content !!}
    <hr />
    <p>{{ $article->partner->name }}</p>
</x-layouts.page>
