<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verse extends Model
{
    use HasFactory;
    public function Juz()
    {
        return $this->belongsTo('App\Models\Juz');
    }
    public function chapters()
    {
        return $this->belongsTo('App\Models\Chapter');
    }

}
