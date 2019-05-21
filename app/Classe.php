<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $guarded = [];

    public function labs() {
        return $this->hasMany(\App\Lab::class);
    }
}
