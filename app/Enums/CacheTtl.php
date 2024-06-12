<?php

declare(strict_types=1);

namespace App\Enums;

enum CacheTtl: int
{
    case Hour = 3600;
    case Day = 86400;
}
