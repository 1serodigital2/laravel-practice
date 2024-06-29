<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nightstay extends Model
{
    use HasFactory;

    protected $fillable = ['nightstay', 'category_id'];
}
