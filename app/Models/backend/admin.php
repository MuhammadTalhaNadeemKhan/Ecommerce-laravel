<?php

namespace App\Models\backend;

use Illuminate\Foundation\Auth\User as Authenticatable;  // Make sure to use Authenticatable
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;  // Enable notifications, optional

    // Table name
    protected $table = 'admins';

    // Protecting against mass-assignment
    protected $fillable = [
        'name', 
        'email', 
        'password',
    ];

    // Optional: If you want to disable timestamps for your table
    public $timestamps = false;
}
