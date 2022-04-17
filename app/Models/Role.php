<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;

    protected $table = 'masterdata.role';
    protected $primaryKey = 'role_id';

    public function user_role()
    {
        return $this->hasMany(UserRole::class, 'role_id', 'role_id');
    }
}
