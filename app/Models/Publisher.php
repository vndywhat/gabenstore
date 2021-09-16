<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'description',
    ];

    /**
     * Get the publisher's image.
     */
    public function poster(): \Illuminate\Database\Eloquent\Relations\MorphOne
    {
        return $this->morphOne(Image::class, 'imageable')
            ->where('images.imageable_bundle', '=', 'poster');
    }
}
