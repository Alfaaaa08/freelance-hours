<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'title' => collect(fake()->words(5))->join(' '),
            'description' => htmlspecialchars(fake()->randomHtml()),
            'status' => fake()->dateTimeBetween('now', '+ 3 days'),
            'open' => fake()->randomElement(['open', 'closed']),
            'tech_stack' => fake()->randomElement(['react', 'php', 'laravel', 'vue', 'tailwind', 'javascript']),
            'created_by' => User::factory()
        ];
    }
}