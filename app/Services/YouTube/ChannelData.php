<?php

declare(strict_types=1);

namespace App\Services\YouTube;

use Carbon\Carbon;

final class ChannelData
{
    public function __construct(
        public string $title,
        public string $platformId,
        public string $youTubeCustomUrl,
        public string $name,
        public string $description,
        public Carbon $onPlatformSince,
        public string $thumbnailUrl,
        public string $country,
    ) {
    }

    public static function fake(): ChannelData
    {
        return new self(
            title: 'My Test Channel',
            platformId: '1234',
            youTubeCustomUrl: 'test',
            name: 'My Channel Name',
            description: 'Some description',
            onPlatformSince: \Illuminate\Support\Carbon::now()->subYears(
                value: 2,
            ),
            thumbnailUrl: 'my-new-thumbnail-url',
            country: 'US',
        );
    }

    public function prepareForModel(): array
    {
        return [
            'platform_id' => $this->platformId,
            'youtube_custom_url' => $this->youTubeCustomUrl,
            'name' => $this->name,
            'description' => $this->description,
            'on_platform_since' => $this->onPlatformSince,
            'thumbnail_url' => $this->thumbnailUrl,
            'country' => $this->country,
        ];
    }
}
