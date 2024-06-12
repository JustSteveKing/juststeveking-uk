@props(['article'])

<article class="relative isolate flex flex-col gap-8 lg:flex-row">
    <div class="relative aspect-[16/9] sm:aspect-[2/1] lg:aspect-square lg:w-64 lg:shrink-0">
        <img
            src="{{ $article->image }}"
            alt="" class="absolute inset-0 h-full w-full rounded-2xl bg-gray-50 object-cover">
        <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
    </div>
    <div>
        <div class="flex items-center gap-x-4 text-xs">
            <time datetime="{{ $article->published_at->toDatetimeString() }}" class="">
                {{ $article->published_at->diffForHumans() }}
            </time>
            @if ($article->partner)
                <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">
                    {{ $article->partner->name }}
                </a>
            @endif
        </div>
        <div class="group relative max-w-xl">
            <h3 class="mt-3 text-lg font-semibold leading-6 group-hover:text-slate-200 dark:group-hover:text-slate-700">
                <a wire:navigate href="{{ route('pages:articles:show', $article->slug) }}">
                    <span class="absolute inset-0"></span>
                    {{ $article->name }}
                </a>
            </h3>
            <p class="mt-5 text-sm leading-6">
                {{ $article->description }}
            </p>
        </div>
    </div>
</article>
