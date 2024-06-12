<?php

declare(strict_types=1);

namespace App\Models;

use App\Observers\ArticleObserver;
use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property string $id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property null|string $canonical_url
 * @property null|string $image
 * @property null|string $ai_summary
 * @property string $content
 * @property null|string $partner_id
 * @property null|CarbonInterface $published_at
 * @property null|CarbonInterface $created_at
 * @property null|CarbonInterface $updated_at
 * @property Partner $partner
 */
#[ObservedBy(classes: ArticleObserver::class)]
final class Article extends Model
{
    use HasFactory;
    use HasUlids;

    /** @var array<int,string> */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'canonical_url',
        'image',
        'ai_summary',
        'content',
        'partner_id',
        'published_at',
    ];

    /** @return BelongsTo<Partner> */
    public function partner(): BelongsTo
    {
        return $this->belongsTo(
            related: Partner::class,
            foreignKey: 'partner_id',
        );
    }

    /** @return array<string,string> */
    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
        ];
    }
}
