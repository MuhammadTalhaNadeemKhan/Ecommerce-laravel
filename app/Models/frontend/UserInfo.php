<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserInfo extends Model
{
    use HasFactory; // Enables Eloquent factory functionality for the model

    protected $table = 'userinfo'; // Defines the name of the table for this model
    protected $fillable = ['name', 'email', 'password', 'ip_address']; // Specifies the fields that are mass assignable
}
