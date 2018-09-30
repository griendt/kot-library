<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Layout
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property bool $active
 * @property int $role_id
 * @property Role $role
 * @property int $user_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LayoutExploit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LayoutExploit whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LayoutExploit whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LayoutExploit whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LayoutExploit whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class UserRole extends Model
{
    protected $guarded = [];

    public function isAdmin() {
        return $this->role->isAdmin();
    }

    public function role() {
        return $this->belongsTo('App\Role');
    }
}
