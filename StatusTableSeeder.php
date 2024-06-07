<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $Status=[
            ['name' => 'Passive'],
            ['name' => 'Active'],
            ['name' => 'Blocked']
        ];

        foreach ($Status as $key => $Status) {
            Status::create($Status);
        }
    }
}
