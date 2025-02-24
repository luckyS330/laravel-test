<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'contact_messages';

    // Define the fillable fields
    protected $fillable = ['name', 'email', 'message'];

    // If you want to use timestamps, uncomment the line below
    // public $timestamps = true;
}