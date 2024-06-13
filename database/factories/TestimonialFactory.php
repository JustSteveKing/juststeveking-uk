<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

final class TestimonialFactory extends Factory
{
    /** @var class-string<Model> */
    protected $model = Testimonial::class;

    /** @return array<string,mixed> */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'role' => $this->faker->jobTitle(),
            'company' => $this->faker->company(),
            'avatar' => $this->faker->imageUrl(),
            'content' => $this->faker->paragraph(),
        ];
    }
}
