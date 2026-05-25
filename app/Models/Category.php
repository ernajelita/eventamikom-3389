<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'image'];

    // Relasi one-to-many ke Event
    public function events()
    {
        return $this->hasMany(Event::class);
    }
}