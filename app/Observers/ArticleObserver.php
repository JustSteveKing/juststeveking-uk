<?php

declare(strict_types=1);

namespace App\Observers;

use App\Jobs\Articles\SummariseContent;
use App\Models\Article;
use Illuminate\Contracts\Bus\Dispatcher;
use Illuminate\Support\Str;

final readonly class ArticleObserver
{
    public function __construct(
        private Dispatcher $bus,
    ) {}

    public function creating(Article $article): void
    {
        $article->slug = Str::slug(
            title: $article->name,
        );
    }

    public function created(Article $article): void
    {
        $this->bus->dispatch(
            command: new SummariseContent(
                article: $article,
            ),
        );
    }
}
