<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Filament\Panel;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements FilamentUser
{
    use HasFactory, SoftDeletes, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    const ROLE_SUPER_ADMIN  = 'super-admin';
    const ROLE_ADMIN        = 'admin';
    const ROLE_MODERATOR    = 'moderator';
    const ROLE_USER         = 'user';
    
    const ROLES = [
        self::ROLE_SUPER_ADMIN  => 'super-admin',
        self::ROLE_ADMIN        => 'admin',
        self::ROLE_MODERATOR    => 'moderator',
        self::ROLE_USER         => 'user',
    ];

    
    public function canAccessPanel(Panel $panel): bool
    {
        return $this->SuperAdmin() || $this->Admin() || $this->Moderator();
    }

    public function SuperAdmin(){
        return $this->role === self::ROLE_SUPER_ADMIN;
    }
    public function Admin(){
        return $this->role === self::ROLE_ADMIN; 
    }
    public function Moderator(){
        return $this->role === self::ROLE_MODERATOR;
    }
}
