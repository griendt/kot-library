<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Base
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $identifier
 * @property string $map
 * @property int $hasGravity
 * @property int $hasTrampoline
 * @property int $hasPlatform
 * @property int $hasDoublePlatform
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Base whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Base whereHasDoublePlatform($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Base whereHasGravity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Base whereHasPlatform($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Base whereHasTrampoline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Base whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Base whereIdentifier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Base whereMap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Base whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Base extends Model
{

}
