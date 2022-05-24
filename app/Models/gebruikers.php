<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gebruikers extends Model
{
    use HasFactory;
    protected $table = "gebruikers";
    protected $fillable =
    [
        'gebruiker' => 'gebruiker',
        'wachtwoord' => 'wachtwoord',
        'email' => 'email'

    ];
}
