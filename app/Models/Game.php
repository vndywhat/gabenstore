<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Game
 *
 * @property int $id
 * @property string $title
 * @property string|null $about
 * @property string $platform
 * @property mixed|null $trailers
 * @property mixed|null $system_requirements
 * @property int|null $activation_service_id
 * @property int $price
 * @property int|null $discount
 * @property string|null $released_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\GameFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Game newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Game newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Game query()
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereAbout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereActivationServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game wherePlatform($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereReleasedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereSystemRequirements($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereTrailers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Game extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'about',
        'platform',
        'trailers',
        'system_requirements',
        'activation_service_id',
        'price',
        'discount',
        'released_at',
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the game's image.
     */
    public function poster(): \Illuminate\Database\Eloquent\Relations\MorphOne
    {
        return $this->morphOne(Image::class, 'imageable')
            ->where('images.imageable_bundle', '=', 'poster');
    }

    public function activationService(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(ActivationService::class);
    }
}
