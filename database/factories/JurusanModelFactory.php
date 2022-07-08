<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\jurusanModel;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\jurusanModel>
 */
class JurusanModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = jurusanModel::class;
    public function definition()
    {
        return [
            'jurusan' => $this->faker->name,
            'kelas' => \random_int(10, 11),
            'group' => \random_int(1, 5),
            'logo' => 'nesas.png'
        ];
    }
}
