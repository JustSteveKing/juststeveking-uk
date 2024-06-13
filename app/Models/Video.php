<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 * @property string $youtube
 * @property string $title
 * @property string $channel
 * @property string $thumbnail
 * @property string $status
 * @property string $description
 * @property null|CarbonInterface $published_at
 * @property null|CarbonInterface $actual_start_time
 * @property null|CarbonInterface $actual_end_time
 * @property null|CarbonInterface $created_at
 * @property null|CarbonInterface $updated_at
 */
final class Video extends Model
{
    use HasFactory;
    use HasUlids;

    /** @var array<int,string> */
    protected $fillable = [
        'youtube',
        'title',
        'channel',
        'thumbnail',
        'status',
        'description',
        'published_at',
        'actual_start_time',
        'actual_end_time',
    ];

    /** @return array<string,string> */
    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
            'actual_start_time' => 'datetime',
            'actual_end_time' => 'datetime',
        ];
    }
}
