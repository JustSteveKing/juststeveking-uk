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
    ) {}

    public static function fake(): StreamData
    {
        return new self(
            array_merge([
                'title' => 'My Test Stream',
                'channelId' => '1234',
                'channelTitle' => 'My Channel Name',
                'description' => 'Some description',
                'thumbnailUrl' => 'my-new-thumbnail-url',
                'publishedAt' => Carbon::tomorrow(),
                'plannedStart' => Carbon::tomorrow(),
                'actualStartTime' => Carbon::tomorrow(),
                'actualEndTime' => Carbon::tomorrow()->addHour(),
                'status' => static::STATUS_UPCOMING,
            ], $args)
        );
    }

    public function isLive(): bool
    {
        return self::STATUS_LIVE === $this->status;
    }
}
