<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role_user extends Model
{
    use HasFactory;

    protected $table = "roles_user";

    protected $fillable=[
        'user_id',
        'roles_id'
    ];
}
