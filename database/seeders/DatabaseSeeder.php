<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        $this->call(ActivationServiceSeeder::class);
        $this->call(GameSeeder::class);
        $this->call(PublisherSeeder::class);
        $this->call(DeveloperSeeder::class);
    }
}
