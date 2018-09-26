<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Layout
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $base_identifier
 * @property int $trap_1_identifier
 * @property int $trap_2_identifier
 * @property int $trap_3_identifier
 * @property string $design_picture
 * @property string $design_solution
 * @property string $design_comment
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Layout whereBaseIdentifier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Layout whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Layout whereDesignComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Layout whereDesignPicture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Layout whereDesignSolution($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Layout whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Layout whereTrap1Identifier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Layout whereTrap2Identifier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Layout whereTrap3Identifier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Layout whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Layout extends Model
{
    protected $guarded = [];
}
