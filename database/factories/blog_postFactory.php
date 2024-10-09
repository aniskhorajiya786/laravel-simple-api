<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class blog_postFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title' => $this->faker->sentence ,
            'description' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'summary' => $this->faker->paragraph,
            'meta_data' => json_encode(['key1' => $this->faker->word, 'key2' => $this->faker->word]),
            'meta_description' => $this->faker->sentence,
            'author' => $this->faker->name,
            'created_at' => Carbon::now(), // Add created_at
            'updated_at' => Carbon::now(), // Add updated_at
        ];
    }
}
