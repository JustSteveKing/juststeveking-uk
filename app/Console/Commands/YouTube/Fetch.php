<?php

declare(strict_types=1);

namespace App\Console\Commands\YouTube;

use App\Models\Video;
use App\Services\YouTube\Client;
use App\Services\YouTube\StreamData;
use Illuminate\Console\Command;
use Symfony\Component\Console\Attribute\AsCommand;
use function config;

#[AsCommand(name: 'youtube:fetch', description: 'Fetch YouTube videos')]
final class Fetch extends Command
{
    public function handle(Client $youtube): void
    {
        $streams = $youtube->streams(
            channelId: config('services.youtube.channel'),
        );

        /** @var StreamData $stream */
        foreach ($streams as $stream) {
            Video::query()->updateOrCreate(
                attributes: [
                    'youtube' => $stream->videoId,
                ],
                values: $stream->toArray(),
            );
        }
    }
}
