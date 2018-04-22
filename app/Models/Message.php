<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'foreign_key');
    }
    
    public function channel()
    {
        return $this->belongsTo('App\Models\Channel', 'foreign_key');
    }
    
    public function community()
    {
        return $this->belongsTo('App\Models\Communaute', 'foreign_key');
    }
}