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
}
