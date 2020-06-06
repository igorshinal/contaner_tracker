<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;

class User extends AbstractEntity
{
    use Notifiable;

    protected $fillable = [
        'chat_id', 'access', 'first_name', 'last_name', 'username',
    ];

    protected $hidden = [
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
