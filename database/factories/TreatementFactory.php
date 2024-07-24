<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Treatement>
 */
class TreatementFactory extends Factory
{
    protected static $consultationFactory = null;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        if(TreatementFactory::$consultationFactory == null){
            TreatementFactory::$consultationFactory = new ConsultationFactory();
        }
        $consultation = TreatementFactory::$consultationFactory->getData();
        
        return [
            "drug" => strtoupper(fake()->words(3, true)),
            "dose" => fake()->words(2, true),
            "duration" => random_int(1, 10) . " Jours",
            "consultationId" => $consultation->id
        ];
    }
}
