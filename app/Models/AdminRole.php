<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class AdminRole extends Authenticatable
{
    use HasFactory;

    public $timestamps = true;
    protected $guarded = [];
}
