<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'name',
        'text',
        'typed',
        'bg_image',
    ];
     
    protected $table = 'banners';
}
