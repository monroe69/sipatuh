<?php

namespace App\Models;

use Modules\K3\Entities\Audit;
use Modules\K3\Entities\Safeti;
use Laravel\Sanctum\HasApiTokens;
use Modules\K3\Entities\Penerapan;
use Modules\K3\Entities\Reporting;
use Modules\K3\Entities\Comunication;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the role that owns the user.
     *
     */
    public function role()
    {
       return $this->belongsTo(Role::class);
    }
    public function leadership()
    {
       return $this->belongsTo(Leadership::class);
    }
    public function audit()
    {
       return $this->belongsTo(Audit::class);
    }
    public function penerapan()
    {
       return $this->belongsTo(Penerapan::class);
    }
    public function safeti()
    {
       return $this->belongsTo(Safeti::class);
    }
    public function comunication()
    {
       return $this->belongsTo(Comunication::class);
    }
    public function reporting()
    {
       return $this->belongsTo(Reporting::class);
    }
}
