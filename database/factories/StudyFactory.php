<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\StudySession;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Study>
 */
class StudyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory()->create(),
            'category_id' => Category::factory()->create(),
            'study_session_id' => StudySession::factory()->create(),
            'start_time' => fake()->dateTime(),
            'end_time' => fake()->dateTime(),
            'total_time' => fake()->time()
        ];
    }
}
