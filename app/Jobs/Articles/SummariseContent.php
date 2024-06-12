<?php

declare(strict_types=1);

namespace App\Jobs\Articles;

use App\Models\Article;
use App\Services\Ollama\Ollama;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\DatabaseManager;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

final class SummariseContent implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    public function __construct(
        public readonly Article $article
    ) {
    }

    public function handle(Ollama $ollama, DatabaseManager $database): void
    {
        $response = $ollama->generate(
            content: $this->article->content,
        );

        $database->transaction(
            callback: fn () => $this->article->update(
                attributes: [
                    'ai_summary' => $response['response'],
                ],
            ),
            attempts: 3,
        );
    }
}
