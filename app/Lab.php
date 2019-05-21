<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    protected $guarded = [];

    public function classe() {
        return $this->belongsTo(\App\Classe::class);
    }

    public function assignments() {
        return $this->hasMany(\App\Assignment::class);
    }
}
