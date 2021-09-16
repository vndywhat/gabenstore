<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = 'publishers/database/publishers.json';
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
                    'description' => null,
                ];
                $publisher = Publisher::create($attributes);
                $publisher->poster()->create([
                    'file_name' => $imageFileName,
                    'imageable_bundle' => 'poster',
                ]);
            }
        }
    }
}
