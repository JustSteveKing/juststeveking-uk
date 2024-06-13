<?php

declare(strict_types=1);

namespace App\Services\YouTube;

use Carbon\Carbon;

final class StreamData
{
    public const string STATUS_UPCOMING = 'upcoming';

    public const string STATUS_LIVE = 'live';

    public const string STATUS_FINISHED = 'finished';

    public const string STATUS_DELETED = 'deleted';

    public function __construct(
        public string $videoId,
        public string $title,
        public string $channelId,
        public string $channelTitle,
        public string $description,
        public string $thumbnailUrl,
        public Carbon $publishedAt,
        public Carbon $plannedStart,
        public ?Carbon $actualStartTime,
        public ?Carbon $actualEndTime,
        public string $status,
    ) {
    }

    public function toArray(): array
    {
        return [
            'youtube' => $this->videoId,
            'title' => $this->title,
            'channel' => $this->channelTitle,
            'thumbnail' => $this->thumbnailUrl,
            'status' => $this->status,
            'description' => $this->description,
            'published_at' => $this->publishedAt,
            'actual_start_time' => $this->actualStartTime,
            'actual_end_time' => $this->actualEndTime,
        ];
    }

    public function isLive(): bool
    {
        return self::STATUS_LIVE === $this->status;
    }
}
