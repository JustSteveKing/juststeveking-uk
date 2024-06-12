<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Article;
use App\Models\Partner;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

final class ArticleFactory extends Factory
{
    /** @var class-string<Model> */
    protected $model = Article::class;

    /** @return array<string,mixed> */
    public function definition(): array
    {
        $partner = $this->faker->boolean();
        $published = $this->faker->boolean();

        return [
            'name' => $name = $this->faker->sentence(),
            'slug' => null,
            'description' => $this->faker->realText(
                maxNbChars: 160,
            ),
            'canonical_url' => $partner
                ? $this->faker->url()
                : null,
            'image' => $this->faker->imageUrl(
                word: $name,
            ),
            'ai_summary' => null,
            'content' => $this->faker->realText(
                maxNbChars: $this->faker->numberBetween(
                    int1: 1_000,
                    int2: 2_000,
                ),
            ),
            'partner_id' => $partner
                ? Partner::factory()
                : null,
            'published_at' => $published
                ? $this->faker->dateTimeThisMonth()
                : null,
        ];
    }
}
