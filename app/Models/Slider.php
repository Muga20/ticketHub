<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    // Define the relationship with the Event model
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}