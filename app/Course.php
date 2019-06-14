<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $guarded = [];

    public function labs()
    {
        return $this->hasMany(\App\Lab::class);
    }

    public function scopeOngoing($query)
    {
        return $query->where('status', 'ongoing');
    }

    public function scopeCompleted($query)
    {
        return $query->where('status', 'completed');
    }

    public function scopeArchived($query)
    {
        return $query->where('status', 'archived');
    }

}
