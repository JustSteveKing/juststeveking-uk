<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('articles', static function (Blueprint $table): void {
            $table->ulid('id')->primary();

            $table->string('name'); // Url Slug Here
            $table->string('slug')->unique(); // https://www.juststeveking.uk/articles/url-slug-here
            $table->string('description', 160); // SEO description
            $table->string('canonical_url')->nullable(); // https://www.laravel-news.com/some-url
            $table->string('image')->nullable();

            $table->text('ai_summary')->nullable(); // Generated on save
            $table->text('content'); // content of the article

            $table
                ->foreignUlid('partner_id')
                ->nullable()
                ->index()
                ->constrained('partners')
                ->cascadeOnDelete();

            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
