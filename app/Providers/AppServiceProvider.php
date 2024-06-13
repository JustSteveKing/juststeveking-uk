<?php

declare(strict_types=1);

namespace App\Providers;

use App\Services\Ollama\Ollama;
use App\Services\YouTube\YouTubeException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Client\Factory;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;
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

        Http::macro('youtube', function (string $url, array $params = [], ?string $key = null): Collection {
            /** @var Factory $this */
            return $this
                ->asJson()
                ->baseUrl('https://youtube.googleapis.com/youtube/v3/')
                ->get($url, array_merge($params, [
                    'key' => config('services.youtube.key'),
                ]))
                ->onError(fn (Response $response) => throw YouTubeException::general($response->status(), $response->body()))
                ->collect($key);
        });
    }
}
