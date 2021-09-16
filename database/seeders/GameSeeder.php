<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = 'games/database/games.json';
        if(Storage::disk('public')->exists($path)) {
            $database = json_decode(Storage::disk('public')->get($path), true);
            foreach ($database as $item) {
                $parsedUrl = explode('/', $item['url']);
                $slug = end($parsedUrl);
                $parsedImageUrl = explode('/', $item['image']);
                $imageFileName = end($parsedImageUrl);
                unset($parsedUrl, $parsedImageUrl);
                $attributes = [
                    'title' => $item['title'],
                    'slug' => $slug,
                    'about' => null,
                    'platform' => 'PC',
                    'trailers' => null,
                    'system_requirements' => null,
                    'activation_service_id' => random_int(1, 6),
                    'price' => $item['priceCurrent'],
                    'discount' => (int) $item['priceDiscount'],
                    'released_at' => now(),
                ];
                $game = Game::create($attributes);
                $game->poster()->create([
                    'file_name' => $imageFileName,
                    'imageable_bundle' => 'poster',
                ]);
            }
        }
    }
}
