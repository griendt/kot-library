<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Pattern
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string $map
 * @property int|null $trap_1_identifier
 * @property int|null $trap_2_identifier
 * @property int|null $trap_3_identifier
 * @property int $needs_platform
 * @property int $needs_double_platform
 * @property int $needs_gravity
 * @property int $needs_trampoline
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pattern whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pattern whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pattern whereMap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pattern whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pattern whereNeedsDoublePlatform($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pattern whereNeedsGravity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pattern whereNeedsPlatform($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pattern whereNeedsTrampoline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pattern whereTrap1Identifier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pattern whereTrap2Identifier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pattern whereTrap3Identifier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pattern whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Pattern extends Model
{
    protected $guarded = [];
}
