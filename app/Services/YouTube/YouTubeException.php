<?php

declare(strict_types=1);

namespace App\Services\YouTube;

use Exception;

final class YouTubeException extends Exception
{
    public static function general(int $status, string $message = ''): YouTubeException
    {
        return new self("YouTube API error: {$status} - {$message}");
    }

    public static function unknownChannel(string $id): YouTubeException
    {
        return new self("Unknown YouTube channel: {$id}");
    }

    public static function unknownVideo(string $id): YouTubeException
    {
        return new self("Unknown YouTube video: {$id}");
    }
}
