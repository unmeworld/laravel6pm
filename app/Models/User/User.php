<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticable;
use App\Http\Controllers\Backend\UserController;
class User extends Authenticable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'role',
        'image'
    ];

}
