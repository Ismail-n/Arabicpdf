<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneBooth extends Model
{
    use HasFactory;
    protected $table="phonebooth";
    protected $fillable = [
        'name',
        'email',
        'mobile_number',
        'address',
    ];
}
