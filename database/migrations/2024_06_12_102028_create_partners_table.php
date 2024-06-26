<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('partners', static function (Blueprint $table): void {
            $table->ulid('id')->primary();

            $table->string('name'); // Laravel News
            $table->string('slug')->unique(); // laravel-news
            $table->string('logo'); // URL to logo
            $table->text('description')->nullable();

            $table->boolean('active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('partners');
    }
};
