<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    // Specify the model this factory is for
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),  // Generate a random sentence for the title
            'description' => $this->faker->paragraph,  // Generate a random paragraph for the description
            'long_description' => $this->faker->optional()->paragraph(5),  // Long description, optional
            'completed' => $this->faker->boolean(50),  // Random true/false (50% chance)
        ];
    }
}
