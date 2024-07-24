<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @template TModel of \Illuminate\Database\Eloquent\Model
 *
 * @method $this trashed()
 */
class BaseFactory extends Factory
{
    protected $table = "";
    protected $lsData = [];
    protected $dataCount = 0;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
        ];
    }

    public function getData() {
        if($this->dataCount == 0){
            $this->lsData = DB::table($this->table)->get()->toArray();
            $this->dataCount = count($this->lsData);
        }
        return $this->lsData[random_int(0,$this->dataCount - 1)];
    }
}
