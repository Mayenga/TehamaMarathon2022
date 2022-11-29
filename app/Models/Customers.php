<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname',
        'phone',
        'email',
        'cityregion',
        'gender',
        'distance',
        'tshirtsize',
        'password',
    ];
}
