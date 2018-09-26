<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\PatternTag
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $tag_id
 * @property int $pattern_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PatternTag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PatternTag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PatternTag wherePatternId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PatternTag whereTagId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PatternTag whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PatternTag extends Model
{
    protected $guarded = [];
}
