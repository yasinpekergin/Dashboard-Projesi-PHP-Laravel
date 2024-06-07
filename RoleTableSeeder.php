<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Add Permissions to the Role Table
        $Roles=[
            ['name' => 'Guest','guard_name' => 'web'],
            ['name' => 'Administrator','guard_name' => 'web'],
            ['name' => 'Super-Administrator','guard_name' => 'web']
        ];

        foreach ($Roles as $key => $Role) {
            Role::create($Role);
        }
    }
}
