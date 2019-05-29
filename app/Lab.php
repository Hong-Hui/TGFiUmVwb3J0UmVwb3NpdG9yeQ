<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    protected $guarded = [];

    // Relationships
    public function classe() {
        return $this->belongsTo(\App\Classe::class);
    }

    public function assignments() {
        return $this->hasMany(\App\Assignment::class);
    }

    // Scopes
    public function scopeLocalLabs($query, $classe_id)
    {
        return $query->where('classe_id', $classe_id);
    }
}
