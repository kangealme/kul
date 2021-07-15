<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submenu_User extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_id',
        'submenu_id',
        'user_id',
        'desc',
    ];
}
