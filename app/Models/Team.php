<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'title',
        'email',
        'details',
        'image_url',
        'facebook_url',
        'twitter_url'
    ];
}
