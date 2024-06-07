<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Profile;
use App\Models\Experience;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleTableSeeder;
use Database\Seeders\CountriesTableSeeder;
use Database\Seeders\PermissionTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        //  Experience::factory(10)->create();
        //  Profile::factory(10)->create();

        // Create Defaul Settings
        // $this->call(GenderTableSeeder::class);
        // $this->call(SocialTableSeeder::class);
        // $this->call(StatusTableSeeder::class);
        // $this->call(RoleTableSeeder::class);
        // $this->call(PermissionTableSeeder::class);
        // UserTableSeeder::CreateAdminUser();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
