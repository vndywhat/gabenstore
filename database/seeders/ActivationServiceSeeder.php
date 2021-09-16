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
                'name' => 'Bethesda.net',
            ],
            [
                'name' => 'Epic Games Store',
            ],
            [
                'name' => 'Origin',
            ],
            [
                'name' => 'Rockstar Games',
            ],
            [
                'name' => 'Steam',
            ],
            [
                'name' => 'Ubisoft Connect',
            ],
        ];

        foreach ($activationServices as $activationService) {
            ActivationService::create($activationService);
        }

    }
}
