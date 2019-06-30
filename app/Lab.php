<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{

    protected $guarded = [];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}
