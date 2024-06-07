<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
              // Add Permissions to the Permission Table
              $Permissions=[
                ['name' => 'List','guard_name' => 'web'],
                ['name' => 'Delete','guard_name' => 'web'],
                ['name' => 'Update','guard_name' => 'web'],
                ['name' => 'insert','guard_name' => 'web'],
                ['name' => 'full','guard_name' => 'web']
            ];

            foreach ($Permissions as $key => $Permission) {
                Permission::create($Permission);
            }
    }
}
