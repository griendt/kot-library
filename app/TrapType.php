<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\TrapType
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $identifier
 * @property string $type
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TrapType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TrapType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TrapType whereIdentifier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TrapType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TrapType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TrapType extends Model
{
    protected $guarded = [];
}
