<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Consultation>
 */
class ConsultationFactory extends BaseFactory
{
    protected $table = "Consultation";
    protected static $patientFactory = null;
    protected static $doctorFactory = null;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        if(ConsultationFactory::$patientFactory == null){
            ConsultationFactory::$patientFactory = new PatientFactory();
        }
        if(ConsultationFactory::$doctorFactory == null){
            ConsultationFactory::$doctorFactory = new DoctorFactory();
        }
        $patient = ConsultationFactory::$patientFactory->getData();
        $doctor = ConsultationFactory::$doctorFactory->getData();

        return [
            "date" => fake()->date(),
            "patientId" => $patient->id,
            "doctorId" => $doctor->id,
            "objet" => strtoupper(fake()->sentence(5, true)),
            "note" => fake()->sentences(3, true)
        ];
    }
}
