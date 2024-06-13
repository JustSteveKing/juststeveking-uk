<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

final class VideoFactory extends Factory
{
    /** @var class-string<Model> */
    protected $model = Video::class;

    /** @return array<string,mixed> */
    public function definition(): array
    {
        return [
            'youtube' => $this->faker->uuid(),
            'title' => $this->faker->sentence(),
            'channel' => $this->faker->company(),
            'thumbnail' => $this->faker->imageUrl(),
            'status' => 'finished',
            'description' => $this->faker->paragraph(),
            'published_at' => $this->faker->dateTime(),
            'actual_start_time' => $start = Carbon::parse(
                time: $this->faker->dateTime(),
            ),
            'actual_end_time' => $start->addHours(2),
        ];
    }
}
