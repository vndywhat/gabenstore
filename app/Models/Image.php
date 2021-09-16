<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_name', 'imageable_bundle',
    ];

    protected $appends = [
        'url'
    ];

    /**
     * Get the parent imageable model.
     */
    public function imageable(): \Illuminate\Database\Eloquent\Relations\MorphTo
    {
        return $this->morphTo();
    }

    public function getUrlAttribute()
    {
        $imageableType = explode('\\', $this->imageable_type);
        $entityDir = Str::plural(Str::lower(end($imageableType)));

        $filePath = $entityDir . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . $this->file_name;

        if (Storage::disk('public')->exists($filePath)) {
            return Storage::disk('public')->url($filePath);
        }

        return 'no-image';
    }
}
