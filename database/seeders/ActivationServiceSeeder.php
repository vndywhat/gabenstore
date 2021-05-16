<?php

namespace Database\Seeders;

use App\Models\ActivationService;
use Illuminate\Database\Seeder;

class ActivationServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activationServices = [
            [
                'name' => 'Steam',
            ],
            [
                'name' => 'Ubisoft Connect',
            ],
            [
                'name' => 'Rockstar Games',
            ],
            [
                'name' => 'Epic Games Store',
            ],
        ];

        foreach ($activationServices as $activationService) {
            ActivationService::create($activationService);
        }

    }
}
