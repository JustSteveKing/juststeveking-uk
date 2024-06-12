<?php

declare(strict_types=1);

namespace App\Models;

use App\Observers\PartnerObserver;
use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property string $id
 * @property string $name
 * @property string $slug
 * @property string $logo
 * @property null|string $description
 * @property bool $active
 * @property null|CarbonInterface $created_at
 * @property null|CarbonInterface $updated_at
 * @property Collection<Article> $articles
 */
#[ObservedBy(classes: PartnerObserver::class)]
final class Partner extends Model
{
    use HasFactory;
    use HasUlids;

    /** @var array<int,string> */
    protected $fillable = [
        'name',
        'slug',
        'logo',
        'description',
        'active',
    ];

    /** @return HasMany<Article> */
    public function articles(): HasMany
    {
        return $this->hasMany(
            related: Article::class,
            foreignKey: 'partner_id',
        );
    }

    /** @return array<string,string> */
    protected function casts(): array
    {
        return [
            'active' => 'boolean',
        ];
    }
}
