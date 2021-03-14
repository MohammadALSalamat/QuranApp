<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    public function verses()
    {
        return $this->hasMany('App\Models\Verse');
    }
    public function Juz()
    {
        # code...
        return $this->belongsTo('App\Models\Juz');
    }
}
