<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'character_name', 'character_id', 'token', 'owner_hash'
    ];

    protected $hidden = [
        'token', 'owner_hash',
    ];

    public function deal(){
        return $this->hasMany('App\Deal', 'owner_id');
    }
}
