<?php

namespace Database\Seeders;

use App\Models\jurusanModel;
use App\Models\dataSiswaModel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\jurusanModel::factory(10)->make();

        \App\Models\dataSiswaModel::factory(100)->make();
    }
}
