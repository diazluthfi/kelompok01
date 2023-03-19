<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuliner extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'address_url',
        'area_id',
        'user_id',
        'description',
    ];
}
