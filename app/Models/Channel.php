<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    public function message()
    {
        return $this->hasMany('App\Models\Message', 'foreign_key');
    }
}
