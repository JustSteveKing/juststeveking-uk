<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Partner;
use Illuminate\Database\Eloquent\Factories\Factory;

final class PartnerFactory extends Factory
{
    protected $model = Partner::class;

    public function definition(): array
    {
        return [
            'name' => $name = $this->faker->company(),
            'slug' => null,
            'logo' => $this->faker->imageUrl(
                word: $name,
            ),
            'description' => $this->faker->realText(),
            'active' => $this->faker->boolean(),
        ];
    }
}
