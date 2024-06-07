<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //  User::factory(10)->create();


    }
    public static function CreateAdminUser(): void{
             // Create a new default Super-Administrator User
             $user=User::create([
                'name' => 'admin',
                'email' => 'admin@admin.com',

                'password' => Hash::make('12345678'),
            ]);
            // Default User Role and Permission
            $user->assignRole('Super-Administrator');
            $role=Role::where('id',3)->first();
            $role->givepermissionTo('full');

  }
}
