<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = "masterdata.users";
    protected $primaryKey = 'user_id';

    public function user_role()
    {
        return $this->hasMany(UserRole::class, 'user_id', 'user_id');
    }
}
