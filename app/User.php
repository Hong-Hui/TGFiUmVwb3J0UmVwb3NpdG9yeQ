<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{

    use Notifiable;
    use HasRoles;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class)->withTimestamps();
    }

    public function labs()
    {
        return $this->belongsToMany(Lab::class)->withTimestamps();
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }

    public function scopeTeachers($query)
    {
        return $query->role('teacher');
    }

    public function scopeAssistants($query)
    {
        return $query->role('assistant');
    }

    public function scopeStudents($query)
    {
        return $query->role('student');
    }

}
