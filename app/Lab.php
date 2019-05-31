<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    protected $guarded = [];

    // Relationships
    public function course() {
        return $this->belongsTo(\App\Course::class);
    }

    public function assignments() {
        return $this->hasMany(\App\Assignment::class);
    }

    // Scopes
    public function scopeLocalLabs($query, $course_id)
    {
        return $query->where('course_id', $course_id);
    }
}
