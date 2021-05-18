<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    protected $fillable = ['name', 'phone_number', 'address'];

    use HasFactory;
}
