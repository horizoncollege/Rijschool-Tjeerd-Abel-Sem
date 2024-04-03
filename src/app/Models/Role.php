<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;


    public function permission()
    {
        return $this->belongsToMany(Permission::class, 'roles_permission', 'role_id', 'permission_id');
    }

    public function user()
    {
        return $this->belongsToMany(User::class, 'user_role', 'user_id', 'role_id');
    }
}
