<?php

namespace Database\Seeders;

use App\Models\Social;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SocialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $socials=[
            ['name' => 'facebook','logo_url' => ''],
            ['name' => 'Instagram','logo_url' => ''],
            ['name' => 'Whatsupp','logo_url' => ''] ,
            ['name' => 'twitter','logo_url' => ''],
            ['name' => 'YouTube','logo_url' => ''],
            ['name' => 'Pinterest','logo_url' => ''],
            ['name' => 'linkedin','logo_url' => ''],
        ];

        foreach ($socials as $key => $social) {
            Social::create($social);
        }
    }
}
