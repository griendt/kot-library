<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Layout
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $identifier
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LayoutExploit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LayoutExploit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LayoutExploit whereIdentifier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LayoutExploit whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Role extends Model
{
    protected $guarded = [];
}
