<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function user()
    {
        //hold that though;
        return $this->belongsTo(User::class);
    }
}
