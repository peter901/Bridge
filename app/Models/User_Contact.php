<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Contact extends Model
{
    use HasFactory;

    protected $fillable = ['users_id', 'contact_type', 'contact'];

    protected $table = "user_contacts";
}
