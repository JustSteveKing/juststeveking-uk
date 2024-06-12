<?php

declare(strict_types=1);

use App\Enums\CacheKeys;
use App\Enums\CacheTtl;
use App\Models\Article;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Cache;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {
    #[Computed]
    public function articles(): Collection
    {
        return Article::query()->with(
            relations: ['partner'],
        )->latest()->whereNotNull(
            columns: ['published_at'],
        )->limit(3)->get();
//        return Cache::remember(
//            key: CacheKeys::LatestArticles->value,
//            ttl: CacheTtl::Day->value,
//            callback: static fn(): Collection => Article::query()->with(
//                relations: ['partner'],
//            )->whereHas(
//                relation: 'partner',
//                callback: fn(Builder $builder): Builder => $builder->where(
//                    column: 'active',
//                    operator: '=',
//                    value: true,
//                )
//            )->latest()->whereNotNull(
//                columns: ['published_at'],
//            )->limit(3)->get(),
//        );
    }
}; ?>

<div class="py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">
            From the blog
        </h2>
        <p class="mt-2 text-lg leading-8">
            Learn how to grow your business with our expert advice.
        </p>
        <div class="mt-16 space-y-20 lg:mt-20 lg:space-y-20">
            @foreach ($this->articles as $article)
                <x-articles.card
                    :article="$article"
                />
            @endforeach
        </div>
    </div>
</div>
