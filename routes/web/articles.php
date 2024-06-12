<?php

declare(strict_types=1);

use App\Http\Controllers\Web\Articles;
use Illuminate\Support\Facades\Route;

Route::get('{slug}', Articles\ShowController::class)->name('show');
