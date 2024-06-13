<?php

namespace App\Filament\Resources\ArticleResource\Widgets;

use App\Models\Article;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $articles = Article::query()->get();
        return [
            Stat::make(
                label: 'Total Articles',
                value: $articles->count(),
            ),
            Stat::make(
                label: 'Summarized Articles',
                value: $articles->filter(
                    callback: fn (Article $article) => $article->ai_summary !== null,
                )->count(),
            ),
        ];
    }
}
