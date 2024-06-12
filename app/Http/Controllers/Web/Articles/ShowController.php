<?php

declare(strict_types=1);

namespace App\Http\Controllers\Web\Articles;

use App\Models\Article;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

final readonly class ShowController
{
    public function __construct(
        private Factory $factory,
    ) {}

    public function __invoke(Request $request, string $slug): View
    {
        $article = Article::query()->with(
            relations: ['partner'],
        )->where(
            column: 'slug',
            operator: '=',
            value: $slug,
        )->whereNotNull(
            columns: ['published_at'],
        )->firstOrFail();

        return $this->factory->make(
            view: 'pages.articles.show',
            data: [
                'article' => $article,
            ],
        );
    }
}
