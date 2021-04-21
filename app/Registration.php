<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Registration extends Model
{
    //
    use Notifiable;
    protected $fillable = [
        'phone_number', 'name', 'email'
    ];
}
