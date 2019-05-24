<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $guarded = [];

    // Relationships
    public function labs()
    {
        return $this->hasMany(\App\Lab::class);
    }

    // Scopes
    public function scopeOngoing($query)
    {
        return $query->where('status', 'ongoing');
    }

    public function scopeEnded($query)
    {
        return $query->where('status', 'ended');
    }

    public function scopeArchived($query)
    {
        return $query->where('status', 'archived');
    }
}
