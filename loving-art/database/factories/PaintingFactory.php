<?php

namespace Database\Factories;

use App\Models\Artist;
use App\Models\ArtPeriod;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Painting>
 */
class PaintingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'artist_id' => Artist::factory(),
            'art_period_id' => ArtPeriod::factory(),
            'title' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'year' => $this->faker->year()
        ];
    }
}
