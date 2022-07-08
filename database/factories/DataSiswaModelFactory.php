<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\dataSiswaModel;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\dataSiswaModel>
 */
class DataSiswaModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = dataSiswaModel::class;
    public function definition()
    {
        return [
            'jurusan_model_id' => random_int(1, 10),
            'nis' => 234234, 
            'nama' => $this->faker->name,
            'point' => 0
        ];
    }
}
