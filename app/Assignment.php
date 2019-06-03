<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $guarded = [];

    // Relationships
    public function lab() {
        return $this->belongsTo(\App\Lab::class);
    }

    // Scopes
    public function scopeLocalAssignments($query, $lab_id)
    {
        return $query->where('lab_id', $lab_id);
    }

}
