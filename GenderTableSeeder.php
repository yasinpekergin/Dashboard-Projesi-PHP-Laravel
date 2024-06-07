<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $genders=[
            ['name' => 'Male'],
            ['name' => 'Female'],
        ];

        foreach ($genders as $key => $gender) {
            Gender::create($gender);
        }
    }
}
