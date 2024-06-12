<?php

declare(strict_types=1);

namespace App\Services\Ollama;

use Illuminate\Http\Client\PendingRequest;
use Throwable;

final readonly class Ollama
{
    public function __construct(
        private PendingRequest $request,
    ) {
    }

    public function generate(string $content): array
    {
        try {
            $response = $this->request->post(
                url: '/api/generate',
                data: [
                    'model' => \config('services.ollama.model'),
                    'prompt' => $content,
                    'system' => 'Summarise the following content to surface the main purpose of it, as well as any key points and highlights.',
                    'stream' => false,
                ],
            );
        } catch (Throwable $exception) {
            throw new OllamaException(
                message: $exception->getMessage(),
                code: $exception->getCode(),
                previous: $exception,
            );
        }

        return $response->json();
    }
}
