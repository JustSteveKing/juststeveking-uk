<?php

declare(strict_types=1);

namespace App\Observers;

use App\Models\Partner;
use Illuminate\Support\Str;

final class PartnerObserver
{
    public function creating(Partner $partner): void
    {
        $partner->slug = Str::slug(
            title: $partner->name,
        );
    }
}
