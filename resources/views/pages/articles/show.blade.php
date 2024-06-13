<x-layouts.page title="{{ $article->name }} | {{ config('site.title') }}" description="{{ $article->description }}">
    <p>{{ $article->name }}</p>

    <div class="mx-auto max-w-7xl px-4 py-2">
        <img src="{{ $article->image }}" alt="{{ $article->name }}" class="h-full w-auto object-contain" />
    </div>

    {!! str($article->ai_summary)->markdown() !!}
    <hr />
    <article class="prose prose-2xl prose-h2:text-slate-900 dark:prose-h2:text-slate-50">
        <x-markdown>
            {!! $article->content !!}
        </x-markdown>
    </article>
    <hr />
{{--    <p>{{ $article->partner->name }}</p>--}}
</x-layouts.page>
