<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lrn', 'role_id', 'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function role() {
        return $this->belongsTo('App\Role');
    }
    public function isAdmin () {
        return $this->role['name'] == 'administrator';
    }
    public function isSuperAdmin () {
        return $this->role['name'] == 'superadmin';
    }

}
