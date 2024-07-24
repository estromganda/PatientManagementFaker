<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends BaseFactory
{
    protected $table = "Doctor";
    protected static $lsDoctor = [];
    protected static $doctorCount = 0;
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
            "address" => fake()->address(),
            "contact" => fake()->phoneNumber()
        ];
    }
}
