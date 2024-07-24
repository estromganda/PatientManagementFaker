<?php

namespace Database\Factories;

use Faker\Provider\Lorem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admission>
 */
class AdmissionFactory extends BaseFactory
{
    protected $table = "Admission";
    protected static $patientFactory = null;
    protected static $doctorFactory = null;
    protected static $roomFactory = null;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        if(AdmissionFactory::$patientFactory == null){
            AdmissionFactory::$patientFactory = new PatientFactory();
        }
        if(AdmissionFactory::$doctorFactory == null){
            AdmissionFactory::$doctorFactory = new DoctorFactory();
        }
        if(AdmissionFactory::$roomFactory == null){
            AdmissionFactory::$roomFactory = new RoomFactory();
        }
        $patient = AdmissionFactory::$patientFactory->getData();
        $doctor = AdmissionFactory::$doctorFactory->getData();
        $room = AdmissionFactory::$roomFactory->getData();
        $exitDate = fake()->date();
        return [
            "patientId" => $patient->id,
            "doctorId" => $doctor->id,
            "roomId" => $room->id,
            "arrivalDate" => fake()->date('Y-m-d', $exitDate),
            "exitDate" => $exitDate,
            "report" => Lorem::sentences(5, true)
        ];
    }
}
