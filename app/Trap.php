<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Trap
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $identifier
 * @property string $name
 * @property int $trap_type_identifier
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trap whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trap whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trap whereIdentifier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trap whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trap whereTrapTypeIdentifier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trap whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Trap extends Model
{
    protected $guarded = [];
}
