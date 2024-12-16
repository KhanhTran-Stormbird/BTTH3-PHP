<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // Make sure all fields that you want to mass-assign are listed here
    protected $fillable = ['title', 'description', 'long_description', 'completed'];
}
