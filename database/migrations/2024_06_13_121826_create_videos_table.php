<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('videos', static function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->string('youtube')->unique();

            $table->string('title');
            $table->string('channel');
            $table->string('thumbnail');
            $table->string('status');
            $table->text('description');

            $table->timestamp('published_at');
            $table->timestamp('actual_start_time');
            $table->timestamp('actual_end_time');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
