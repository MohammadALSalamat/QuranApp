<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juz extends Model
{
    use HasFactory;
    public function verses()
    {
        return $this->hasMany('App\Models\Verse');
    }
    public function chapters()
    {
        # code...
        return $this->hasMany('App\Models\Chapter');
    }
}
