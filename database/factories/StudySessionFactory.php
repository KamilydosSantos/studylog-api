<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudySession>
 */
class StudySessionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory()->create()->id,
            'description' => fake()->text(200),
            'study_date' => fake()->dateTime(),
            'total_study_time' => fake()->time(),
            'is_posted' => fake()->boolean(),
            'posted_at' => fake()->dateTime()
        ];
    }
}
