<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    // Specify the table name
    protected $table = 'faqs';

    // Allow mass assignment for these fields
    protected $fillable = [
        'question',
        'answer',
    ];
}
