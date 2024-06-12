<?php

declare(strict_types=1);

namespace App\Providers;

use App\Services\Ollama\Ollama;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

final class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(
            abstract: Ollama::class,
            concrete: fn () => new Ollama(
                request: Http::baseUrl(
                    url: config('services.ollama.url'),
                )->timeout(
                    seconds: 60,
                ),
            ),
        );
    }

    public function boot(): void
    {
        Model::shouldBeStrict();
    }
}
