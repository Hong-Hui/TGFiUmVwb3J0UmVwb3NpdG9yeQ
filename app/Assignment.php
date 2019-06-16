<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{

    protected $guarded = [];

    public function lab()
    {
        return $this->belongsTo(Lab::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
