<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ActivationService
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ActivationService newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ActivationService newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ActivationService query()
 * @method static \Illuminate\Database\Eloquent\Builder|ActivationService whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActivationService whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActivationService whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActivationService whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ActivationService extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];
}
