<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
    
class destination extends Model
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

    public function user(){
        return $this->belongsTo(user::class,'user_id');
    }
}
