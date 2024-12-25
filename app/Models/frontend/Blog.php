<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Blog extends Model
{
    use HasFactory;

    // Fields that can be mass-assigned
    protected $fillable = ['title', 'content', 'image', 'tags', 'post_date'];

    // Cast the post_date to a Carbon instance
    protected $casts = [
        'post_date' => 'datetime', // Automatically cast 'post_date' to Carbon
    ];
}
