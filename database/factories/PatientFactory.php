<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends BaseFactory
{
    protected $table = "Patient";
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "firstName" => fake()->firstName(),
            "lastName" => fake()->lastName(),
            "birthday" => fake()->date(),
            "address" => fake()->address(),
            "contact" => fake()->phoneNumber()
        ];
    }
}
